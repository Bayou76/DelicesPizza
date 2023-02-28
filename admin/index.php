<?php 
  include './includes/head.php';
  require './includes/navbar.php';
  require './database/database.php';



  $countFilePath = './assets/fichiers/compteur.txt';
  $count = 0;
  if (file_exists($countFilePath)) {
    $count = (int)file_get_contents($countFilePath);
  }
  
  // Obtenir l'année en cours
  $annee_en_cours = date('Y');

  // Récupération du jour actuel
  $date_aujourdhui = date('Y-m-d');
  // Récupération du mois actuel
  $mois_actuel = date('m');


  //AUJOURD'HUI
  // Requête pour compter les commandes dans la journnée actuel
  $requete_nombre_commandes = $bdd->prepare("SELECT COUNT(*) FROM commandes WHERE date = ?");
  $requete_nombre_commandes->execute([$date_aujourdhui]);

  // Récupération du résultat
  $nombre_commandes_today = $requete_nombre_commandes->fetchColumn();


  // Total vente aujourd'hui
  $requete_ventes_aujourdhui = $bdd->query("SELECT SUM(prix) as total_ventes_today FROM commandes WHERE date = '$date_aujourdhui'");
  $ventes_aujourdhui = $requete_ventes_aujourdhui->fetch();

  //MOIS



  //CA

  // Récupération le CA de l'année actuel
  $requete_CA = $bdd->query("SELECT SUM(prix) as chiffre_affaire FROM commandes WHERE YEAR(date) = YEAR(CURDATE())");
  $CA = $requete_CA->fetch();



  // Requête SQL pour compter le nombre de commandes pour chaque pizza
  $nb_pizza_commande = $bdd->query('SELECT p.nom, COUNT(c.pizza_id) AS nb_commandes FROM pizzas p LEFT JOIN commandes c ON p.id = c.pizza_id GROUP BY p.nom ORDER BY nb_commandes DESC');

  // Tableau des noms de mois en français
  $mois_fr = array(
      1 => 'Janvier',
      2 => 'Février',
      3 => 'Mars',
      4 => 'Avril',
      5 => 'Mai',
      6 => 'Juin',
      7 => 'Juillet',
      8 => 'Août',
      9 => 'Septembre',
      10 => 'Octobre',
      11 => 'Novembre',
      12 => 'Décembre'
  );

  // Initialisation du mois à Janvier
  $mois = 1;

?>



<?php if(isset($_SESSION['username'])){ ?>

<h2 class="text-center mt-5"> Bienvenue, <?= $_SESSION['username'] ?> ! </br> 
    Vous êtes connecté en tant que <?= $_SESSION['role'] ?> </h2>

<h1 class="text-center mt-5">Quelques chiffres</h1>
<div class=" container text-center mt-5">
  <table class="table">
  <thead class="bg-warning">
    <tr>
      <th>Commandes aujourd'hui</th>
      <th>Ventes aujourd'hui</th>
      <th>Chiffre d'affaire de l'année</th>
    </tr>
  </thead>
  <tbody class="bg-primary">
    <tr class="text-light">
      <td><?= $nombre_commandes_today; ?></td>
      <td><?= $ventes_aujourdhui['total_ventes_today']; ?>€</td>
      <td><?= $CA['chiffre_affaire']; ?>€</td>
    </tr>
  </tbody>
</table>
</div>


<div class=" container text-center mt-5">
  <table class="table">
  <thead class="bg-warning">
    <th>MOIS</th>
    <th>Ventes du mois en €</th>
    <th>Commandes du mois</th>
  </thead>
  <tbody class="bg-primary">
<?php
    // Boucle sur chaque mois de l'année en cours
    while ($mois <= 12) {
      // Obtenir le nom du mois en cours
      $nom_mois = $mois_fr[$mois];
      
      // Requête pour obtenir les ventes du mois en cours
      $requete_ventes_mois = $bdd->prepare("SELECT SUM(prix) as total_ventes FROM commandes WHERE MONTH(date) = ? AND YEAR(date) = ?");
      $requete_ventes_mois->execute([$mois, $annee_en_cours]);
      $ventes_mois = $requete_ventes_mois->fetch();

      // Requête pour compter les commandes dans le mois actuel
      $requete_commandes_mois = $bdd->prepare("SELECT COUNT(*) as nombre_commandes FROM commandes WHERE MONTH(date) = ? AND YEAR(date) = ?");
      $requete_commandes_mois->execute([$mois, $annee_en_cours]);
      $nombre_commandes_mois = $requete_commandes_mois->fetch();
?>
    <tr class="text-light">
      <td> <?= $nom_mois,' ', $annee_en_cours ?></td>
      <td><?= $ventes_mois['total_ventes']?>€</td>
      <td><?= $nombre_commandes_mois['nombre_commandes']; ?></td>
      <?php 
  // Passer au mois suivant
    $mois++; } ?>
    </tr>
  </tbody>
</table>
</div>



<h1 class="text-center mt-5">Les pizzas Vendues</h1>

  <div class=" container text-center mt-5">
    <table class="table">
  <thead class="bg-warning">
    <tr>
      <th>Nom de la pizza</th>
      <th>Nombre de commandes</th>
    </tr>
  </thead>
  <tbody class="bg-primary">
  <?php while ($pizza = $nb_pizza_commande->fetch()) { ?>
    <tr class="text-light">
      <td><?= $pizza['nom']; ?></td>
      <td><?= $pizza['nb_commandes']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>


<div class="container text-center  mt-5">
  <div class='card text-center'></div>
  <div class="card-body">
    <div class="card-title bg-info fs-2">
      Nombre de visite de la page carte des pizzas 
    </div> 
    <div class="card-text fs-4"><?= $count ?> Visiteurs</div>
  </div>
</div>


<?php } else { ?>

  <h1 class="text-center mt-5"> Bienvenue sur le site de gestion ! </br>
    Cette plateforme est réservée exclusivement aux gérants 
    et aux employés inscrits par le gérant. </br>
    Si vous êtes un gérant ou un employé inscrit, 
    vous pouvez vous connecter pour accéder à la plateforme. 
    Si vous n'êtes pas encore inscrit, 
    veuillez contacter l'administrateur ou le gérant pour obtenir votre compte d'accès.
  </h1>


  <?php } ?>
</body>
</html>


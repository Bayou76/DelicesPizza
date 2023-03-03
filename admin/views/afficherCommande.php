
<?php
include '../includes/head.php';
require '../includes/navbar.php';
require '../../admin/database/database.php';
?>



<div class="container">
<h1 class="text-center text-danger text-uppercase mt-5">Liste des commandes</h1>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Nom du client</th>
        <th>Nom de la pizza</th>
        <th>Taille</th>
        <th>Prix</th>
        <th>Adresse de livraison</th>
        <th>Date</th>
        <th>Statut</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
    // Récupération des commandes de la base de données
    $requete_commandes = $bdd->query("SELECT commandes.id, clients.nom_client 
      as nom_client, pizzas.nom as nom_pizza, commandes.taille, commandes.prix, 
      commandes.adresse_livraison, commandes.date, commandes.statut 
      FROM commandes 
      JOIN clients 
      ON commandes.client_id = clients.id 
      JOIN pizzas 
      ON commandes.pizza_id = pizzas.id");
    while ($commande = $requete_commandes->fetch()) { ?>
      <tr class="align-middle">
        <td><?= $commande['nom_client'] ?></td>
        <td><?= $commande['nom_pizza'] ?></td>
        <td><?= $commande['taille'] ?></td>
        <td><?= $commande['prix'] ?>€</td>
        <td><?= $commande['adresse_livraison'] ?></td>
        <td><?= $commande['date'] ?></td>
        <td><?= $commande['statut'] ?></td>
        <td >
          <a  href="./modiferCommande.php?id=<?= $commande['id'] ?>" class="btn btn-info m-2">Modifier</a>
          <a href="../actions/pizzas/suppr_commande.php?id=<?= $commande['id'] ?>" class="btn btn-danger">Supprimer</a>
        </td>
      </tr>
    <?php }
    ?>
    </tbody>
  </table>
</div>
</div>

<?php   require '../includes/footer.php'; ?>
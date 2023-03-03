<?php 
  include '../includes/head.php';
  require '../includes/navbar.php';
  require '../../admin/database/database.php';
  require '../../admin/actions/pizzas/ajouter_commande.php';
?>

<h1 class="text-center text-danger text-uppercase mt-5">Ajouter une Commande</h1>
  <div class="form-container ">
  <form action="" method="post">
  <div class="form-group">
    <label for="client">Client</label>
    <select name="client_id" id="client" required onchange="getClientAddress()">
      <option value="" disabled selected>client existant ou un nouveau client</option>
      <option value="">Nouveau client</option>
      <?php
        // Récupération des clients de la base de données
        $requete_clients = $bdd->query("SELECT id, nom_client FROM clients");
        while ($client = $requete_clients->fetch()) {
          echo '<option value="'.$client['id'].'">'.$client['nom_client'].'</option>';
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="nom_client">Nom</label>
    <input type="text" name="nom_client" id="nom_client">
  </div>
  <div class="form-group">
    <label for="adresse_client">Adresse</label>
    <input type="text" name="adresse_client" id="adresse_client" oninput="copierAdresse()">
  </div>
  <div class="form-group">
    <label for="telephone_client">Téléphone</label>
    <input type="text" name="telephone_client" id="telephone_client">
  </div>
  <div class="form-group">
    <label for="pizza">Pizza</label>
    <select name="pizza_id" id="pizza" required>
      <option value="" disabled selected>Sélectionnez une pizza</option>
      <?php
        // Récupération des pizzas de la base de données
        $requete_pizzas = $bdd->query("SELECT id, nom FROM pizzas");
        while ($pizza = $requete_pizzas->fetch()) {
          echo '<option value="'.$pizza['id'].'">'.$pizza['nom'].'</option>';
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="taille">Taille</label>
    <select name="taille" id="taille" required>
      <option value="" disabled selected>Sélectionnez une taille</option>
      <option value="junior">junior</option>
      <option value="senior">senior</option>
      <option value="mega">mega</option>
      <option value="Smega">super mega</option>
      <option value="giant">giant</option>
    </select>
  </div>
  <div class="form-group">
    <label for="adresse_livraison">Adresse de livraison</label>
    <input type="text" name="adresse_livraison" id="adresse_livraison" required>
  </div>
  <div class="form-group">
    <label for="statut">Statut</label>
    <select name="statut" id="statut" required>
      <option value="" disabled selected>Sélectionnez un statut</option>
      <option value="en cours">En cours</option>
      <option value="livrée">Livrée</option>
      <option value="annulée">Annulée</option>
    </select>
  </div>
  <input type="submit" value="Ajouter la commande">
</form>

<?php   require '../includes/footer.php'; ?>
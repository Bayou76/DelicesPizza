<?php 
  include '../includes/head.php';
  require '../includes/navbar.php';

   // Connexion à la base de données

    require '../../admin/database/database.php';

  // Vérification de l'existence d'un gérant
  $requete_verification_gerant = $bdd->prepare("SELECT COUNT(*) FROM utilisateurs WHERE role = 'gerant'");
  $requete_verification_gerant->execute();
  $nombre_gerant = $requete_verification_gerant->fetchColumn();

  if ($nombre_gerant > 0) {
    // Redirection vers une autre page ou affichage d'un message
    header('Location: ./connexion.php');
    exit;
  }
?>

  <div class="form-container">
  <h1 class="text-center text-danger text-uppercase mt-5">Nouveau employé</h1>
  <form method="post" action="../actions/users/register.php">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required>
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" required>
    </div>
    <div class="form-group">
      <label for="poste">Rôle</label>
      <select name="poste" id="poste" required>
        <option value="livreur">livreur</option>
        <option value="pizzaiolo">pizzaiolo</option>
      </select>
    </div>
    <div class="form-group">
      <label for="adresse">Adresse</label>
      <input type="text" name="adresse" id="adresse" required>
    </div>
    <div class="form-group">
      <label for="numero_telephone">numero telephone</label>
      <input type="text" name="numero_telephone" id="numero_telephone" required>
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="text" name="email" id="email" required>
    </div>
    <div class="form-group">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" name="username" id="username" required>
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="form-group">
      <label for="role">Rôle</label>
      <select name="role" id="role" required>
        <option value="gerant">Gérant</option>
        <option value="employe">Employé</option>
      </select>
    </div>
    <div class="form-group">
    <input type="submit" value="Ajouter l'employé">
    </div>
</form>

  </div>

  <?php   require '../includes/footer.php'; ?>
<?php 
  include '../includes/head.php';
  require '../includes/navbar.php';
  require '../../admin/database/database.php';
  require '../../admin/actions/users/login.php';
?>

<h1 class="text-center text-danger text-uppercase mt-5">Connexion</h1>
  <div class="form-container">
    <form action="" method="post">
      <label for="username">Nom d'utilisateur :</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="login" value="Se connecter">
    </form>
  </div>
  
  <?php   require '../includes/footer.php'; ?>
<?php session_start(); ?>
<body>
<div class="container-full">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../../admin/index.php">DP Espace Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
            if(isset($_SESSION['username'])){
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/inscriptionEmploye.php">Inscrire un nouveau employé</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/afficheEmployes.php">Les employées</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/afficheClients.php">Les clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/pizzas.php">Les Pizzas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/ajoutPizza.php">Ajouter une pizza</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/afficherCommande.php">Les Commandes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/views/ajoutCommande.php">Ajouter une commande</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../admin/actions/users/logout.php">Déconnexion</a>
              </li>
              <?php
        } else {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="../../admin/views/inscription.php">Inscrire un nouveau employé</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../admin/views/connexion.php">Connexion</a>
          </li>
          <?php }?>
      </ul>
    </div>
  </div>
</nav>
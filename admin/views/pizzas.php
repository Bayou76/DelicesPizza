<?php 
  include '../includes/head.php';
  require '../includes/navbar.php';
  require '../../admin/database/database.php';
?>


<div class="container-full">
  <div class="text-center mt-5">
    <a href="./ajoutPizza.php" class="btn btn-danger"><h1 class="text-center text-uppercase">Ajouter une pizza</h1></a>
  </div>
  <div class="row">
    <h1 class="text-center bg-danger mt-4">Base Tomate</h1>
    <?php
      $requete = $bdd->prepare("SELECT * FROM pizzas where ingredients LIKE 'Tomate%'");
      $requete->execute();
      while ($pizza = $requete->fetch()) {
    ?>
      <div class="col-sm-4 mt-4 text-center ">
        <div class="card m-4 bg-danger">
          <img class="card-img-top img-thumbnail" src="../assets/uploads/<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['nom']; ?>">
          <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $pizza['nom']; ?></h5>
            <p class="card-text text-light"><?php echo $pizza['ingredients']; ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix Junior: <?php echo $pizza['prix_junior']; ?>€</li>
            <li class="list-group-item">Prix Senior: <?php echo $pizza['prix_senior']; ?>€</li>
            <li class="list-group-item">Prix Smega: <?php echo $pizza['prix_Smega']; ?>€</li>
            <li class="list-group-item">Prix Giant: <?php echo $pizza['prix_giant']; ?>€</li>
            <li class="list-group-item">Prix Mega: <?php echo $pizza['prix_mega']; ?>€</li>
          </ul>
          <div class="text-center py-4">
            <a href="./modifierPizza.php?id=<?php echo $pizza['id']; ?>" class="btn btn-light">Modifier</a>
            <a href="../actions/pizzas/supp_pizza.php?id=<?php echo $pizza['id']; ?>" class="btn btn-light">Supprimer</a>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</div>

<div class="container-full">
  <div class="row">
    <h1 class="text-center bg-warning mt-4">Base Crème Fraîche</h1>
    <?php
      $requete = $bdd->prepare("SELECT * FROM pizzas where ingredients LIKE 'Crème%'");
      $requete->execute();
      while ($pizza = $requete->fetch()) {
    ?>
      <div class="col-sm-4 mt-4 text-center ">
        <div class="card m-4 bg-warning">
          <img class="card-img-top img-thumbnail" src="../assets/uploads/<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['nom']; ?>">
          <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $pizza['nom']; ?></h5>
            <p class="card-text text-light"><?php echo $pizza['ingredients']; ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix Junior: <?php echo $pizza['prix_junior']; ?>€</li>
            <li class="list-group-item">Prix Senior: <?php echo $pizza['prix_senior']; ?>€</li>
            <li class="list-group-item">Prix Smega: <?php echo $pizza['prix_Smega']; ?>€</li>
            <li class="list-group-item">Prix Giant: <?php echo $pizza['prix_giant']; ?>€</li>
            <li class="list-group-item">Prix Mega: <?php echo $pizza['prix_mega']; ?>€</li>
          </ul>
          <div class="text-center py-4">
            <a href="./modifierPizza.php?id=<?= $pizza['id']; ?>" class="btn btn-light">Modifier</a>
            <a href="../actions/pizzas/supp_pizza.php?id=<?php echo $pizza['id']; ?>" class="btn btn-light">Supprimer</a>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
</div>

<?php   require '../includes/footer.php'; ?>
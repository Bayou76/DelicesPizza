<?php include '../includes/head.php';
  require '../includes/navbar.php';
  require '../database/database.php';
  require '../actions/pizzas/modifier_pizza.php';
  $requete = $bdd->prepare("SELECT * FROM pizzas");
  $requete->execute();
  $pizza = $requete->fetch();
?>

<h1 class="text-center text-danger text-uppercase mt-5">Modifier la pizza : <?= $pizza['nom']; ?></h1>
<div class="form-container">
    <div class="row">
        <!-- Formulaire de modification d'une pizza -->
      <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $pizza['id']; ?>">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" value="<?php echo $pizza['nom']; ?>" required>
        </div>
        <div class="form-group">
          <label for="ingredients">Ingrédients</label>
          <input type="text" name="ingredients" id="ingredients" value="<?php echo $pizza['ingredients']; ?>" required>
        </div>
        <div class="form-group">
          <label for="prix_junior">Prix junior</label>
          <input type="text" name="prix_junior" id="prix" value="<?php echo $pizza['prix_junior']; ?>" required>
        </div>
        <div class="form-group">
          <label for="prix_senior">Prix sénior</label>
          <input type="text" name="prix_senior" id="prix" value="<?php echo $pizza['prix_senior']; ?>" required>
        </div>
        <div class="form-group">
          <label for="prix_mega">Prix_ méga</label>
          <input type="text" name="prix_mega" id="prix" value="<?php echo $pizza['prix_mega']; ?>" required>
        </div>
        <div class="form-group">
          <label for="prix_smega">Prix super méga</label>
          <input type="text" name="prix_Smega" id="prix" value="<?php echo $pizza['prix_Smega']; ?>" required>
        </div>
        <div class="form-group">
          <label for="prix_giant">Prix giant</label>
          <input type="text" name="prix_giant" id="prix" value="<?php echo $pizza['prix_giant']; ?>" required>
        </div>
        <input type="submit" value="Modifier la pizza">
      </form>
    </div>
</div>


<?php   require '../includes/footer.php'; ?>
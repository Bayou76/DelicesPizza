<?php 
  include '../includes/head.php';
  require '../includes/navbar.php';
  require '../../admin/database/database.php';
?>
    <h1 class="text-center text-danger text-uppercase mt-5">Ajouter une Pizza</h1>
    <div class="form-container">
    <form action="../actions/pizzas/ajouter_pizzas.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Nom de la pizza :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        
        <div class="form-group">
            <label for="ingredients">Ingrédients :</label>
            <input type="text" id="pizza_ingredients" name="ingredients" required>
        </div>

        <div class="form-group">
            <label for="prix_junior">Prix (junior)</label>
            <input type="number" class="form-control" id="prix_junior" name="prix_junior">
        </div>
        <div class="form-group">
            <label for="prix_senior">Prix (senior)</label>
            <input type="number" class="form-control" id="prix_senior" name="prix_senior">
        </div>
        <div class="form-group">
            <label for="prix_mega">Prix (mega)</label>
            <input type="number" class="form-control" id="prix_mega" name="prix_mega">
        </div>
        <div class="form-group">
            <label for="prix_Smega">Prix (Smega)</label>
            <input type="number" class="form-control" id="prix_Smega" name="prix_Smega">
        </div>
        <div class="form-group">
            <label for="prix_giant">Prix (giant)</label>
            <input type="number" class="form-control" id="prix_giant" name="prix_giant">
        </div>

        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" id="image" name="image" required>
        </div>

        <input type="submit" value="Ajouter la pizza">
    </form>
    </div>

    <?php   require '../includes/footer.php'; ?>
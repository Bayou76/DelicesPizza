<?php
include '../includes/head.php';
require '../includes/navbar.php';
require '../../admin/database/database.php';
?>

<div class="container-full">
    <h1 class="text-center text-danger text-uppercase mt-5">Liste des clients</h1>
    <div class="row">
    <?php
        $requete = $bdd->prepare("SELECT * FROM clients");
        $requete->execute();
        while ($clients = $requete->fetch()) {
    ?>
        <div class="col-sm-4 mt-4 text-light text-center">
        <div class="employerL card m-4">
            <div class="card-body">
            <h2 class="card-title text-uppercase border-3 border border-ligth p-2"> <?= $clients['nom_client']; ?> </h2>
                <h3 class="card-title">Tél : <?= $clients['telephone']; ?></h3>
                <p class="card-tex">Adresse : <?= $clients['adresse']; ?> </p>
            </div>
        </div>
        </div>
    <?php
        }
    ?>
</div>

<?php   require '../includes/footer.php'; ?>
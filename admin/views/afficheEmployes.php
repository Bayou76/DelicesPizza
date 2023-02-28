<?php 
  require '../includes/head.php';
  require '../includes/navbar.php';

   // Connexion à la base de données

    require '../../admin/database/database.php';
?>

<div class="container-full">
    <h1 class="text-center text-danger text-uppercase mt-5">Liste des employés</h1>
    <div class="row">
    <?php
        $requete = $bdd->prepare("SELECT * FROM employes");
        $requete->execute();
        $requeteUser = $bdd->prepare("SELECT role FROM utilisateurs");
        $requeteUser->execute();
        while ($employes = $requete->fetch() and $role = $requeteUser->fetch()) {
    ?>
        <div class="col-sm-4 mt-4 text-light text-center">
        <div class="card m-4 bg-success border border-4 border-dark">
            <div class="card-body">
                <h2 class="card-title text-uppercase text-dark border-3 border border-dark p-2"> <?= $role['role']; ?> </h2>
                <h3 class="card-title">Nom : <?= $employes['nom']; ?></h3>
                <h3 class="card-title">Prénom : <?= $employes['prenom']; ?></h3>
                <p class="card-tex">Poste : <?= $employes['poste']; ?> </p>
                <p class="card-tex">Adresse : <br> <?= $employes['adresse']; ?> </p>
                <p class="card-tex">Numero de telephone : <?= $employes['numero_telephone']; ?> </p>
                <p class="card-tex">Email : <?= $employes['email']; ?> </p>
                <p class="card-tex">Identifiant : <?= $employes['username']; ?> </p>
                <p class="card-tex">Mot de passe : 
                    <?php
                        // Affichage des bulles à la place du mot de passe
                        $password_length = 
                            strlen($employes['password']);
                        for ($i = 0; $i < $password_length; $i++) {
                            echo "&#9679;";
                        }
                    ?> 
                </p>
            </div>
        </div>
        </div>
    <?php
        }
    ?>
</div>
</div>
<?php   require '../includes/footer.php'; ?>
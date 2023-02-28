<?php
include '../includes/head.php';
require '../includes/navbar.php';
require '../../admin/database/database.php';
?>


<div class="container">
<h1 class="text-center text-danger text-uppercase mt-5">Liste des clients</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom/prenom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
            </tr>
        </thead>

        <tbody>
        <?php
        // Récupération des clients de la base de données
        $requete_clients = $bdd->query("SELECT nom_client, adresse, telephone 
            FROM clients");
        while ($client = $requete_clients->fetch()) { ?>

        <tr>
            <td><?= $client['nom_client'] ?></td>
            <td><?= $client['adresse'] ?></td>
            <td><?= $client['telephone'] ?></td>
        </tr>
        <?php }
        ?>
        </tbody>

    </table>
</div>

<?php   require '../includes/footer.php'; ?>
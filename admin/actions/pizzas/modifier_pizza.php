<?php



// Connexion à la base de données
require '../../admin/database/database.php';

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // Récupération des données du formulaire
    $id = intval($_POST['id']);
    $nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
    $ingredients = filter_var($_POST['ingredients'], FILTER_SANITIZE_STRING);
    $prix_junior = filter_var($_POST['prix_junior'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $prix_senior = filter_var($_POST['prix_senior'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $prix_mega = filter_var($_POST['prix_mega'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $prix_Smega = filter_var($_POST['prix_Smega'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $prix_giant = filter_var($_POST['prix_giant'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // Vérification des données
    if (strlen($nom) > 0 && strlen($ingredients) > 0 && $prix_junior > 0 && $prix_senior > 0 && $prix_mega > 0 && $prix_Smega > 0 && $prix_giant > 0) {
        // Mise à jour de la pizza dans la base de données
        $requete_modification_pizza = $bdd->prepare("UPDATE pizzas SET nom = ?, ingredients = ?, prix_junior = ?, prix_senior = ?, prix_mega = ?, prix_Smega = ?, 
        prix_giant = ? WHERE id = ?");
        $requete_modification_pizza->execute([$nom, $ingredients, $prix_junior,$prix_senior,$prix_mega, $prix_Smega,$prix_giant, $id]);
        // Redirection vers la liste des pizzas
        header('Location: ../../admin/views/pizzas.php');
    } else {
        // Affichage d'un message d'erreur
        echo "Erreur : les données saisies sont incorrectes.";
    }
} else {
    // Affichage d'un message d'erreur
    echo "Erreur : l'id de la pizza est incorrect.";
}


?>
<?php
    require('../../database/database.php'); 


// Récupération des données du formulaire
$nom = $_POST['nom'];
$ingredients = $_POST['ingredients'];
$prix_junior = $_POST['prix_junior'];
$prix_senior = $_POST['prix_senior'];
$prix_Smega = $_POST['prix_Smega'];
$prix_giant = $_POST['prix_giant'];
$prix_mega = $_POST['prix_mega'];

// Gérez l'upload de l'image en utilisant la fonction move_uploaded_file
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp, "../../assets/uploads/$image");

// Préparation de la requête d'insertion
$requete = $bdd->prepare("INSERT INTO pizzas (nom, ingredients, prix_junior, prix_senior, prix_Smega, prix_giant, prix_mega, image) 
VALUES (:nom, :ingredients, :prix_junior, :prix_senior, :prix_Smega, :prix_giant, :prix_mega, :image)");

// Liaison des paramètres
$requete->bindValue(':nom', $nom);
$requete->bindValue(':ingredients', $ingredients);
$requete->bindValue(':prix_junior', $prix_junior);
$requete->bindValue(':prix_senior', $prix_senior);
$requete->bindValue(':prix_Smega', $prix_Smega);
$requete->bindValue(':prix_giant', $prix_giant);
$requete->bindValue(':prix_mega', $prix_mega);
$requete->bindValue(':image', $image);

// Exécution de la requête
$requete->execute();

// Redirection vers la page d'affichage des pizzas
header('Location: ../../views/pizzas.php');


?>
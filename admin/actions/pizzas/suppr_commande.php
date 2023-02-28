<?php 

// Connexion à la base de données
require '../../database/database.php';

// Vérification que l'id de la pizza est bien présent dans la requête
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Erreur : id de la pizza non valide.");
}

// Récupération de l'id de la pizza à supprimer
$id = (int) $_GET['id'];

// Vérification que la pizza existe bien dans la base de données
$requete_verification_pizza = $bdd->prepare("SELECT * FROM commandes WHERE id = ?");
$requete_verification_pizza->execute([$id]);
if ($requete_verification_pizza->rowCount() === 0) {
    die("Erreur : pizza introuvable.");
}

// Suppression de la pizza dans la base de données
$requete_suppression_pizza = $bdd->prepare("DELETE FROM commandes WHERE id = ?");
$requete_suppression_pizza->execute([$id]);

// Redirection vers la liste des pizzas
header('Location: ../../views/afficherCommande.php');
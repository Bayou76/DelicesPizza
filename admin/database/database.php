<?php
try {
    // Connexion à la base de données
    $bdd = new PDO("mysql:host=localhost;dbname=dpgestion", "root", "");
    // Configuration de l'attribut de gestion des erreurs pour lancer des exceptions
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}
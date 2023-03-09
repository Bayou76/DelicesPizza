<?php

// Co database

require('../../admin/database/database.php');

if (isset($_POST['nom_client'])) {
    
    // Récupération des données du formulaire
    $client_id = $_POST['client_id'];
    $nom_client = $_POST['nom_client'];
    $adresse_client = $_POST['adresse_client'];
    $telephone_client = $_POST['telephone_client'];
    $pizza_id = $_POST['pizza_id'];
    $taille = $_POST['taille'];
    $adresse_livraison = $_POST['adresse_livraison'];
    $statut = $_POST['statut'];

    if ($client_id == "") {
        // Ajout du client dans la base de données
        $requete_ajout_client = $bdd->prepare(
            "INSERT INTO clients (nom_client, adresse, telephone) 
            VALUES (?, ?, ?)");
        $requete_ajout_client->execute([
            $nom_client, 
            $adresse_client, 
            $telephone_client
        ]);
    
        // Récupération de l'ID du client ajouté
        $client_id = $bdd->lastInsertId();
    }


    // Récupération du prix de la pizza
    $requete_prix = $bdd->prepare(
            "SELECT prix_$taille as prix 
            FROM pizzas 
            WHERE id = ?"
        );
    $requete_prix->execute([$pizza_id]);
    $resultat_prix = $requete_prix->fetch();
    $prix = $resultat_prix['prix'];

    // Ajout de la commande dans la base de données
    $requete_ajout_commande = $bdd->prepare(
        "INSERT INTO commandes 
            (client_id, pizza_id, taille, prix, total, adresse_livraison, 
            date, statut ) 
        VALUES (?,?,?,?,?,?,CURRENT_TIMESTAMP(),?)");
    $requete_ajout_commande->execute([
        $client_id, 
        $pizza_id, 
        $taille, 
        $prix, 
        $prix, 
        $adresse_livraison, 
        $statut
    ]);

    // Confirmation de l'ajout de la commande
    echo "Commande ajoutée avec succès!";
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;


}
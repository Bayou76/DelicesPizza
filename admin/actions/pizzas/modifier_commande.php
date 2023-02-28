<?php

// Connexion à la base de données
require '../../admin/database/database.php';

// Vérification de l'envoi du formulaire
if (isset($_POST['client_id'], $_POST['pizza_id'], $_POST['taille'], $_POST['prix'], $_POST['adresse_livraison'], $_POST['statut'])) {

  // Récupération des données du formulaire
  $id = $_POST['id'];
  $client_id = $_POST['client_id'];
  $pizza_id = $_POST['pizza_id'];
  $taille = $_POST['taille'];
  $prix = $_POST['prix'];
  $adresse_livraison = $_POST['adresse_livraison'];
  $statut = $_POST['statut'];

  // Mise à jour de la commande dans la base de données
  $requete_modification_commande = $bdd->prepare("UPDATE commandes SET client_id = ?, pizza_id = ?, taille = ?, prix = ?, adresse_livraison = ?, statut = ? WHERE id = ?");
  $requete_modification_commande->execute([$client_id, $pizza_id, $taille, $prix, $adresse_livraison, $statut, $id]);

  // Redirection vers la liste des commandes
  header('Location:../../admin/views/afficherCommande.php');
} else {
  echo "Erreur : formulaire incomplet";
}

?>




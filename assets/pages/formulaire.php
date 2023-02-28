<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupération des données du formulaire
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $tel = htmlspecialchars($_POST['tel']);
  $message = htmlspecialchars($_POST['message']);

  // Vérification des données
  $erreurs = array();
  if (empty($prenom)) {
    $erreurs[] = "Le prénom est requis.";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = "L'adresse e-mail est invalide.";
  }
  if (!preg_match('/^[0-9]{10}$/', $tel)) {
    $erreurs[] = "Le numéro de téléphone est invalide.";
  }
  if (empty($message)) {
    $erreurs[] = "Le message est requis.";
  }

  // Si aucune erreur, envoi du message
  if (empty($erreurs)) {
    $destinataire = "sebia.baya@gmail.com";
    $sujet = "Nouveau message de contact";
    $contenu = "Prénom : $prenom\n";
    $contenu .= "Adresse e-mail : $email\n";
    $contenu .= "Téléphone : $tel\n\n";
    $contenu .= "Message :\n$message\n";
    $headers = "From: $email";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
      echo "Votre message a bien été envoyé.";
    } else {
      echo "Une erreur est survenue lors de l'envoi du message.";
    }
  } else {
    // Affichage des erreurs
    echo "Les erreurs suivantes ont été détectées :<br>";
    foreach ($erreurs as $erreur) {
      echo "- $erreur<br>";
    }
  }
} else {
  // Si la requête n'est pas une requête POST, redirection vers la page du formulaire
  header("Location: contact.php");
  exit;
}

?>

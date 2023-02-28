<?php

// Connect to the database

require('../../admin/database/database.php');


// if (!empty($_POST)) {
//   // Récupération des données du formulaire
//   $username = $_POST['username'];
//   $password = $_POST['password'];
//   $role = $_POST['role'];

//   // Hashage du mot de passe
//   $password = password_hash($password, PASSWORD_DEFAULT);

//   // Enregistrement de l'utilisateur dans la base de données
//   $requete_inscription = $bdd->prepare("INSERT INTO utilisateurs (username, password, role) VALUES (?, ?, ?)");
//   $requete_inscription->execute([$username, $password, $role]);

//   // Redirection vers la page de connexion
//   header('Location: ../../views/connexion.php');
// }

if (!empty($_POST)) {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    // Récupération de l'utilisateur correspondant au nom d'utilisateur saisi
    $requete_connexion = $bdd->prepare("SELECT * FROM utilisateurs WHERE username = ?");
    $requete_connexion->execute([$username]);
    $utilisateur = $requete_connexion->fetch();
  
    session_start();
    $_SESSION['id'] = $utilisateur['id'];
    $_SESSION['username'] = $utilisateur['username'];
    $_SESSION['role'] = $utilisateur['role'];
    
    if($_SESSION['role'] == 'gerant'){
    header('Location: ../../admin/index.php');
    }else {
          header('Location: ../../admin/index.php');
    }
    
}

?>
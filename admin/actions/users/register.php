<?php
// Connect to the database

require '../../database/database.php';

// Vérification des données du formulaire
if (
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['role'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $poste = $_POST['poste'];
    $adresse = $_POST['adresse'];
    $numero_telephone = $_POST['numero_telephone'];
    $email = $_POST['email'];


    // Enregistrement de l'utilisateur en tant que gérant
    if ($role === 'employe' or $role === 'gerant') {
        // Insertion de l'employé dans la table "employés"
        $requete_insertion_employe = $bdd->prepare(
            'INSERT INTO employes (nom, prenom, poste,adresse,numero_telephone,email,username,password) VALUES (?, ?, ?,?,?,?,?,?)'
        );
        $requete_insertion_employe->execute([$nom, $prenom, $poste,$adresse,$numero_telephone,$email,$username,$password]);

        // Récupération de l'id de l'employé inséré
        $employe_id = $bdd->lastInsertId();

        // Insertion du compte utilisateur dans la table "utilisateurs"
        $requete_insertion_utilisateur = $bdd->prepare(
            'INSERT INTO utilisateurs (employe_id, username, password,role) VALUES (?, ?, ?,?)'
        );
        $requete_insertion_utilisateur->execute([
            $employe_id,
            $username,
            $password,
            $role,
        ]);
    }

    // Envoi de l'e-mail de confirmation
    $destinataire = $email;
    $sujet = "Confirmation d'inscription";
    $message = "Bonjour $nom,\n\nVotre inscription sur notre site a bien été enregistrée.\n\nVoici vos identifiants :\n\nIdentifiant : $username\nMot de passe : $password\n\nMerci de votre confiance !";
    $headers = "From: webmaster@example.com";
    mail($destinataire, $sujet, $message, $headers);

    header('Location: ../../views/inscriptionEmploye.php');
    echo 'Nouveau employé inscrit ';
}
?>


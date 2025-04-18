<?php

if (
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['message']) && !empty($_POST['message'])
) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    include '../inc/connexionlogin.php';

    $req = "INSERT INTO idee (nom, email, description) VALUES ('$nom', '$email', '$message')";
    
    if ($connexion->query($req)) {
        header('Location: ../pages/confirmation.php');
    } else {
        header('Location: ../pages/decontact.php');
    }

} else {
header('Location: ../pages/decontact.php');
}

?>

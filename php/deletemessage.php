<?php
include '../inc/connexionlogin.php';

$x = htmlspecialchars($_POST['id']);

$sql = "DELETE FROM idee WHERE id_idee = $x";


if ($connexion->query($sql)) {
    header('Location: ../pages/admin.php');
} else {
    header('Location: ../pages/admin.php');
}
?>

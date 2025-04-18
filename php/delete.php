<?php
include '../inc/connexionlogin.php';

$x = htmlspecialchars($_POST['id']);

$sql = "DELETE FROM recettes WHERE id_recette = $x";


if ($connexion->query($sql)) {
    header('Location: ../pages/admin.php');
} else {
    header('Location: ../pages/admin.php');
}
?>

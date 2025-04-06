<?php 
define('ROOT', '/vers_pro/login_admin/');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
        if(isset($title)){
            echo $title;
        }
        else{
            echo "Page d'accueil";
        }
        ?>
    </title>
    <meta name="description" content="Voici la page d'accueil de notre site">
    <link rel="stylesheet" href="<?= ROOT ?>css/styles.css">
</head>
<body>
    <header>
        <a href="<?= ROOT ?>index.php">
            <img src="<?= ROOT ?>images/logogrone.svg" alt="seo">
        </a>

        <h1><?= $title ?></h1>

        <form action="recherche.php" method="get">
            <input type="text" name="recherche" placeholder="Rechercher...">
        </form>
        
    </header>

    <nav>
        <a href="<?= ROOT ?>pages/delogin.php">LOGIN</a>
    </nav>
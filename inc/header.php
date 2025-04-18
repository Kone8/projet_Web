<?php 
define('ROOT', '/projet/');
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
        <div class="cote_droit">
            <form action="recherche.php" method="get">
                <input type="text" name="recherche" placeholder="Rechercher...">
            </form>

            <a href="<?= ROOT ?>pages/delogin.php" ">
                <img src="<?= ROOT ?>images/user.svg" alt="login" id="login">
            </a>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="<?= ROOT ?>index.php">Accueil</a></li>
            <li><a href="<?= ROOT ?>pages/categorie.php">Catégorie</a></li>
            <li><a href="<?= ROOT ?>pages/recettes.php">Recettes</a></li>
            <li><a href="<?= ROOT ?>pages/propos.php">A propos</a></li>
            <li><a href="<?= ROOT ?>pages/decontact.php">Contact</a></li>
        </ul>
    </nav>
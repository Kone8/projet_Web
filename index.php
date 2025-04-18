<?php 
$title ="Page d'accueil";
include 'inc/header.php'; ?>

    <main>
        <h1>Bienvenue sur notre site de recettes.</h1>
        <h3>Découvrez nos recettes simples, rapides et savoureuses !</h3>
        <br><br><br>
        <h2>Voici nos trois dernières recettes.</h2>
        
        <ul>
            <?php
            include 'inc/connexionlogin.php';
            $req = 'SELECT nom FROM recettes ORDER BY id_recette DESC LIMIT 3'; 

            $resultat = $connexion ->query($req);
            foreach ($resultat AS $i): 
                echo '<li>' . htmlspecialchars($i['nom']) . '</li>';
            endforeach; 
            ?>
        </ul>
        
    </main>

<?php include 'inc/footer.php';
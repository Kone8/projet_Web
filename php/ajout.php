<?php

if(
    isset($_POST['nom']) && !empty($_POST['nom'])
    &&
    isset($_POST['categorie']) && !empty($_POST['categorie'])
    &&
    isset($_POST['description']) && !empty($_POST['description'])
){

    $nom = htmlspecialchars($_POST['nom']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $description = htmlspecialchars($_POST['description']);
    
    include '../inc/connexionlogin.php';

    $req = "INSERT INTO recettes (nom, description, id_categorie) 
            VALUES ('$nom', '$description', '$categorie');";


    // IA, cela ne fonctionne pas de toute facon mais j'ai préféré vous le laisser quand même...
    if ($connexion->query($req)){

        $id_recette = $connexion->lastInsertId();

        if (isset($_POST['ingredients']) && !empty($_POST['ingredients'])) {
            $ingredients = $_POST['ingredients'];
            foreach ($ingredients as $id_ingredient) {

                $reqIngredient = "INSERT INTO recette_ingredient (id_recette, id_ingredient) 
                                  VALUES ('$id_recette', '$id_ingredient')";
                $connexion->query($reqIngredient);
            }
        }
    // IA


        header('Location: admin.php');
    } else {
        header('Location: ajouter.php');
    }

} else {
    header('Location: ajouter.php');
}

?>

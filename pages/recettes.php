<?php 
$title ="Page des recettes";
include '../inc/header.php'; ?>

    <main>
        <h1>Nos recettes!</h1>

        <table>
            <thead>
                <tr>
                    <th>Nom de la recette</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <th>Liste des ingrédients</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../inc/connexionlogin.php';
                $req = 'SELECT recettes.*, categories.nom AS nom_categorie FROM recettes JOIN categories ON recettes. id_categorie = categories.id_categorie';
                $resultat = $connexion ->query($req);
                foreach ($resultat AS $i):
                ?>
                <tr>
                    <td><?= $i['nom'] ?></td>
                    <td><?= $i['nom_categorie']?></td>
                    <td><?= $i['description']?></td>
                    <td>
                    <?php 
                        $id_recette = $i['id_recette'];
                        $req = "SELECT ingredients.nom FROM recette_ingredient 
                                JOIN ingredients ON recette_ingredient.id_ingredient = ingredients.id_ingredient 
                                WHERE recette_ingredient.id_recette = $id_recette";
                        $res = $connexion->query($req);

                        $liste = [];
                        foreach ($res as $ing) {
                            $liste[] = $ing['nom'];
                        }
                    
                        echo implode(', ', $liste);
                    ?>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>

        </table>
    </main>

<?php include '../inc/footer.php';
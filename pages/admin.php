<?php 
$title = "Pages admin";

include '../inc/header.php';

?>

<main>
    <h1>Pages d'administration</h1>
    <h2>Ajout / Modification / Suppression</h2>

    <table summary="">
        <caption>Liste des recettes</caption>
        <thead>
            <tr>
                <th>Nom de la recette</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Liste des ingredients</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../inc/connexionlogin.php';
            $requete = 'SELECT recettes.*, categories.nom AS nom_categorie 
            FROM recettes 
            JOIN categories ON recettes.id_categorie = categories.id_categorie';
            $resultat = $connexion->query($requete);

            foreach ($resultat as $i):
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
                <td>
                    <form action="../php/delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['id_recette']?>">
                        <input type="image" src="../images/close.svg" style="height: 2em;">
                    </form>
                </td>
                <td>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['id_recette']?>">
                        <input type="image" src="../images/update.svg" style="height: 2em;">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <button>
        <a href="ajouter.php">Ajouter une nouvelle recette !</a>
    </button>


    <!-- Oui j'ai fais ce CR(U)D à la dernière minute car je n'ai pas réussi à totalement finir celui de la recette.. même avec l'aide de l'IA-->
    <h2>Messages et/ou recettes des utilisateurs</h2>
    <table summary="">
        <caption>Liste des messages</caption>
        <thead>
            <tr>
                <th>Nom de l'utilisateur</th>
                <th>Email</th>
                <th>Description</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $requete = 'SELECT * FROM idee';
            $resultat = $connexion->query($requete);

            foreach ($resultat as $i):
            ?>
            <tr>
                <td><?= $i['nom'] ?></td>
                <td><?= $i['email']?></td>
                <td><?= $i['description']?></td>
                <td>
                    <form action="../php/deletemessage.php" method="post">
                        <input type="hidden" name="id" value="<?= $i['id_idee']?>">
                        <input type="image" src="../images/close.svg" style="height: 2em;">
                    </form>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</main>

<?php 

include '../inc/footer.php';
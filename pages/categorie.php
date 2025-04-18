<?php 
$title ="Nos catégories";
include '../inc/header.php'; ?>

    <main>
        <h2>Découvrez nos délicieuses recettes classées par catégories.</h2>
        <div id="categories">
            <button >
                <a href="#entree">Entrées</a>
            </button>
            <button >
                <a href="#plat">Plats Principaux</a>
            </button>
            <button >
                <a href="#dessert">Desserts</a>
            </button>
        <!-- Comment faire pour que ça déroule la page un peu plus smooth? -->
        </div>

        <section id='entree'>
            <h2>Voici nos entrées</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom de la recette</th>
                        <th>Description</th>
                        <th>Liste des ingrédients</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../inc/connexionlogin.php';
                    $req = 'SELECT recettes.*, categories.nom AS nom_categorie FROM recettes JOIN categories ON recettes. id_categorie = categories.id_categorie
                            WHERE categories.nom = "Entrée"';
                    $resultat = $connexion ->query($req);
                    foreach ($resultat AS $i):
                    ?>
                    <tr>
                        <td><?= $i['nom'] ?></td>
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
        </section>


        <section id='plat'>
            <h2>Voici nos plats principaux</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom de la recette</th>
                        <th>Description</th>
                        <th>Liste des ingrédients</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $req = 'SELECT recettes.*, categories.nom AS nom_categorie FROM recettes JOIN categories ON recettes. id_categorie = categories.id_categorie
                            WHERE categories.nom = "Plat principal"';
                    $resultat = $connexion ->query($req);
                    foreach ($resultat AS $i):
                    ?>
                    <tr>
                        <td><?= $i['nom'] ?></td>
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
        </section>


        <section id='dessert'>
            <h2>Voici nos desserts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom de la recette</th>
                        <th>Description</th>
                        <th>Liste des ingrédients</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $req = 'SELECT recettes.*, categories.nom AS nom_categorie FROM recettes JOIN categories ON recettes. id_categorie = categories.id_categorie
                            WHERE categories.nom = "Dessert"';
                    $resultat = $connexion ->query($req);
                    foreach ($resultat AS $i):
                    ?>
                    <tr>
                        <td><?= $i['nom'] ?></td>
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
        </section>

    </main>

<?php include '../inc/footer.php';

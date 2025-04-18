<?php 
$title ="Nouvelle recette";
include '../inc/header.php'; ?>

    <main>
        <h1>Ajouter une nouvelle recette</h1>

        <form action="ajouter.php" method="post">

            <input type="text" name="nom" placeholder="Nom de la recette">
            <br>
            <select name="categorie" required>
                <option value="">-- Sélectionner la catégorie--</option>
                <?php
                    include '../inc/connexionlogin.php';
                    $req = "SELECT * FROM categories";
                    $categories = $connexion->query($req);
                    foreach ($categories as $cat):
                ?>

                <option value="<?= $cat['id_categorie'] ?>"><?= htmlspecialchars($cat['nom']) ?></option>
                <?php endforeach; 
                ?>
            </select>

            <br><br><br>
            <textarea name="description" placeholder="Ajouter une description" required></textarea>
            <br><br><br>


            <!-- IA -->
            <label>Ingrédients :</label><br>
            <div id="ingredients-container">
                <div class="ingredient-select">
                    <select name="ingredients[]" required>
                        <option value="">-- Sélectionner un ingrédient --</option>
                        <?php
                            $ingredients = $connexion->query("SELECT * FROM ingredients")->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($ingredients as $ing):
                        ?>
                            <option value="<?= $ing['id_ingredient'] ?>"><?= htmlspecialchars($ing['nom']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <button type="button" onclick="ajouterIngredient()">+ Ajouter un ingrédient</button>
            <br><br>
            <!-- IA -->


            <input type="submit" value="Ajouter la recette">
        </form>
    </main>


    <!-- IA -->
    <script>
        function ajouterIngredient() {
            const container = document.getElementById('ingredients-container');
            const select = container.querySelector('.ingredient-select').cloneNode(true);
            container.appendChild(select);
        }
    </script>
    <!-- IA -->


<?php 
include '../inc/footer.php';

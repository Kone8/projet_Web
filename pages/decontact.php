<?php 
$title = "Contactez-nous !";
include '../inc/header.php'; 
?>



<main>
    <h1>Envoyez-nous vos idées !</h1>

    <form action="../php/contact.php" method="post">
        <input type="text" name="nom" placeholder="Votre Nom" required><br><br>

        <input type="email" name="email" placeholder="Votre adresse email" required><br><br>

        <textarea name="message" placeholder="Votre recette, n'hésitez pas à détailler"></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>
</main>

<?php include '../inc/footer.php'; ?>
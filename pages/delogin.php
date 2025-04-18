<?php 
$title = "Page de Login";
include '../inc/header.php';
?>



<main>
    <form action="../php/login.php" method="post">
        <input type="text" id="username" name="username" required placeholder="Username">
        <input type="password" id="password" name="password" required placeholder="Password">
        <input type="submit" value="Login">
    </form>
</main>

<?php include '../inc/footer.php';
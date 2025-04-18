<?php 

if(
    isset($_POST['username']) && !empty($_POST['username'])
    &&
    isset($_POST['password']) && !empty($_POST['password'])
){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Vérification que l'identifiants et le mot de passe soient associés dans la base de données
    
    $reqsql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    include '../inc/connexionlogin.php';
    $reponse = $connexion->query($reqsql);
    header('Location:../index.php');
    // SESSION
    if($reponse->rowCount() == 0)
        header('Location:../index.php');
    else{
        foreach($reponse AS $rep){

            if($rep['username'] == $username && $rep['password'] == $password){
                header('Location:../pages/admin.php');
            } else{
                header('Location:../index.php');
            }
    }
   }

}
else {
    header('Location:../index.php');
}
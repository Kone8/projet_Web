<?php 

define('SERVER','mysql:server=localhost;dbname=testprojet');
define('LOGIN','root');
define('PASS','');

try{
    $connexion = new PDO(SERVER, LOGIN, PASS);
} catch(Exception $e) {
    echo 'Erreur de connexion : '.$e->getMessage();
}
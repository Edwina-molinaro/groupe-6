<?php
session_start(); 
require '../config/config.php';
require '../models/connect.php';

//  récuperation de l'utilisateur et de son pass hashé
if (isset($_POST['email'])){
    $email=htmlspecialchars(trim($_POST['email']));
} else {
    $email = '';
}

if (isset($_POST['password'])){
    $password=htmlspecialchars(trim($_POST['password']));
} else {
    $password = '';
}

$db = connection();



$password_hash = hash('sha512', $password); //-> il s'agit de hasher le mdp qui est entré pour se connecter

$sqlSelectUser="SELECT email, password FROM administrateur WHERE email = :email";
$reqSelectUser=$db->prepare($sqlSelectUser);
$reqSelectUser->bindParam(':email', $email, PDO::PARAM_STR, 45);
$reqSelectUser->execute();
$resultat= $reqSelectUser->fetchObject();

//$isPasswordCorrect = password_verify($password, $resultat->password); -> ne marche pas

$isPasswordCorrect=hash_equals($password_hash, $resultat->password);


if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        header('location:tableau-de-bord.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}



  



<?php
require '../config/config.php';
require '../models/connect.php';

var_dump($_POST);

//  insertion de l'utilisateur et de son pass hashé
if (isset($_POST['email'])){
    $email=htmlspecialchars(trim($_POST['email']));
} else {
    $email = '';
}

if (isset($_POST['nom'])){
    $nom=htmlspecialchars(trim($_POST['nom']));
} else {
    $nom = '';
}

if (isset($_POST['prenom'])){
    $prenom=htmlspecialchars(trim($_POST['prenom']));
} else {
    $prenom = '';
}

if (isset($_POST['ville'])){
    $ville=htmlspecialchars(trim($_POST['ville']));
} else {
    $ville = '';
}

if (isset($_POST['password'])){
    $password=htmlspecialchars(trim($_POST['password']));
} else {
    $password = '';
}

//$pass_hash = password_hash($pass, PASSWORD_BCRYPT);
$password_hash = hash('sha512', $password);


$db = connection();

$sqlInsertClient= 'insert INTO client (email, nom, prenom, ville, password) VALUES (:email, :nom, :prenom, :ville, :password)';
$sqlInsertClient= $db->prepare($sqlInsertClient);
$sqlInsertClient->bindParam(':email', $email);
$sqlInsertClient->bindParam(':nom', $prenom);
$sqlInsertClient->bindParam(':prenom', $prenom);
$sqlInsertClient->bindParam(':ville', $ville);
$sqlInsertClient->bindParam(':password', $password_hash);
$sqlInsertClient->execute();

if ($sqlInsertClient->rowCount() == 1){
    header('Location: ../../index.php');
} else {
    echo 'requete KO';
}





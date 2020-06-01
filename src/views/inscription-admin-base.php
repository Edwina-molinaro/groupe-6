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

if (isset($_POST['password'])){
    $password=htmlspecialchars(trim($_POST['password']));
} else {
    $password = '';
}

//$pass_hash = password_hash($pass, PASSWORD_BCRYPT);
$password_hash = hash('sha512', $password);


$db = connection();

$sqlInsertAdmin= 'insert INTO administrateur (email, password) VALUES (:email, :password)';
$sqlInsertAdmin= $db->prepare($sqlInsertAdmin);
$sqlInsertAdmin->bindParam(':email', $email);
$sqlInsertAdmin->bindParam(':password', $password_hash);
$sqlInsertAdmin->execute();

if ($sqlInsertAdmin->rowCount() == 1){
    header('Location: tableau-de-bord.php');
} else {
    echo 'requete KO';
}





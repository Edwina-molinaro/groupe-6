<?php
require '../config/config.php';
require '../models/connect.php';

if (isset($_POST['nom'])){
    $nom=htmlspecialchars(trim($_POST['nom']));
} else {
    $nom = '';
}

if (isset($_POST['prix'])){
    $prix=htmlspecialchars(trim($_POST['prix']));
} else {
    $prix = '';
}

if (isset($_POST['quantite'])){
    $quantite=htmlspecialchars(trim($_POST['quantite']));
} else {
    $quantite = '';
}

if (isset($_POST['description'])){
    $description=htmlspecialchars(trim($_POST['description']));
} else {
    $description = '';
}

$db = connection();
var_dump($nom);

$sqlInsertProducts= 'insert INTO produits (nom, prix, quantite, description) VALUES (:nom, :prix, :quantite, :description)';
$reqInsertProducts= $db->prepare($sqlInsertProducts);
$reqInsertProducts->bindParam(':nom', $nom);
$reqInsertProducts->bindParam(':prix', $prix);
$reqInsertProducts->bindParam(':quantite', $quantite);
$reqInsertProducts->bindParam(':description', $description);
$reqInsertProducts->execute();

if ($reqInsertProducts->rowCount() == 1){
    header('Location: products.php');
} else {
    echo 'error';
}
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

if (isset($_POST['idproduits'])){
    $id=htmlspecialchars(trim($_POST['idproduits']));
} else {
    $id = '';
}

$db = connection();


var_dump($id);
var_dump($description);


$sqlInsertProducts= "UPDATE produits SET nom = :nom, prix = :prix, quantite = :quantite, description = :description WHERE idproduits = :id";
$reqInsertProducts= $db->prepare($sqlInsertProducts);
$reqInsertProducts->bindParam(':nom', $nom);
$reqInsertProducts->bindParam(':prix', $prix);
$reqInsertProducts->bindParam(':quantite', $quantite);
$reqInsertProducts->bindParam(':description', $description);
$reqInsertProducts->bindValue(':id', $id, PDO::PARAM_STR);
$reqInsertProducts->execute();


if ($reqInsertProducts->rowCount() == 1){
    header('Location: products.php');
} else {
    echo 'error';
}
<?php
require '../config/config.php';
require '../models/connect.php';

$db=connection();


if (isset($_POST['idproduits'])){
    $id=htmlspecialchars(trim($_POST['idproduits']));
} else {
    $id = '';
}

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
} else {
    $id = '';
}


var_dump($id);

$db = connection();

$sqlDeleteProducts= "DELETE FROM produits WHERE idproduits = :id";
$reqDeleteProducts= $db->prepare($sqlDeleteProducts);
$reqDeleteProducts->bindParam(':id', $id);
$reqDeleteProducts->execute();

if ($reqDeleteProducts->rowCount() == 1){
    header('Location: products.php');
} else {
    echo 'error';
}
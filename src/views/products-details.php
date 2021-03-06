<?php
require '../config/config.php';
require '../models/connect.php';

$db=connection();

if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
} else {
    $id = '';
}

$sqlSelectProducts="SELECT * FROM produits WHERE idproduits = :ids";
$reqSelectProducts=$db->prepare($sqlSelectProducts);
$reqSelectProducts->bindParam(':ids', $id);
$reqSelectProducts->execute();

?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body>

  
  <header class="container-fluid d-flex justify-content-center align-items-center background-products">

  </header>

  <section class="d-flex justify-content-center align-items-center flex-column card-products">
    <?php 
        $produits = $reqSelectProducts->fetchObject();           
    ?>
    <img src="..." class="img-fluid" alt="Responsive image">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <?php echo $produits->nom ?></br>
        <?php echo $produits->prix ?></br>
        <?php echo $produits->quantite ?></br>
        <?php echo $produits->description ?>
    <div class="d-flex flex-wrap btn-gap">
      <a href="panier.php" class="btn btn-info">Acheter</a>
      <a href="products.php" class="btn btn-success">retour</a>
    </div>
  </section>
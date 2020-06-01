<?php
require '../config/config.php';
require '../models/connect.php';

$db=connection();

$sqlInsertProducts="SELECT * FROM produits";
$reqInsertProducts=$db->prepare($sqlInsertProducts);
$reqInsertProducts->execute();

?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

    <header class="container-fluid d-flex justify-content-center align-items-center background-header">
      
    </header>

    <h1 class="fifties">Site de vente</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="../../index.php">Blog <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="products.php">Products</a>
          <a class="nav-item nav-link btn-donation text-light" href="#">Make a donation</a>
        </div>
      </div>
      </nav>

      <section class="card-section d-flex justify-content-center align-items-center flex-wrap">
      <?php 
            while($produits = $reqInsertProducts->fetchObject()){             
         ?>
      <div class="card" style="width: 18rem;">
        <img src="../../public/img/<?php echo $produits->photo; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $produits->nom; ?></h5>
          <a href="products-details.php" class="btn btn-warning">See more</a>
          <a href="#" class="btn btn-success">Add to cart</a>
        </div>
      </div>
      <a href="modify-products.php?id=<?php echo $produits->idproduits; ?>"><button class="btn btn-warning">Modify</button></a>
      <a href="delete-products.php"><button class="btn btn-danger">Delete</button></a>
      <?php 
                }
                ?>
      </section>

      <!--<div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">produit 2</h5>
          <a href="#" class="btn btn-warning">See more</a>
          <a href="#" class="btn btn-success">Add to cart</a>
        </div>
      </div>
    </section>-->

    </body>
</html>
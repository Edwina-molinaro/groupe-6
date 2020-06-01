<?php
require 'src/config/config.php';
require 'src/models/connect.php';

//$db=connection();

//var_dump($db);

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

    <header class="container-fluid d-flex justify-content-center align-items-center background-header">
          
    </header>

    <h1 class="fifties">Site de vente</h1>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <a class="navbar-brand" href="index.php">Home</a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Blog <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="src/views/products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-donation text-light" href="#">Make a donation</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><a href="src/views/connexion-client.php">Sign in</a></button>
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit"><a href="src/views/inscription-option.php">Sign up</a></button>
        </form>
       </div>
       </nav>

    <section class="card-section d-flex justify-content-center align-items-center d-flex flex-wrap">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Article 1</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="src/views/articles.php" class="btn btn-success">See more</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Article 2</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="src/views/articles.php" class="btn btn-success">See more</a>
        </div>
      </div>
    </section>

</body>
</html>
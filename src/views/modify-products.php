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
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>

    <h1>Modify product</h1>

    <section class="card-section d-flex justify-content-center align-items-center flex-wrap">
    <?php 
            $produits = $reqSelectProducts->fetchObject();           
         ?>
        <form method="post" action="modify-products_base.php">
            <div class="card" style="width: 18rem;">
                <img src="../../public/img/" class="card-img-top" alt="...">
                <button class="btn btn-success">Upload a picture</button>
                <div class="card-body">
                <h5 class="card-title"></h5>
                <input type="text" name="nom" placeholder="name product" value="<?php echo $produits->nom ?>"/></br>
                <input type="text" name="prix" placeholder="set a price" value="<?php echo $produits->prix ?>"/></br>
                <input type="text" name="quantite" placeholder="quantite" value="<?php echo $produits->quantite ?>"/></br>
                <textarea type="text" name="description" placeholder="description"><?php echo $produits->description ?></textarea>
                <input class="invisible" type="text" name="idproduits" placeholder="quantite" value="<?php echo $produits->idproduits ?>"/></br>
                <button type="submit">sumbit</button>
                </div>
            </div>
        </form>
    </section>

</body>
</html>
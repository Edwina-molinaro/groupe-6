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


  <h1 class="">Ajouter un produit</h1>

    <div class="text-center header-add-products">
        <button class="btn btn-danger">Retour</button>
    </div>

    <form action="add-products-base.php" method="post" class="text-center d-flex mx-auto flex-column formulaire-add-products">
        <input type="text" name="nom" placeholder="nom du produit">
        <input type="text" name="prix" placeholder="prix">
        <input type="text" name="quantite" placeholder="quantite">
        <textarea type="text" name="description" placeholder="description"></textarea>
        <button type="submit">sumbit</button>
    </form>

</body>
</html>
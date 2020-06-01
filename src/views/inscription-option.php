<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/main.css">
</head>
<body>

    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="inscription-admin.php">Admin</a></button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="inscription-option.php">Client</a></button>
    </div>

    <form class="w-50 mx-auto" action="inscription-client.php" method="post">
    <div class="form-group">
        <h1>client inscription</h1>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <label for="exampleInputEmail1">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputText" aria-describedby="nameHelp" placeholder="Enter Name">
            <label for="exampleInputEmail1">prenom</label>
            <input type="text" name="prenom" class="form-control" id="exampleInputPrenom" aria-describedby="prenomHelp" placeholder="Enter prenom">
            <label for="exampleInputEmail1">ville</label>
            <input type="text" name="ville" class="form-control" id="exampleInputVille" aria-describedby="villeHelp" placeholder="Enter ville">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </body>
    </html>
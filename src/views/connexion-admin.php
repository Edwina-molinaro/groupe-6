
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body>

    <div class="d-flex justify-content-center">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="connexion-admin.php">Admin</a></button>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="connexion-client.php">Client</a></button>
    </div>


    <form class="w-50 mx-auto" action="connexion-admin_base.php" method="post">
    <div class="form-group">
    <h1>Connexion</h1>
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
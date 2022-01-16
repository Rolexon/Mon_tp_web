<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>COMPUTER SHOP</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .fa{
        font-size: 16px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="controller/connexionController.php?action=verif">
    <i class="fa fa-user"></i>
    <h1 class="h3 mb-3 fw-normal">Entrer les Informations Actuelles</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="login"><br>
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password">
      <label for="floatingPassword">Mot de passe</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Verifier</button>
    <a href="index.php"><br><button class="w-100 btn btn-lg btn-success"> <&nbsp; Retour</button></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>
  </body>
</html>

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
    <link href="css/all.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fontawesome.min.css" rel="stylesheet">


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
  <form  method="post" action="controller/connexionController.php?action=update">
    <i class="fa fa-user"></i>
    <h1 class="h3 mb-3 fw-normal">Modification des informations</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="login"><br>
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Enregistrer</button><br><br>
    
  </form>
  <a href="index.php"><button class="btn btn-danger">Annuler</button></a><br><br><br>
  <p class="mt-5 mb-3 text-muted">&copy; 2021 Company, Inc. All rights reserved.</p>
</main>
  
  </body>
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>

    <?php 

    if(isset($_GET['m'])){
      $etat = $_GET['m'];

      if ($etat == 1) {
    ?>
      <script type="text/javascript">
        Swal.fire({
        type: 'warning',
        title: 'Terminé',
        text: 'Entrer les nouvelles informations!'
      })
      </script>
  <?php
      }
    }
    ?>
</html>

<?php
session_start();
include_once 'config.php';
include 'lang/FR_FR.php';
include 'controllers/indexCtrl.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <title><?= isset($title) ? $title : '' ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(!isset($_SESSION['profile'])){ //Si l'utilisateur n'est pas connecté ?>
            <a class="dropdown-item" href="index.php?view=login">Connexion</a>
            <a class="dropdown-item" href="index.php?view=register">Inscription</a> 
          <?php }else{ //Si la personne est connectée?>
            <a class="dropdown-item" href="index.php?action=disconnect">Déconnexion</a> 
          <?php } ?>         
        </div>
      </li>      
    </ul> 
    <?= isset($_SESSION['profile']['username']) ? 'Bienvenue ' . $_SESSION['profile']['username']: ''?>   
  </div>
</nav>
<?php
    if(isset($view)){ //Affichage de la vue sélectionnée
        include 'views/' . $view . '.php';
    }else{ ?>
  <h1>Site en construction</h1>
   <?php }
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
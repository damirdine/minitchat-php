<?php
    session_start();
    include_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniTchat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>
<body class="d-flex flex-column min-vh-100">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">MiniTchat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex">
        <?php if(!isset($_SESSION['logged_user'])):?>
          <a href='./login.php' class="btn btn-primary me-2" type="button">Connexion
          </a>
          <a href='./signup.php' class="btn btn-primary bg-light text-primary me-2" type="button">Inscription
          </a>
        <?php else:?>
          <a href='./logout.php' class="btn btn-danger me-2" type="button">Déconnexion</a>
        <?php endif;?>
      </div>
    </div>
  </nav>
  <main class="container">
<?php
session_start();

if (empty($_SESSION['id'])) {
  $fname = "";
} else {
  $fname = $_SESSION['fname'];
}
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oláh Pékség</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<style>
body {background-color: #F9C784;}
   </style>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="padding: 1px 1px">
  <a class="navbar-brand" href="./index.php"> <img src="./kepek/logo.png" class="img-fluid"></a>
  <a class="navbar-brand" href="./index.php">Oláh Pékség</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href=".//index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="view/elerhetoseg.php">Elérhetőségeink<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="view/nyitvatartas.php">Nyitvatartás<span class="sr-only">(current)</span></a>
      </li>
      <?php if(empty($fname)) { ?>
      <li class="nav-item">
        <a class="nav-link" href="view/register.php">Regisztáció</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view/login.php">Belépés</a>
      </li>
      <?php } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="./view/megrendeles.php">Megrendelés</a>
      </li>
        <li class="nav-item"> 
          <a class="nav-link"  href="./controller/logout.php">Kijelentkezés</a></li>
        <?php } ?>
    </form>
  </div>
</nav>
  <div>
  <br>
  <h1 style="color: #784A0D; text-align:center;">Aktuális friss termékeink:</h1>
  <br>
  <table style="border: 2px solid white; margin: auto; color: white;">
  <tr>
    <th colspan="2"><a href="./view/pekaru/csokiscroissant.php"><img src="kepek/csokisc.jpg" title="Csokis Croissant"></a></th>
    <h6 style="color: #784A0D; text-align:center;">Csokis Croissant</h6>
    <h6 style="color: #784A0D; text-align:center;">450ft/db</h6>
  </tr>
</table>
<br>
<br>
  <table style="border: 2px solid white; margin: auto; color: white;">
  <tr>
    <th colspan="2"><a href="./view/pekaru/kakaoscsiga.php"><img src="./kepek/kakaos.jpg" title="Kakaós csiga"></a></th>
    <h6 style="color: #784A0D; text-align:center;">Kakaós Csiga</h6>
    <h6 style="color: #784A0D; text-align:center;">550ft/db</h6>
  </tr>
</table>
<br>
<br>
  <table style="border: 2px solid white; margin: auto; color: white;">
  <tr>
    <th colspan="2"><a href="./view/pekaru/kenyer.php"><img src="./kepek/kenyer.jpg" title="Kenyér"></a></th>
    <h6 style="color: #784A0D; text-align:center;">Kenyér</h6>
    <h6 style="color: #784A0D; text-align:center;">400ft/db</h6>
  </tr>
</table>
<br>
<br>
<table style="border: 2px solid white; margin: auto; color: white;">
  <tr>
    <th colspan="2"><a href="./view/pekaru/pizzascsiga.php"><img src="./kepek/pizzascsiga.jpg" title="Pizzás csiga"></a></th>
    <h6 style="color: #784A0D; text-align:center;">Pizzás csiga</h6>
    <h6 style="color: #784A0D; text-align:center;">450ft/db</h6>
  </tr>
</table>
<br>
<br>
  </div>
</body>
</html>
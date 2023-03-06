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
    <title>Elérhetőségeink</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<style>
body {background-color: #F9C784;}
   </style>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="padding: 1px 1px">
  <a class="navbar-brand" href="../index.php"> <img src="../kepek/logo.png" class="img-fluid"></a>
  <a class="navbar-brand" href="../index.php">Oláh Pékség</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="elerhetoseg.php">Elérhetőségeink<span class="sr-only">(current)</span></a>
        <?php if(empty($fname)) { ?>
      <li class="nav-item">
        <a class="nav-link" href="./login-register/register.php">Regisztáció</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login-register/login.php">Belépés</a>
      </li>
      <?php } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="../view/megrendeles.php">Megrendelés</a>
      </li>
        <li class="nav-item"> 
          <a class="nav-link"  href="../controller/logout.php">Kijelentkezés</a></li>
        <?php } ?>
    </form>
  </div>
</nav>

<br>
  <h1 style="color: #784A0D; text-align:center;">Elérhetőségeink:</h1>
  <br>
  <br>
  <br>
  <h3 style="color: #784A0D; text-align:center;">Telefonszámunk:</h3>
  <h3 style="color: #50514F; text-align:center;">06 30 337 4091</h3>
  <br>
  <br>
  <br>
  <h3 style="color: #784A0D; text-align:center;">Üzlet helye:</h3>
  <h3 style="color: #50514F; text-align:center;">2800 Tatabánya Mátyás Király utca 25.</h3>
  <br>
  <br>
  <br>
  <h3 style="color: #784A0D; text-align:center;">E-mail címünk:</h3>
  <h3 style="color: #50514F; text-align:center;">olahpekseg@gmail.com</h3>
  <br>
  <br>
  <br>
  <h3 style="color: #784A0D; text-align:center;">Reklamációs vonal:</h3>
  <h3 style="color: #50514F; text-align:center;">Örömmel tájékoztatjuk Kedves Vásárlóinkat, hogy észrevételeikkel, ötleteikkel, esetenként panaszaikkal egy új kommunikációs csatornán, a panaszolahpekseg@gmail.com email címen érhetnek el bennünket</h3>
  <br>
  <br>
</body>
</html>
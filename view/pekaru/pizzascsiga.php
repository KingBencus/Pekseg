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
    <title>pizzascsiga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<style>
body {background-color: #F9C784;}
   </style>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="padding: 1px 1px">
  <a class="navbar-brand" href="../../index.php"> <img src="../../kepek/logo.png" class="img-fluid"></a>
  <a class="navbar-brand" href="../../index.php">Oláh Pékség</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../index.php">Főoldal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../elerhetoseg.php">Elérhetőségeink<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../../view/nyitvatartas.php">Nyitvatartás<span class="sr-only">(current)</span></a>
      </li>
      <?php if(empty($fname)) { ?>
      <li class="nav-item">
        <a class="nav-link" href="../login-register/register.php">Regisztáció</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login-register/login.php">Belépés</a>
      </li>
      <?php } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="../megrendeles.php">Megrendelés</a>
      </li>
        <li class="nav-item"> 
          <a class="nav-link"  href="../../controller/logout.php">Kijelentkezés</a></li>
        <?php } ?>
    </form>
  </div>
</nav>
<table style="margin: auto; color: white;">
  <tr>
    <th colspan="2"><img src="../../kepek/pizzascsiga.jpg" title="Pizzás csiga"></a></th>
  </tr>
</table>
    <h4 style="color: #784A0D; text-align:center;">Pizzás csiga</h4>
    <h4 style="color: #784A0D; text-align:center;">100g</h4>
    <hr>
    <h4 style="color: #784A0D; text-align:center;">Összetevők:</h4>
    <table style="color: #784A0D; margin: 0 auto">
      <tr>
        <th>Búzafinomliszt (BL55), </th>
        <th>pizza töltelék (19%), </th>
        <th>ivóvíz, </th>
        <th>leveles margarin, </th>
        <th>sajt, </th>
        <th>élesztő, </th>
        <th>étkezési só, </th>
      </tr>
    </table>
    <hr>
    <div style="display: flex;">
  <div style="width: 50%; text-align:center; color: #784A0D;"><h5>Tápérték infromáció /100g</h5>
  <hr>
    <h5 style="color: #784A0D; text-align:center;">Energia(kJ) 1368</h5>
    <h5 style="color: #784A0D; text-align:center;">Energia(kcal) 327</h5>
    <h5 style="color: #784A0D; text-align:center;">Zsír(g) 17</h5>
    <h5 style="color: #784A0D; text-align:center;">-ebből terített zsírsav(g) 8,5</h5>
    <h5 style="color: #784A0D; text-align:center;">Szénhidrát(g) 35</h5>
    <h5 style="color: #784A0D; text-align:center;">-ebből cukor(g) 9,7</h5>
    <h5 style="color: #784A0D; text-align:center;">Rost(g) 1,1</h5>
    <h5 style="color: #784A0D; text-align:center;">Fehérje(g) 8,1</h5>
    <h5 style="color: #784A0D; text-align:center;">Só(g) 1,6</h5>
    <br>
  </div>
  <div style="width: 50%; text-align:center; color: #784A0D;"><h5>Allergének</h5>
  <hr>
    <h5 style="color: #784A0D; text-align:center;">&bull; Glutén</h5>
    <h5 style="color: #784A0D; text-align:center;">&bull; Tej </h5>
   <br>
</div>
</body>
</html>
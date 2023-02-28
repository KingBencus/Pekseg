<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">  
    
        <div class="shadow w-450 p-3 text-center">
            <h3>Üdvözöljük Pékségünkben,<br> <?=$_SESSION['fname']?></h3>
            <a href= "../index.php" class="btn btn-warning">Főoldal</a>
            <a href= "../controller/logout.php" class="btn btn-warning">Kilépés</a>
        </div>
    </div>
</body>
</html>

<?php }else {
    header("Location: ../controller/login.php");
    exit;
} ?>
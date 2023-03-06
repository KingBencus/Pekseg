<?php
session_start();
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
<style>
body {background-color: #F9C784;}
   </style>
    <div class="d-flex justify-content-center align-items-center vh-100">  
    
    <form class="shadow w-450 p-3"
              action="../../controller/login.php"
              method="post"
              style="background-color: white; border-radius: 10px;">

                <h4 class="display-4 text-center fs-1">Bejelentkezes</h4><br>
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                   <?php echo $_GET['error']; ?> 
                </div>
                <?php } ?>

            <div class="mb-3">
                <label class="form-label">Felhasználó név</label>
                <input type="text" 
                       class="form-control"
                       name="uname"
                       value="<?php echo (isset($_GET['uname']))?$_GET['uname']:
                        "" ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Jelszó</label>
                <input type="password"
                       class="form-control"
                       name="pass">
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #F9C784; color: black;">Belépés</button>
            <a href="register.php" class="link-secondary" style="color: black;">Regisztráció</a>
        </form>
    </div>
</body>
</html>
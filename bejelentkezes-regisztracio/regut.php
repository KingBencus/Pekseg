<?php

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){
   
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if (empty($fname)) {
        $em = "Teljes név kötelező";
        header("Location: ../register.php?error=$em");
        exit;
    }else if(empty($uname)) {
        $em = "Felhasználó név kötelező";
        header("Location: ../register.php?error=$em");
        exit;
    }else if(empty($pass)) {
        $em = "Jelszó kötelező";
        header("Location: ../register.php?error=$em");
        exit;
    }else {
        echo "Nice";
    }

}else {
    header("Location: ../register.php?error=$em");
    exit;
}
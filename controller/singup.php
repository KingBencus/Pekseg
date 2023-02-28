<?php

if(isset($_POST['fname']) &&
   isset($_POST['uname']) && 
   isset($_POST['pass'])) {

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;


    if (empty($fname)) {
        $em = "Teljes név kötelező";
        header("Location: ../view/register.php?error=$em&$data");
        exit;
    }else if(empty($uname)){
        $em = "Felhasználó név kötelező";
        header("Location: ../view/register.php?error=$em&$data");
        exit;
    }else if(empty($pass)){
        $em = "Jelszó kötelező";
        header("Location: ../view/register.php?error=$em&$data");
        exit;
    }else {

        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(fname, username, password)
                VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);

        header("Location: ../view/register.php?success=Sikeres regisztáció");
        exit;
    }

}else {
    header("Location: ../view/register.php?error=error");
    exit;
}
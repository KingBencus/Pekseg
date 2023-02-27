<?php 

$sName = "localhost";
$uName = "c31olahbencedbu";
$pass = "kysCBT_jM4";
$db_name = "c31olahbencedb";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
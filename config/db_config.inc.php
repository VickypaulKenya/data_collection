<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

try {
    $conn=new PDO("mysql:host=$host; dbname=$db; charset=utf8",$user,$pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($conn){
        header("Location: ../register.php");
    }else{
        echo "Coonection not successfull";
        exit();
    }
} catch (PDOException $e) {
    die("Connection failed: ".$e->getMessage());
}
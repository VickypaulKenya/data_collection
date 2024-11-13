<?php

include 'db_config.inc.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $marital_status=$_POST["maritalStatus"];
    $education_level=$_POST["educationLevel"];

  if(!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($age)&&!empty($gender)&&!empty($marital_status)&&!empty($education_level)){
    try{
       $sql="INSERT INTO users(firstname,lastname,email,age,gender,marital_status,education_level) VALUES(?,?,?,?,?,?,?)";
       $stmt=$conn->prepare($sql);
       $stmt->execute([$firstname,$lastname,$email,$age,$gender,$marital_status,$education_level]);

       echo "Data Inserted successfully";
       exit();

  }catch(PDOException $e){
    echo "Error: ".$e->getMessage();
  }

  }
}else{
    echo "All fields are required";
    exit();
}
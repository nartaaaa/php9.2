<?php

try{
    $conn = new PDO("mysql:host=localhost; dbname=testdb","root" ,"");
    $username ="Narta";
    $password=password_hash("rona123", PASSWORD_DEFAULT);

    $sql="INSERT INTO users(username,password) VALUES('$username','$password')";

    $conn->exec($sql);

    echo"New data is inserted";
}catch(Exception $e){

    echo $e->getMessage();
}
?>
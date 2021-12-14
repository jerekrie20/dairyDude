<?php

//This file creates a 'connection object' to our database

$database = "jerekrie20_dairy_dude";                 //name of database

$serverName = "localhost";      //most default of localhost

$username = "jerekrie20_dairy_dude";                 //username for the database NOT your account

$password = "Fleski92!!";                 //password for the database NOT your account

try{
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    //set the PDO error mode 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully";

}
catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();

}








?>
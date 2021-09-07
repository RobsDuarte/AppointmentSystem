<?php

require_once "Model\Config.php";

try{
    $connection = new PDO("mysql:host=".DB_SERVER.";dbname:".DB_USERNAME."",DB_USERNAME,DB_PASSWORD);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
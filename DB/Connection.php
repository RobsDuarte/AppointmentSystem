<?php

try{
    $connection = new PDO("mysql:host=".getenv('DB_SERVER').";dbname:".getenv('DB_NAME')."",getenv('DB_USERNAME'),getenv('DB_PASSWORD'));
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
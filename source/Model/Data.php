<?php

namespace Source\Model;

use \PDOException;

class Data 
{
    public static function getLoginFromBD($login,$password)
    {
        include __DIR__.'/../../DB/Connection.php';        

       try{
            $query = $connection->prepare('SELECT * FROM contas.users WHERE username = :name and password = :password');
            $query->bindParam(':name',$login);   
            $query->bindParam(':password',$password);            
            $query->execute();
            $myRows = $query->fetchAll();              
            return count($myRows);
        }
        catch(PDOException $e)
        {
            echo "Error:".$e->getMessage();
        }
    }
}
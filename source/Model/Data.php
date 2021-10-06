<?php

namespace Source\Model;

use \PDOException;

class Data 
{
    public static function getLoginFromBD($login)
    {
        include __DIR__.'/../../DB/Connection.php'; 
        $found_something = true; 
        $found_nothing = false;
        

       try{
            $query = $connection->prepare('SELECT password FROM contas.users WHERE username = :name');
            $query->bindParam(':name',$login);               
            $query->execute();
            $myRows = $query->fetchAll();
            $IsthereAnythingInDB = count($myRows) > 0;
            
            return $IsthereAnythingInDB ? $found_something : $found_nothing;
        }
        catch(PDOException $e)
        {
            echo "Error:".$e->getMessage();
        }
    }
}
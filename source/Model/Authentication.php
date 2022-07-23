<?php

namespace Source\Model;

use Source\Model\Data;

class Authentication
{    
    public static function getUser($login,$password)
    {              
           
        return Data::getLoginFromBD( $login, $password);   
    }

    public static function ErrorMsg()
    {
        $msg = '<script type="text/javascript">
                document.getElementById("ErrorMsg").innerHTML = "Login ou Senha incorretos";
                document.getElementById("ErrorMsg").style.display = "block";
                setTimeout(function(){document.getElementById("ErrorMsg").style.display = "none";},2000);            
                </script>';
        return $msg;
    }
}


<?php

namespace Source\Controller;

use Source\Utils\View;
use Source\Model\Data;

session_start();
class Login
{
    public static function getLogin($msg = [])
    {    
        return View::render('login',$msg);        
    }

    public static function requestLogin($request)
    {      
        $PostVars = $request['request']->getPostVars(); 
        $_SESSION['name'] = $PostVars['nome'];              
        return Data::getLoginFromBD($PostVars['nome']) ? View::render('home',['USER'=>$_SESSION['name']]) : self::getLogin(['ERROR' => self::ErrorMsg()]);
    }

    private static function ErrorMsg()
    {
        $msg = '<script type="text/javascript">
                document.getElementById("ErrorMsg").innerHTML = "Login ou Senha incorretos";
                document.getElementById("ErrorMsg").style.display = "block";
                </script>';
        return $msg;
    }
}


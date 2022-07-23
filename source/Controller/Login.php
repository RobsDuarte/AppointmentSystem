<?php

namespace Source\Controller;

use Source\Model\Authentication;
use Source\Utils\View;

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
           
        if(Authentication::getUser($PostVars['nome'],$PostVars['senha'])) return  View::render('home',['USER'=>$_SESSION['name']]);          
        else return View::render('login',['ERROR' => Authentication::ErrorMsg()]);                
    }
}

session_destroy();
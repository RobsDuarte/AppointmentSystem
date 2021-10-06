<?php

namespace Source\Controller;

use Source\Utils\View;

class Home
{
    public static function getHome()
    {      
        return View::render('home');                              
    }    
}
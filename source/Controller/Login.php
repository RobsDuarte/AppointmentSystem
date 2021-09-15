<?php

namespace Source\Controller;

use Source\Utils\View;

class Login
{
    public static function getLogin()
    {
        return View::render('login');        
    }
}
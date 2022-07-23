<?php

use Source\Controller\Login;
use Source\Http\Response;


$objectRouter->get('/',[
    function()
    {
        return new Response(200,Login::getLogin());
    }
]);

$objectRouter->post('/',[
    function($request)
    {        
        return new Response(200,Login::requestLogin($request));     
    }
]);


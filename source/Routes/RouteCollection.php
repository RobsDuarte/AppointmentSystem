<?php

use Source\Controller\Login;
use Source\Controller\Home;
use Source\Http\Response;

$objectRouter->get('/',[
    function()
    {
        return new Response(200,Login::getLogin());
    }
]);

$objectRouter->post('/home',[
    function()
    {
        return new Response(200,Home::getHome());
    }
]);
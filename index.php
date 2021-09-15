<?php

require __DIR__."/vendor/autoload.php";

use Source\Http\Router;
use Source\Utils\View;

define('URL','http://localhost/projetos/AppointmentSystem');

View::init([
    'URL' => URL
]);

$objectRouter = new Router(URL);

include __DIR__.'/Source/Routes/RouteCollection.php';

echo $objectRouter->run()->sendResponse();
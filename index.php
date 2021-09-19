<?php

require __DIR__."/Bootstrap/app.php";

use Source\Http\Router;
use Source\Utils\View;
use Source\Common\Environment;

define('URL',getenv('URL'));

View::init([
    'URL' => URL
]);

$objectRouter = new Router(URL);

include __DIR__.'/Source/Routes/RouteCollection.php';

echo $objectRouter->run()->sendResponse();
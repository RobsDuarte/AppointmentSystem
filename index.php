<?php

require __DIR__."/Bootstrap/app.php";

use Source\Http\Router;
use Source\Utils\View;
use Source\Common\Environment;

Environment::load(__DIR__);

View::init([
    'URL' => getenv('URL')
]);

$objectRouter = new Router(getenv('URL'));

include __DIR__.'/Source/Routes/RouteCollection.php';

echo $objectRouter->run()->sendResponse();
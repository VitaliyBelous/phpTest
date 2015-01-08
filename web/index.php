<?php

include('..' . DIRECTORY_SEPARATOR . 'app/bootstrap.php');

$router = new Vitaly\Http\Router;
$router->dispatchRequest();
<?php

/*
$router->get('/', function () {
    echo 'Hello World!';
});
*/

$router->setNamespace('\App\Http\Controllers');

$router->get('/', 'HomeController@index'); 

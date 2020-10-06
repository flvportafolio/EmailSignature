<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/* $router->get('/', function () use ($router) {
    return $router->app->version();
}); */

$router->get('/',function(){
    return view('home');
});
$router->get('/acerca',function(){
    return view('acerca');
});
$router->get('/terminos-del-servicio',function(){
    return view('terminos');
});
$router->get('/politica-de-privacidad',function(){
    return view('privacidad');
});

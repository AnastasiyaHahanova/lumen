<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    if (isset($_GET['public']))
    {
        header('Access-Control-Allow-Origin: '.$_SERVER['APP_URL']);
        header('Content-type: text/plain; charset=utf-8');
        header('Access-Control-Allow-Methods: GET,POST,DELETE');
    }
    if (isset($_GET['print']))
    {

    header('Content-type: text/plain; charset=utf-8');
    return file_get_contents(__FILE__);
}
else
    {
        date_default_timezone_set('Europe/Moscow');
        return date('d/m/Y H:i');
    }

});
$router->get('/author',function (){
    header('Access-Control-Allow-Origin: '.$_SERVER['APP_URL']);
    header('Content-type: text/plain; charset=utf-8');
    header('Access-Control-Allow-Methods: GET');
    return 'Anastasiya Hahanova ';
});


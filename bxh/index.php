<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
@session_start();
require __DIR__.'/define.php';
require __DIR__.'/bootstrap/autoload.php';
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/
$app = require_once __DIR__.'/bootstrap/app.php';
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
function getIP($ip=null){
    if(!empty($ip)) return array($ip);
    if (isset($_SERVER["HTTP_CLIENT_IP"])) {
        $client_ip = $_SERVER["HTTP_CLIENT_IP"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $client_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_X_FORWARDED"])) {
        $client_ip = $_SERVER["HTTP_X_FORWARDED"];
    } else if (isset($_SERVER["HTTP_X_CLUSTER_CLIENT_IP"])) {
        $client_ip = $_SERVER["HTTP_X_CLUSTER_CLIENT_IP"];
    } else if (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
        $client_ip = $_SERVER["HTTP_FORWARDED_FOR"];
    } else if (isset($_SERVER["HTTP_FORWARDED"])) {
        $client_ip = $_SERVER["HTTP_FORWARDED"];
    } else {
        $client_ip = $_SERVER["REMOTE_ADDR"];
    }
    $client_ipz = explode(',', $client_ip);
    $client_ip = array();
    for ($i = 0, $size_i = count($client_ipz); $i < $size_i; $i++) {
        $client_ipz[$i] = trim($client_ipz[$i]);
        if ($client_ipz[$i] != '') {
            $client_ip[] = $client_ipz[$i];
        }
    }
    return $client_ip;
}
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');
$request = Illuminate\Http\Request::capture();
$response = $kernel->handle( $request);
$response->send();
$kernel->terminate($request, $response);

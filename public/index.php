<?php 

require_once __DIR__."/../vendor/autoload.php";

$routes = require_once __DIR__."/../routes/web.php";


// request uri 
$request = $_SERVER['REQUEST_URI'];
$request = explode('?',$request);

if(isset($routes[$request[0]])){
    $controller = $routes[$request[0]][0] ?? null;
    $action = $routes[$request[0]][1] ?? null;
   
    if($controller && $action){
        $controller = new $controller();
        $controller->$action();
    }
}else{
    throw new Exception('404 Not Found');
}


?>
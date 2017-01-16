<?php
include (__DIR__."/../bootstrap/start.php");
include (__DIR__."/../routes.php");
$match= $router->match();
list($controller,$method)= explode("@", $match['target']);
if (is_callable(array($controller,$method))){
    $object=new $controller();
    call_user_func_array(array($object,$method),array($match['params']));
}else{
    echo"Cannot find $controller -> method";
    exit();
}
/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 14/01/2017
 * Time: 18:55
 */
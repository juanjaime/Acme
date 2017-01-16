<?php
session_start();
require(__DIR__."/../vendor/autoload.php");
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new AltoRouter();
/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 15/01/2017
 * Time: 17:20
 */
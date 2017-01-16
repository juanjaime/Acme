<?php
$router->map('GET','/', 'PageController@getShowHomePage','home');
$router->map('GET','/login', 'PageController@getShowLoginPage','login');
$router->map('GET','/register', 'PageController@getShowRegistrationPage','register');
$router->map('POST','/register', 'PageController@postRegistrationPage','doregister');
/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 15/01/2017
 * Time: 17:21
 */
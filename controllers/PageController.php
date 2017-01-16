<?php

/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 15/01/2017
 * Time: 17:32
 */
class PageController
{
    public function getShowHomePage(){
        include(__DIR__."/../views/home.php");
}
    public function getShowLoginPage(){
        include(__DIR__ . "/../views/login.php");
    }
    public function getShowRegistrationPage(){
        include(__DIR__ . "/../views/register.php");
    }
    public function postRegistrationPage(){
        echo "posted";
    }
}
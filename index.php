<?php
/*
Ean Daus
1/9/19
index.php
Fat free/MVC practice project
*/
//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload
require_once 'vendor/autoload.php';

//create an instance of the base class
$f3 = Base::instance();

//fet free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function(){
    //echo '<h1>Howdy!</h1>';
    $view = new View;
    echo $view->render('views/homepage.html');
});

//run fat free
$f3->run();
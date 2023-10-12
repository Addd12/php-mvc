<?php

/* 
* this file is the start of the app
* it goes to init.php ehich is the file that calls the other main/general files (like Controller, Database config etc)
* 
*/

session_start(); //needed for authentication part

require "../app/core/init.php"; //this loads everything in our core folder

/*
* App is loaded from init.php. in order to use we should create an 
* instance here then call the needed function
*/
$app = new App; //creating an instance of the class App
//var_dump($app); //the result is an object(App) cos we are creatins an instance of a class
$app->loadController(); //run a specific function of the instance of that class

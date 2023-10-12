<?php

class App{
    
    private $controller = 'Home';
    private $method = 'index'; //functions within a class are called methods


    private function splitURL(){ //since it is private we cannot call this function outside of its class (App), for ex. cannot call/use it in Controller.php
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL); //split the url the user inputted
        //var_dump($URL);
        return $URL;
    }
    
    public function loadController()
    {
        /* call the function above; this keyword is used to reference 
        * the function from the same class, since splitURL() is private, 
        * without this keyword it will throw "call to undefined function" error
        * $this-> represents this class (App)
        */
        $URL = $this->splitURL(); 
        //var_dump($URL);

        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        }
        else{
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = '_404';
        }

        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);

    }
    //show(splitURL());
}


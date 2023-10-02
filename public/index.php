<?php

session_start();

class App{
    
    private function splitURL(){
        $URL = $_GET['url'] ?? 'home';
        $URL = explode("/", $URL);
        //var_dump($URL);
        return $URL;
    }
    
    private function loadController()
    {
        $URL = splitURL();
        //var_dump($URL);
        $filename = "../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename))
        {
            require $filename;
        }
        else{
            $filename = "../app/controllers/_404.php";
            require $filename;
        }
    }
    //show(splitURL());
    
    
}


loadController();

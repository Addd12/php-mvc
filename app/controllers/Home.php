<?php

//the name of the class should be the same as the name of the controller file 
class Home extends Controller //extending controller makes possible using its functions in the current class (Home)
{
    public function index($a = '', $b = '', $c = '') //$a = '', $b = '', $c = ''
    {
        //echo "This is the home controller";
        $this->view('home');
    }
}

//$home->index();


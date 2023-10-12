<?php

//the name of the class should be the same as the name of the controller file 
class Products extends Controller //extending controller makes possible using its functions in the current class (Home)
{
    public function index()
    {
        $this->view('products');
    }
}


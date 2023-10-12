<?php

//the name of the class should be the same as the name of the controller file 
class _404 extends Controller //extending controller makes possible using its functions in the current class
{
    public function index()
    {
        echo "404 page not found controller";
    }
}


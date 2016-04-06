<?php

class Controller
{
    
    // load model
    public function model($model)
    {
        $path = "app/models/" . $model . ".php";
        if(file_exists($path))
        {
            require_once $path;
            return new $model();
        }
    }
    
    // load view
    public function view($view, $data = [])
    {
        $path = "app/views/" . $view . ".php";
        if(file_exists($path))
        {
            require_once $path;
        }
    }
    
}


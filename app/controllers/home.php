<?php

class Home extends Controller
{
    // Default methodm it sends some variables to index view
    public function index()
    {   
        // accessing index.php view
        $this->view("index", []);
        if(isset($_SESSION["user"]))
        {
            header("Location: /dashboard");
        }
    }
    
    public function login()
    {
        $login = $this->model("Login");
        $login->loginUser();
    }
    
    public function logout()
    {
        $login = $this->model("Login");
        $login->logoutUser();
    }
    
}
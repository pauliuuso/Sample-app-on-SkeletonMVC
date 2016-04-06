<?php

class Login
{   
    public function loginUser()
    {
        $username = $_POST["username"];
        $password = sha1($_POST["password"]);
        $sql = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
        $return = CON::load()->checkUser($sql);
        if($return)
        {
            $_SESSION["user"] = $username;
            header("Location: /dashboard");
        }
        else
        {
            header("Location: " . BASE_URL);
        }
    }
    
    public function logoutUser()
    {
        session_destroy();
        header("Location: " . BASE_URL);
    }

}


<?php

class Dashboard extends Controller
{
    // Default methodm it sends some variables to index view
    public function index()
    {   
        $notices = $this->model("getNotifications");
        $notices = $notices->parseNotifications();
        $this->view("dashboard", $notices);
    }
    
    public function addNote()
    {
        $notices = $this->model("addNotification");
        $notices->addNote($_POST["note"], $_POST["id"]);
    }
    
}
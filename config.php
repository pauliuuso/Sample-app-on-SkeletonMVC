<?php

// mysql connection variables
$_hostname = "your_database_hostname";
$_username = "mysql_username";
$_password = "mysql_password";
$_database = "database_name";
define("BASE_URL", "/");

date_default_timezone_set('Europe/Vilnius');
error_reporting(0);


class CON
{
    protected static $_instance = null;
    
    public function load()
    {
        if(!isset(self::$_instance))
        {
            self::$_instance = new CON();
        }
        return self::$_instance;
    }

    public function createConnection()
    {
        global $_hostname, $_username, $_password, $_database;
        return new mysqli($_hostname, $_username, $_password, $_database);
    }
    
    // use this to only execute mysql statement
    public function executeStatement($sql)
    {
        $connection = $this->createConnection();
        $statement = mysqli_prepare($connection, $sql);
        if($statement->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function checkUser($sql)
    {
        $connection = $this->createConnection();
        $statement = mysqli_prepare($connection, $sql);
        $statement->execute();
        $statement->store_result();
        if($statement->num_rows >= 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function parseNotifications($sql)
    {
        $data = [];
        $connection = $this->createConnection();
        $statement = mysqli_prepare($connection, $sql);
        $statement->execute();
        $statement->bind_result($id, $notif, $date);
        while($statement->fetch())
        {
            $data[] = array($id, $notif, $date);
        }
        return $data;
    }
    
}


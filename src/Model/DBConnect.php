<?php

namespace src\Model;
use mysql_xdevapi\Exception;

class DBConnect
{
protected $dsn;
protected $user;
protected $password;
public function __construct()
{
    $this->dsn = "mysql:host=localhost;dbname=computerstore";
    $this->user = "root";
    $this->password ="";
}

    public function connect()
    {
/*        try {*/
            return new \PDO($this->dsn,$this->user,$this->password);
       /* }
        catch (Exception $exception){
            echo "máy chủ bảo trì";
            exit();
        }*/
}
}
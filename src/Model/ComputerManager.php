<?php


namespace src\Model;

include "DBConnect.php";
class ComputerManager
{
protected $connect;
public function __construct()
{
    $dbconnect = new DBConnect();
    $this->connect =$dbconnect->connect();
}

    public function getAllComputers()
    {
        $sql = "SELECT * FROM computers";
        $query = $this->connect->query($sql);
        return $query->fetchAll();
}
}
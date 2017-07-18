<?php
class Task{
    public static function getConnection()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "test";
        $connect = new mysqli($host,$username,$password,$database);
        return $connect;
    }
}
$connect_sever = Task::getConnection();
print_r($connect_sever);
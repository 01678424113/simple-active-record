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

    public static function createTable()
    {
        $connection = Task::getConnection();
        $connection->query("CREATE TABLE `test`.`tasks` ( `id` INT NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
        echo "Create table tasks success";
    }
}

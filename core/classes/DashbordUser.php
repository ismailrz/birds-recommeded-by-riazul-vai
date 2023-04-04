<?php

include('connection.php');

class DashbordUser extends Connect
{

    public $connection;

    public function __construct()
    {
        $connection = new Connect();
        $this->connection = $connection->connect();
    }
    public static function allUser($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $results = $stmt->fetchAll();
        return $results;
    }

    public static function store($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
    }

    public static function edit($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $results = $stmt->fetch();
        return $results;
    }

    public static function update($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
    }
 public static function getTweetUser($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $results = $stmt->fetch();
        return $results;
    }


    public static function delete($query)
    {
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
    }
}

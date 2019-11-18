<?php

namespace BeginningPhp;


class DB
{
    private $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $port
     * @param $username
     * @param $password
     * @param $dbName
     */
    public function __construct($host, $port, $username, $password, $dbName)
    {
        $this->connection = mysqli_connect($host, $username, $password, $dbName, $port);
        if(mysqli_connect_errno()) {
            echo "DB error: " . mysqli_connect_error();
        }
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }

    public function getMenuItems()
    {
        $sql = "SELECT * FROM menu ORDER BY id ASC";
        $query = mysqli_query($this->connection, $sql);
        $menu = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $menu[$row['kluc']] = [
                'name' => $row['name'],
                'menu' => $row['menu'],
                'path' => $row['path']
            ];
        }

        return $menu;
    }

    public function getChatContent()
    {
        $sql = "SELECT * FROM chat ORDER BY id ASC";
        $query = mysqli_query($this->connection, $sql);
        $chat = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $chat[$row['id']] = [
                'name' => $row['name'],
                'message' => $row['message']
            ];
        }

        return $chat;
    }

    public function insertChat($name, $message)
    {
        $sql = "INSERT INTO chat(name, message) VALUE('".$name."', '".$message."')";
        $query = mysqli_query($this->connection, $sql);
    }
}
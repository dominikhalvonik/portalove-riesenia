<?php

namespace BeginningPhp;

class Databaza
{
    private $connection;

    /**
     * Databaza constructor.
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
                'path' => $row['path'],
            ];
        }

        return $menu;
    }

    public function insertImage($url)
    {
        $sql = "INSERT INTO images(url) VALUE ('".$url."')";
        $query = mysqli_query($this->connection, $sql);
    }

    public function getImages()
    {
        $sql = "SELECT * FROM images ORDER BY id ASC";
        $query = mysqli_query($this->connection, $sql);
        $images = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $images[] = $row['url'];
        }

        return $images;
    }
}
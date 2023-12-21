<?php


// db.php

class Database1 {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "scripting";

    public function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}


?>
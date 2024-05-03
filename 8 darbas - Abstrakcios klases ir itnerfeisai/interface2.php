<?php
interface DB {
    public function get($table);
}

class Database {
    protected $connection;

    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function get($table) {
        $sql = "SELECT * FROM $table";
        $result = $this->connection->query($sql);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                print_r($row);
            }
            $result->free();
        } else {
            echo "Error: " . $this->connection->error;
        }
    }
}

class MySQLDB extends Database {
    public function get($table) {
        parent::get($table);
    }
}

$mysql = new MySQLDB("localhost", "username", "password", "database");
$mysql->get("table_name");
?>

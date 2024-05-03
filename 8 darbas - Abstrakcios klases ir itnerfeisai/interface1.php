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

class MSSQLDB extends Database {
    public function get($table) {
        $sql = "SELECT TOP 10 * FROM $table";
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

$mssql = new MSSQLDB("localhost", "username", "password", "database");
$mssql->get("table_name");
?>

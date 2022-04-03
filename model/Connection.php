<?php
    class Connection {
        public function getConnection() {
            $host = "localhost";
            $db = "booksPrueba";
            $user = "root";
            $pass = "";
            $connection = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            return $connection; 
        }
    }
?>
 
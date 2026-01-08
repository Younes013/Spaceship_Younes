<?php
class Database {
    public static function connect() {
        $conn = new mysqli("localhost", "root", "root", "spaceship");

        if ($conn->connect_error) {
            die("Database connection failed");
        }

        return $conn;
    }
}

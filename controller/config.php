<?php
function connectToDB() {
    $servername = "localhost";
    $username = "root";
    $password = "rj45port";
    $dbname = "payroll_db";

    // Create a new MySQLi object
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
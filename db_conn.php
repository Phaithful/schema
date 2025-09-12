<?php
$host = "localhost";
$user = "root";   // default for WAMP
$pass = "";       // default is empty password
$dbname = "schema_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
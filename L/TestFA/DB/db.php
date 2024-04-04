<?php
$host = 'localhost';
$dbname = 'member';
$username = 'root';
$password = 'ares123';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
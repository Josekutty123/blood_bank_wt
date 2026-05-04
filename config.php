<?php
$host = "localhost";
$user = "jose";     
$pass = "jose";       
$dbname = "blood_bank";   

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>

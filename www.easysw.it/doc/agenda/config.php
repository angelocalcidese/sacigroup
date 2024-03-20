<?php
$host = '62.149.150.193';
$user = 'Sql677633';
$pass = '9a01ef5d';
$db = 'Sql677633_2';
// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
?>
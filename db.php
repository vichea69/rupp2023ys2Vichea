<?php
// Database credentials
$host = 'mysql.vichea.engineer';
$user = 'root';
$password = 'rootpassword';
$database = 'vicheadb';

// Create connection
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully!";
}

// Optionally, you can close the connection later when done
// $con->close();
?>
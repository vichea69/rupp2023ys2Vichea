<?php
    /* connection.php */
    
    $servername = "localhost";
    $username = "root"; // root is the default username. if you have changed the username, then change it here
    $password = ""; //which is the same that you used to access your phpMyAdmin. default password is empty.
    $dbname = "vicheadb"; //which is the name of the database you created.

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";



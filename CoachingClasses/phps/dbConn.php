<?php
    $dbUsername = "root";
    $dbPassword = "umang681999";
    $dbName = "coaching";
    $dbServer = "localhost";

    $link = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    else {
        // echo "connected successfully"; 
    }
?>
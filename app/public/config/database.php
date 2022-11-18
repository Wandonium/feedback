<?php
    define('DB_HOST', 'mysql');
    define('DB_USER', 'db_user');
    define('DB_PASS', 'db_user@123');
    define('DB_NAME', 'my_db');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }
?>
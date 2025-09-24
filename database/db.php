<?php
// Database configuration for XAMPP
$host = 'localhost';        // host e.g. 'localhost'
$dbname = 'kiwi_kloset';    // name of the database
$username = 'root';         // username e.g. 'root'
$password = '';             // password e.g. ''

// Create MySQLi connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8");

// echo "Connected successfully to database: " . $dbname;
?>

    <!-- ?php

        $sql_server = "learn-mysql.cms.waikato.ac.nz";
        $db_username = "amatenga";
        $db_password = "my123456sql";
        $db_name = "amatenga";  
        $conn = mysqli_connect($sql_server, $db_username, $db_password, $db_name);
        if($conn == FALSE) 
            die("Error connecting to mysql server :". mysqli_connect_error());

    ?> -->

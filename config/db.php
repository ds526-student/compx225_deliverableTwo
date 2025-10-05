<?php
    // load .env file
    $env = parse_ini_file(__DIR__ . '/../.env');

    // database config
    $host = $env['DB_HOST'];
    $dbname = $env['DB_NAME'];
    $username = $env['DB_USER'];
    $password = $env['DB_PASS'];

    // $host = 'localhost';
    // $dbname = 'kiwi_kloset';
    // $username = 'root';
    // $password = '';

    // create db connection
    try {
        $con = mysqli_connect($host, $username, $password, $dbname);
    } catch (Exception $e) {
        die("Database connection failed");
    }

    mysqli_set_charset($con, "utf8");
?>

   



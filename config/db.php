<?php
    // load .env file
    $env = parse_ini_file(__DIR__ . '/../.env');

    // database config
    // $host = $env['DB_HOST'];
    // $dbname = $env['DB_NAME'];
    // $username = $env['DB_USER'];
    // $password = $env['DB_PASS'];

    $host = 'localhost';
    $dbname = 'kiwi_kloset';
    $username = 'root';
    $password = '';

    // create db connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($con, "utf8");

    // echo "Connected successfully to database: " . $dbname;
    // $sql_server = "learn-mysql.cms.waikato.ac.nz";
    // $db_username = "amatenga";
    // $db_password = "my123456sql";
    // $db_name = "amatenga";  
    // $conn = mysqli_connect($sql_server, $db_username, $db_password, $db_name);
    // if($conn == FALSE) 
    //     die("Error connecting to mysql server :". mysqli_connect_error());
    
?>

   



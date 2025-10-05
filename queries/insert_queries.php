<?php
    require_once __DIR__ . '/../config/db.php';

    // adds a new costume to the database
    function addCostume($is_available, $branch_id, $name, $size, $daily_rate, $category) {
        global $con;
        // the query to insert a new costume
        $query = "INSERT INTO costumes (is_available, branch_id, name, size, daily_rate, category) VALUES (?, ?, ?, ?, ?, ?)";

        // prepare, bind, and execute the statement
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'iissds', $is_available, $branch_id, $name, $size, $daily_rate, $category);
        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            die("Insert failed: " . mysqli_error($con));
        }

        // returns the new costume's ID
        return mysqli_insert_id($con);
    } 
?>
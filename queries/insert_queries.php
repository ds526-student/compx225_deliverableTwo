<?php
    require_once __DIR__ . '/../config/db.php';

    function addCostume($is_available, $branch_id, $name, $size, $daily_rate, $category) {
        global $con;
        $query = "INSERT INTO costumes (is_available, branch_id, name, size, daily_rate, category) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'siisss', $is_available, $branch_id, $name, $size, $daily_rate, $category);
        $result = mysqli_stmt_execute($stmt);

        if (!$result) {
            die("Insert failed: " . mysqli_error($con));
        }

        return mysqli_insert_id($con);
    }
    
?>
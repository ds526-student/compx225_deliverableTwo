<?php
    require_once __DIR__ . '/../config/db.php';


    function getAllCostumes() {
        global $con;
        $query = "SELECT * FROM costumes";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        return $result;
    }
?>
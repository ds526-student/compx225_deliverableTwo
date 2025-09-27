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
    
    $result = getAllCostumes();

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Costume: " . $row['name'] . " - Size: " . $row['size'] . " - Daily Rate: $" . number_format($row['daily_rate'], 2) . " - Category: " . $row['category'] . "\n";
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
?>
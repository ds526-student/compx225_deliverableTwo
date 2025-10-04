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

    function rentalsByCostumeId($id) {
        global $con;
        $query = "SELECT 
                    costumes.name as costume_name,
                    rentals.customer_id,
                    rentals.start_datetime,
                    rentals.end_datetime,
                    customers.first_name as customer_first_name,
                    customers.last_name as customer_last_name,
                    CONCAT(customers.first_name, ' ', customers.last_name) as customer_name
                FROM costumes 
                INNER JOIN rentals ON costumes.id = rentals.costume_id
                INNER JOIN customers ON rentals.customer_id = customers.id
                WHERE costumes.id = ?";

        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        return $result;
    }
?>
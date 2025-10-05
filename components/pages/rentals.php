<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kiwi Kloset - Rentals</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
        <link rel="stylesheet" href="../../styles/styles.css">
        <link rel="stylesheet" href="../../styles/navbar.css">
        <link rel="stylesheet" href="../../styles/footer.css">
    </head>
    <body class="content">
        <!-- Navbar -->
        <?php require '../partials/navbar.html'; ?>

        <!-- Main Content -->
        <!-- Welcome Message -->
        <h1 class="centre-content">
            Rentals
        </h1>

        <!-- Display Rentals from Database -->
        <div id="rentals">
            <h1>Costume Name</h1>
            <h1>Customer ID</h1>
            <h1>Customer Name</h1>
            <h1>Start DateTime</h1>
            <h1>End DateTime</h1>
            <?php
                require_once '../../config/db.php';
                require_once '../../queries/select_queries.php';

                // fetch and display all rentals in a table
                try {
                    $id = $_GET['id'];

                    $result = rentalsByCostumeId($id);

                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="table-item">' . $row['costume_name'] . '</div>';
                            echo '<div class="table-item">' . $row['customer_id'] . '</div>';
                            echo '<div class="table-item">' . $row['customer_name'] . '</div>';
                            echo '<div class="table-item">' . $row['start_datetime'] . '</div>';
                            echo '<div class="table-item">' . $row['end_datetime'] . '</div>';
                        }
                    }
                    else {
                        echo "<p>Error: " . mysqli_error($con) . "</p>";
                    }
                } catch (Exception $e) {
                    die ("Error fetching costumes: " . $e->getMessage(). " Please contact your system administrator.");
                }
            ?>
        </div>

        <!-- Footer -->
        <?php require '../partials/footer.html'; ?>
    </body>
</html>
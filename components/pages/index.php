<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kiwi Kloset</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
        <link rel="stylesheet" href="../../styles/styles.css">
        <link rel="stylesheet" href="../../styles/content.css">
        <link rel="stylesheet" href="../../styles/navbar.css">
        <link rel="stylesheet" href="../../styles/footer.css">
    </head>
    <body class="content">
        <!-- Navbar -->
        <?php require '../partials/navbar.html'; ?>

        <!-- Main Content -->
        <!-- Welcome Message -->
        <h1 class="centre-content">
            Welcome to Kiwi Kloset
        </h1>

        <!-- Instructions -->
        <!-- <p class="inline-padding">
            Instructions
            <br>
            <br>
            1. Lorem ipsum dolor sit amet.
            <br>
            2. Consectetur adipiscing elit.
            <br>
            3. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            <br>
            4. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            <br>
            5. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p> -->

        <!-- Display Costumes from Database -->
        <div id="costumes">
            <h1>ID</h1>
            <h1>Name</h1>
            <h1>Size</h1>
            <h1>Available</h1>
            <h1>Daily Rate</h1>
            <h1>Category</h1>
            <?php
                require_once '../../config/db.php';
                require_once '../../queries/select_queries.php';

                try {
                $result = getAllCostumes();

                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="costume-item">' . $row['id'] . '</div>';
                            echo '<div class="costume-item">' . $row['name'] . '</div>';
                            echo '<div class="costume-item">' . $row['size'] . '</div>';
                            if ($row['is_available'] == '1') {
                                echo '<div class="costume-item">Yes</div>';
                            }
                            else {
                                echo '<div class="costume-item">No</div>';
                            }
                            echo '<div class="costume-item">$' . $row['daily_rate'] . '/day</div>';
                            echo '<div class="costume-item">' . $row['category'] . '</div>';
                        }
                    }
                    else {
                        echo "<p>Error: " . mysqli_error($con) . "</p>";
                    }
                } catch (Exception $e) {
                    die ("Error fetching costumes: " . $e->getMessage());
                }
            ?>
        </div>

        <!-- Footer -->
        <?php require '../partials/footer.html'; ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kiwi Kloset - Add Item</title>
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
            Added New Item
        </h1>

        <!-- Display the newly added item -->
        <div id="costumes">
            <h1>ID</h1>
            <h1>Name</h1>
            <h1>Size</h1>
            <h1>Available</h1>
            <h1>Daily Rate</h1>
            <h1>Category</h1>
            <?php
                require_once '../../config/db.php';
                require_once '../../queries/insert_queries.php';
                require_once '../../queries/select_queries.php';

                // process submission and display the newly added item in a table
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST['name'];
                    $size = $_POST['size'];
                    $is_available = $_POST['is_available'];
                    $daily_rate = $_POST['daily_rate'];
                    $category = $_POST['category'];
                    $branch = $_POST['branch'];

                    $new_id = addCostume($is_available, $branch, $name, $size, $daily_rate, $category);

                    // Display the newly added item using the form data
                    echo '<div class="table-item">' . $new_id . '</div>';
                    echo '<div class="table-item">' . $name . '</div>';
                    echo '<div class="table-item">' . $size . '</div>';
                    if ($is_available == '1') {
                        echo '<div class="table-item">Yes</div>';
                    }
                    else {
                        echo '<div class="table-item">No</div>';
                    }
                    echo '<div class="table-item">$' . $daily_rate . '/day</div>';
                    echo '<div class="table-item">' . $category . '</div>';
                }
            ?>
        </div>

        <!-- Footer -->
        <?php require '../partials/footer.html'; ?>
    </body>
</html>
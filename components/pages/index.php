<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kiwi Kloset</title>
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
                            echo '<div class="table-item">' . $row['id'] . '</div>';
                            echo '<div class="table-item">' . $row['name'] . '</div>';
                            echo '<div class="table-item">' . $row['size'] . '</div>';
                            if ($row['is_available'] == '1') {
                                echo '<div class="table-item">Yes</div>';
                            }
                            else {
                                echo '<div class="table-item">No</div>';
                            }
                            echo '<div class="table-item">$' . $row['daily_rate'] . '/day</div>';
                            echo '<div class="table-item">' . $row['category'] . '</div>';
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
        <dialog id="add_costume">
            <h1>Add New Costume</h1>
            <form method="POST" action="add.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter costume name" required>

                <br>

                <label for="size">Size:</label>
                <input type="text" id="size" name="size" placeholder="Enter costume size" required>

                <br>

                <label for="is_available">Available</label>
                <input type="number" id="is_available" name="is_available" min="0" max="1" placeholder="1 or 0" required>

                <br>

                <label for="daily_rate">Daily Rate:</label>
                <input type="number" step="0.01" id="daily_rate" name="daily_rate" placeholder="Daily rate in $" required>

                <br>

                <label for="category">Category:</label>
                <select name="category" id="category" required>
                    <option value="Movies">Movies</option>
                    <option value="Halloween">Halloween</option>
                    <option value="Circus">Circus</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Novelty">Novelty</option>
                </select>

                <br>

                <label for="branch">Branch:</label>
                <select name="branch" id="branch" required>
                    <option value="1">Auckland</option>
                    <option value="2">Wellington</option>
                    <option value="3">Christchurch</option>
                    <option value="4">Hamilton</option>
                    <option value="5">Tauranga</option>
                </select>

                <div class="dialog-buttons">
                    <button type="submit">Add Costume</button>
                    <button type="button" onclick="add_costume.close()">Cancel</button>
                </div>
            </form>
        </dialog>
        <script src="../../components/js/index.js"></script>
    </body>
</html>
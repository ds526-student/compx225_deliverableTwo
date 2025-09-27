<?php require_once '../../config/db.php'; ?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kiwi Kloset</title>
        <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
        <link rel="stylesheet" href="../../styles/global.css">
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
        <p class="inline-padding">
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
        </p>

        <!-- Footer -->
        <?php require '../partials/footer.html'; ?>
    </body>
</html>
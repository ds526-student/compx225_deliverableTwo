<?php

// Test MySQL database connection
require_once '../config/db.php';

echo "Database Connection Test\n";
echo "✅ Connection successful!\n";
echo "Connected to database: $dbname\n";

// Test if tables exist
echo "Testing Tables:\n";
$tables = ['customers', 'branches', 'costumes', 'rentals'];

foreach ($tables as $table) {
    $query = "SELECT COUNT(*) as count FROM $table";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "✅ Table '$table' exists with {$row['count']} records\n";
    } else {
        echo "❌ Table '$table' not found or error: " . mysqli_error($con) . "\n";
    }
}

// Test sample query
echo "Sample Data Test:\n";
$query = "SELECT name, daily_rate FROM costumes LIMIT 3";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "✅ Sample costumes from database:\n";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "{$row['name']} - $" . number_format($row['daily_rate'], 2) . "/day\n";
    }
} else {
    echo "⚠️ No costume data found or query error: " . mysqli_error($con) . "\n";
}

// Close connection
mysqli_close($con);
echo "Connection closed.\n";
?>
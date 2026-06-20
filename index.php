<?php
$conn = require_once 'scripts/connection.php';
// Query to get the URL
$sql = "SELECT store_link FROM site_info WHERE info_id = '0123abc'"; // Adjust table & column names as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $redirectUrl = $row['store_link'];

    // Redirect to the fetched URL
    header("Location: $redirectUrl");
    exit();
} else {
    echo "No URL found.";
}

$conn->close();
?>
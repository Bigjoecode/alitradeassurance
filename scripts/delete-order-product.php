<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $product_id = $conn->real_escape_string($_GET['id']);

    // First, get the image filename to delete the file
    $image_query = "SELECT image FROM order_products WHERE product_id = ?";
    $stmt = $conn->prepare($image_query);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    // Delete the product from database
    $delete_query = "DELETE FROM order_products WHERE product_id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        // If product was deleted successfully, delete the image file
        if ($product && $product['image']) {
            $image_path = "../uploads/products/" . $product['image'];
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        header("Location: ../admin/order_products.php?success=deleted");
    } else {
        header("Location: ../admin/order_products.php?error=delete_failed");
    }

    $stmt->close();
} else {
    header("Location: ../admin/order_products.php");
}

$conn->close();
?>

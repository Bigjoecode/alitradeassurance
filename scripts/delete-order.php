<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $order_id = (int)$_GET['id'];

    try {
        // Start transaction
        $conn->begin_transaction();

        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $class_id = $row['class_id'];
        }

        // Delete order items first (due to foreign key constraint)
        $delete_items = "DELETE FROM order_products WHERE class_id = ?";
        $stmt = $conn->prepare($delete_items);
        $stmt->bind_param("i", $class_id);
        $stmt->execute();

        // Delete the order
        $delete_order = "DELETE FROM orders WHERE order_id = ?";
        $stmt = $conn->prepare($delete_order);
        $stmt->bind_param("i", $order_id);
        $stmt->execute();

        // Commit transaction
        $conn->commit();

        header("Location: ../admin/all-checkout.php?success=order_deleted");
        exit();

    } catch (Exception $e) {
        // Rollback transaction on error
        $conn->rollback();
        error_log("Error deleting order: " . $e->getMessage());
        header("Location: ../admin/all-checkout.php?error=delete_failed");
        exit();
    }
} else {
    header("Location: ../admin/all-checkout.php");
    exit();
}

$conn->close();
?>
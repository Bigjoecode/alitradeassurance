<?php
session_start();
$conn = require_once 'connection.php';

// Check if user is logged in and is admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

// Validate POST data
if (!isset($_POST['order_id'])) {
    header("Location: ../admin/manage-checkout-detail.php?error=" . urlencode("Missing required checkout data"));
    exit();
}

try {
    // Get and sanitize input
    $order_id = (int)$_POST['order_id'];
    $store_name = $_POST['store_name']; 
    $name = trim($_POST['name']); 
    $email = trim($_POST['email'] ?? '');
    $phone = $_POST['phone'];
    $address_1 = $_POST['address_1'];
    $address_2 = trim($_POST['address_2'] ?? '');
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $total_amount = (float)$_POST['total_amount'];
    $estimated_delivery = !empty($_POST['delivery_date']) ? $_POST['delivery_date'] : null;
    $created_at = $_POST['created_at'];
    $class_id = $_POST['class_id'];
    

    // Start transaction
    $conn->begin_transaction();

    // Prepare the base SQL query
    $sql = "UPDATE orders SET 
            store_name = ?,
            name = ?,
            email = ?,
            phone = ?,
            address_1 = ?,
            address_2 = ?,
            country = ?,
            state = ?,
            city = ?,
            total_amount = ?,
            class_id = ?,
            estimated_delivery = ?,
            created_at = ?";

    $sql .= " WHERE order_id = ?";

    $stmt = $conn->prepare($sql);
    
 
    $stmt->bind_param("sssssssssdissi", 
        $store_name,
        $name,
        $email,
        $phone,
        $address_1,
        $address_2,
        $country,
        $state,
        $city,
        $total_amount,
        $class_id,
        $estimated_delivery,
        $created_at,
        $order_id
    );

    if (!$stmt->execute()) {
        throw new Exception("Failed to update details: " . $stmt->error);
    }

    // Commit transaction
    $conn->commit();

    // Set success message and redirect
    header("Location: ../admin/manage-checkout-detail.php?id=" . $order_id . "&success=Details updated successfully!");
    exit();

} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    
    error_log("Error in manage-checkout-script.php: " . $e->getMessage());
    header("Location: ../admin/manage-checkout-detail.php?id=" . $order_id . "&error=" . urlencode($e->getMessage()));
    exit();
}

$conn->close();
?>

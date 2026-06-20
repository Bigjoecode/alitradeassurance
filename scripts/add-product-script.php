<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get form data
        $name = $conn->real_escape_string($_POST['name']);
        (isset($_POST['description'])) ? $description = $conn->real_escape_string($_POST['description']) : $description = " ";
        (isset($_POST['category'])) ? $category = $conn->real_escape_string($_POST['category']) : $category = " ";
        $variation = $conn->real_escape_string($_POST['variation']);
        $price = floatval($_POST['price']);
        (isset($_POST['discount_price'])) ? $discount_price = $conn->real_escape_string($_POST['discount_price']) : $discount_price = " ";
        $quantity = intval($_POST['quantity']);
        $class_number = intval($_POST['class_number']);
        $admin_id = $_SESSION['admin_id'];

        // Handle file upload
        $target_dir = "../uploads/products/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Validate if image was uploaded
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            throw new Exception("Please select an image to upload");
        }

        $image = $_FILES['image'];
        $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        $new_file_name = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $new_file_name;
       
        // Validate file type
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif','webp','avif');
        if (!in_array($imageFileType, $allowedTypes)) {
            throw new Exception("Invalid file type. Please upload JPG, PNG, GIF, WEBP or AVIF files only");
        }

        // Validate file size (5MB max)
        $maxFileSize = 5 * 1024 * 1024;
        if ($image['size'] > $maxFileSize) {
            throw new Exception("File is too large. Maximum size is 5MB");
        }

        // Upload file
        if (!move_uploaded_file($image['tmp_name'], $target_file)) {
            throw new Exception("Failed to upload image. Please try again");
        }

        // Store the complete filename including extension
        $sql = "INSERT INTO order_products (product_name, description, category, variation, price, discount_price, class_id, quantity, image, created_by) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssddiiss", $name, $description, $category, $variation, $price, $discount_price, $class_number, $quantity, $new_file_name, $admin_id);

        if ($stmt->execute()) {
            header("Location: ../admin/add-order.php?success=Product added successfully!");
        } else {
            // Delete uploaded file if database insert fails
            unlink($target_file);
            throw new Exception("Failed to add order. Please try again");
        }

    } catch (Exception $e) {
        header("Location: ../admin/add-order.php?error=" . urlencode($e->getMessage()));
    }
    exit();
}

$conn->close();
?>

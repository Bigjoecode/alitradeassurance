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
        $product_id = $conn->real_escape_string($_POST['product_id']);
        $name = $conn->real_escape_string($_POST['name']);
        $description = $conn->real_escape_string($_POST['description']);
        $category = $conn->real_escape_string($_POST['category']);
        $variation = $conn->real_escape_string($_POST['variation']);
        $price = floatval($_POST['price']);
        $discount_price = floatval($_POST['discount_price']);
        $quantity = intval($_POST['quantity']);
        $class_id = intval($_POST['class_id']);
        $admin_id = $_SESSION['admin_id'];

        // Initialize update query
        $sql = "UPDATE order_products SET 
                product_name = ?, 
                description = ?, 
                category = ?, 
                variation = ?, 
                price = ?, 
                discount_price = ?, 
                quantity = ?,
                class_id = ?,  
                updated_at = CURRENT_TIMESTAMP";

        $params = [$name, $description, $category, $variation, $price, $discount_price, $quantity, $class_id];
        $types = "ssssddii";

        // Handle image upload if a new image was provided
        if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
            $image = $_FILES['image'];
            $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
            $new_file_name = uniqid() . '.' . $imageFileType;
            $target_dir = "../uploads/products/";
            $target_file = $target_dir . $new_file_name;

            // Validate file type
            $allowedTypes = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'avif');
            if (!in_array($imageFileType, $allowedTypes)) {
                throw new Exception("Invalid file type. Please upload a JPG, JPEG, PNG, GIF, WEBP or AVIF file");
            }

            // Validate file size (5MB max)
            $maxFileSize = 5 * 1024 * 1024;
            if ($image['size'] > $maxFileSize) {
                throw new Exception("File is too large. Maximum size is 5MB");
            }

            // Get old image to delete after successful update
            $old_image_query = "SELECT image FROM order_products WHERE product_id = ?";
            $stmt = $conn->prepare($old_image_query);
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $old_image = $result->fetch_assoc()['image'];

            // Upload new image
            if (!move_uploaded_file($image['tmp_name'], $target_file)) {
                throw new Exception("Failed to upload image. Please try again");
            }

            // Add image to update query
            $sql .= ", image = ?";
            $params[] = $new_file_name;
            $types .= "s";
        }

        // Complete the update query
        $sql .= " WHERE product_id = ?";
        $params[] = $product_id;
        $types .= "i";

        // Prepare and execute the update
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("Failed to prepare update statement");
        }

        $stmt->bind_param($types, ...$params);

        if (!$stmt->execute()) {
            throw new Exception("Failed to update product");
        }

        // If there was a new image uploaded, delete the old one
        if (isset($old_image) && isset($new_file_name)) {
            $old_image_path = "../uploads/products/" . $old_image;
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }

        header("Location: ../admin/update-order-product.php?id=" . $product_id . "&success=Product updated successfully!");
        exit();

    } catch (Exception $e) {
        // If update failed and new image was uploaded, delete it
        if (isset($target_file) && file_exists($target_file)) {
            unlink($target_file);
        }
        
        header("Location: ../admin/update-order-product.php?id=" . $product_id . "&error=" . urlencode($e->getMessage()));
        exit();
    }

    if (isset($stmt)) {
        $stmt->close();
    }
}

$conn->close();
?>

<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = require_once 'connection.php';
$admin_id = $_SESSION['admin_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $email = $conn->real_escape_string($_POST['email']);

    try {
        // Check if email already exists for another admin
        $check_email = "SELECT admin_id FROM admins WHERE email = ? AND admin_id != ?";
        $stmt = $conn->prepare($check_email);
        $stmt->bind_param("si", $email, $admin_id);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0) {
            throw new Exception("email_exists");
        }

        // Handle profile image upload if exists
        $profile_image_sql = "";
        $new_file_name = null;
        
        if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            $file_type = $_FILES['profile_image']['type'];
            $file_size = $_FILES['profile_image']['size'];
            
            // Validate file type
            if (!in_array($file_type, $allowed_types)) {
                throw new Exception("invalid_file_type");
            }
            
            // Validate file size (5MB max)
            if ($file_size > 5 * 1024 * 1024) {
                throw new Exception("file_too_large");
            }
            
            // Generate unique filename
            $file_extension = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
            $new_file_name = uniqid('admin_') . '.' . $file_extension;
            
            // Create uploads directory if it doesn't exist
            $target_dir = "../uploads/admins/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            
            $target_file = $target_dir . $new_file_name;
            
            // Get old profile image
            $old_image_query = "SELECT profile_image FROM admins WHERE admin_id = ?";
            $stmt = $conn->prepare($old_image_query);
            $stmt->bind_param("i", $admin_id);
            $stmt->execute();
            $old_image = $stmt->get_result()->fetch_assoc()['profile_image'];
            
            // Upload new file
            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_file)) {
                $profile_image_sql = ", profile_image = ?";
                
                // Delete old profile image if exists
                if ($old_image) {
                    $old_image_path = "../uploads/admins/" . $old_image;
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    }
                }
            } else {
                throw new Exception("upload_failed");
            }
        }

        // Update admin profile
        $sql = "UPDATE admins SET firstname = ?, lastname = ?, email = ?" . $profile_image_sql . " WHERE admin_id = ?";
        $stmt = $conn->prepare($sql);
        
        if ($new_file_name) {
            $stmt->bind_param("ssssi", $firstname, $lastname, $email, $new_file_name, $admin_id);
        } else {
            $stmt->bind_param("sssi", $firstname, $lastname, $email, $admin_id);
        }

        if ($stmt->execute()) {
            // Update session variables
            $_SESSION['admin_firstname'] = $firstname;
            $_SESSION['admin_lastname'] = $lastname;
            $_SESSION['admin_email'] = $email;
            if ($new_file_name) {
                $_SESSION['admin_profile_image'] = $new_file_name;
            }
            
            header("Location: ../admin/admin-profile.php?success=profile_updated");
        } else {
            throw new Exception("update_failed");
        }

    } catch (Exception $e) {
        // If file was uploaded but database update failed, delete the uploaded file
        if (isset($target_file) && file_exists($target_file)) {
            unlink($target_file);
        }
        
        header("Location: ../admin/admin-profile.php?error=" . $e->getMessage());
    }
}

$conn->close();
?>
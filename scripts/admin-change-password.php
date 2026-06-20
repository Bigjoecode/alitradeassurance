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
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    try {
        // Validate password length
        if (strlen($new_password) < 6) {
            throw new Exception("Password must be at least 6 characters long");
        }

        // Check if new passwords match
        if ($new_password !== $confirm_password) {
            throw new Exception("New password and confirm password do not match");
        }

        // Get current admin password
        $sql = "SELECT password FROM admins WHERE admin_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $admin_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();

        // Verify old password
        if (!password_verify($old_password, $admin['password'])) {
            throw new Exception("Current password is incorrect");
        }

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update password
        $update_sql = "UPDATE admins SET password = ? WHERE admin_id = ?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("si", $hashed_password, $admin_id);

        if (!$stmt->execute()) {
            throw new Exception("Failed to update password. Please try again");
        }

        header("Location: ../admin/settings.php?success=Password has been changed successfully!");
        exit();

    } catch (Exception $e) {
        header("Location: ../admin/settings.php?error=" . urlencode($e->getMessage()));
        exit();
    }
}

$conn->close();
?>
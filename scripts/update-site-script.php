<?php
session_start();

// Check if admin is logged in.
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: ../login.php");
    exit();
}

$conn = require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $info_id = isset($_POST['info_id']) ? $_POST['info_id'] : '';

        // Check if info exists
        $check_info = "SELECT * FROM site_info WHERE info_id = ?";
        $stmt = $conn->prepare($check_info);
        $stmt->bind_param("s", $info_id);
        $stmt->execute();
        if ($stmt->get_result()->num_rows === 0) {
            throw new Exception("Invalid Site ID");
        }

        // Handle site info update
        if (isset($_POST['update_info'])) {
            $site_name = $conn->real_escape_string($_POST['site_name']);
            $contact_name = $conn->real_escape_string($_POST['contact_name']);
            $site_email = $conn->real_escape_string($_POST['site_email']);
            $site_phone = $conn->real_escape_string($_POST['site_phone']);
            $store_link = $conn->real_escape_string($_POST['store_link']);
            $pay_now_link = $conn->real_escape_string($_POST['pay_now_link'] ?? '');
            $head_office = $conn->real_escape_string($_POST['head_office']);

            if(empty($site_phone)){
                $sql = "UPDATE site_info SET store_name = ?, contact_name = ?, site_support_email = ?, head_office = ?, store_link = ?, pay_now_link = ? WHERE info_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $site_name, $contact_name, $site_email, $head_office, $store_link, $pay_now_link, $info_id);
            }else{
                $sql = "UPDATE site_info SET store_name = ?, contact_name = ?, site_support_email = ?, site_phone = ?, head_office = ?, store_link = ?, pay_now_link = ? WHERE info_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssssss", $site_name, $contact_name, $site_email, $site_phone, $head_office, $store_link, $pay_now_link, $info_id);
            }

        
            if (!$stmt->execute()) {
                throw new Exception("Failed to update site information");
            }

            header("Location: ../admin/update_site_setting.php?id=" . $info_id . "&success=Site information updated successfully!");
            exit();
        }

    } catch (Exception $e) {
        error_log("Error in update-site-script.php: " . $e->getMessage());
        header("Location: ../admin/update_site_setting.php?id=" . $info_id . "&error=" . urlencode($e->getMessage()));
        exit();
    }

    if (isset($stmt)) {
        $stmt->close();
    }
}

$conn->close();
?>

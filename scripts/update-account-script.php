<?php
session_start();
$conn = require_once "connection.php";

if (isset($_POST['update_account'])) {
    $info_id = $_POST['info_id'];
    $ben_name = $_POST['ben_name'];
    $ben_address = $_POST['ben_address'];
    $bank_name = $_POST['bank_name'];
    $bank_address = $_POST['bank_address'];
    $account_no = $_POST['account_no'];
    $swift_code = $_POST['swift_code'];

    // Update the database
    $sql = "UPDATE account_info SET 
                ben_name = ?, 
                ben_address = ?, 
                bank_name = ?, 
                bank_address = ?, 
                account_no = ?, 
                swift_code = ? 
            WHERE info_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $ben_name, $ben_address, $bank_name, $bank_address, $account_no, $swift_code, $info_id);

    if ($stmt->execute()) {
        header("Location: ../admin/account-settings.php?success=Account Details updated successfully.");
        exit();
    } else {
        header("Location: ../admin/account-settings.php?error=Error updating Account Details: " . urlencode($conn->error));
        exit();
    }
} else {
    header("Location: ../admin/account-settings.php");
    exit();
}
?>
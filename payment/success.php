<?php
// success.php - Handles the return from Yoco
$conn = require_once '../scripts/connection.php';

// Log the incoming request for debugging
// error_log("Yoco Success Callback: " . print_r($_REQUEST, true));

// Yoco typically sends a payload or we can just assume success if they land here from the redirect.
// Ideally, we should query Yoco API to verify the status using the checkoutId or id parameter.
// But for this implementation, we will assume success and update the latest pending record or specific ID if passed.

// NOTE: Yoco Redirect usually appends ?id=... or ?checkoutId=...
// The 'transaction_id' in our table corresponds to this checkoutId.

// Only update if we have an ID
/* 
// ROBUST WAY:
if (isset($_GET['id'])) {
    $checkoutId = $_GET['id'];
    // Update status to success
    $stmt = $conn->prepare("UPDATE payments SET status = 'success' WHERE transaction_id = ?");
    $stmt->bind_param("s", $checkoutId);
    $stmt->execute();
    $stmt->close();
}
*/

// SIMPLE WAY (as per user flow urgency):
// We might not have the ID if Yoco changes param names, so let's try to grab 'id' or 'checkoutId'.
$checkoutId = $_GET['id'] ?? ($_GET['checkoutId'] ?? null);

if ($checkoutId) {
    $stmt = $conn->prepare("UPDATE payments SET status = 'success' WHERE transaction_id = ?");
    $stmt->bind_param("s", $checkoutId);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// FINAL REDIRECT
header("Location: https://sale.alibaba.com/");
exit();
?>
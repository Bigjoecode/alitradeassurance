<?php
header('Content-Type: application/json');
$conn = require_once "../scripts/connection.php";

$orderid = isset($_GET['orderid']) ? $_GET['orderid'] : '';
$response = [];

// Fetch account info
$sql = "SELECT account_no, swift_code, ben_name, ben_address, bank_name, bank_address FROM account_info WHERE info_id = 'account01'";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    $response = $result->fetch_assoc();
} else {
    $response['error'] = 'Account info not found';
}

// Fetch order amount if orderid is provided
if ($orderid !== '') {
    $stmt = $conn->prepare("SELECT total_amount FROM orders WHERE order_id = ?");
    $stmt->bind_param("s", $orderid);
    $stmt->execute();
    $orderResult = $stmt->get_result();
    if ($orderResult && $orderResult->num_rows > 0) {
        $orderData = $orderResult->fetch_assoc();
        $response['total_amount'] = number_format((float) $orderData['total_amount'], 2, '.', ',');
    }
}

echo json_encode($response);
?>
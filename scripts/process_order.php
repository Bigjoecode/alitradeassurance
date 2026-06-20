<?php
session_start();
if (!$_POST) {
    header("Location: ../admin/checkout-details.php");
    exit();
}
$_SESSION['billing_info'] = $_POST;
if (!isset($_SESSION['admin_id']) || !isset($_SESSION['billing_info'])) {
    header("Location: ../admin/checkout-details.php?error=Invalid session");
    exit;
}

$conn = require_once 'connection.php';
$class_id = intval($_POST["class_id"]);
$order_id = intval($_POST["order_id"]);
$stmt = $conn->prepare("SELECT product_name, price, quantity FROM order_products WHERE class_id = ?");
$stmt->bind_param("i", $class_id);
$stmt->execute();
$order_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$total = 0;
foreach ($order_items as $item) {
    $total += $item['price'] * $item['quantity'];
}

// $tax_percentage = floatval($_SESSION['billing_info']['tax']/100);
// $tax_amount = $tax_percentage * $total;

$tax_amount = floatval($_SESSION['billing_info']['tax']);

// Store total in session for order processing
$_SESSION['order_total'] = $total + $tax_amount + $_SESSION['billing_info']['delivery_fee'] + $_SESSION['billing_info']['processing_fee'];

if(!empty($order_id)){
    $order_number = $order_id; 
}else{
    $order_number = mt_rand(100000000000000000, 999999999999999999);
}

 // Prepare the order insertion SQL with tracking fields
 $sql = "INSERT INTO orders (
    order_id, admin_id, class_id, store_name, name, email, phone,
    address_1, address_2, city, state, country,
    postcode, order_note, total_amount, payment_method,
    delivery_fee, processing_fee, tax, estimated_delivery
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiisssssssssssdsddds",
    $order_id,
    $_SESSION['admin_id'],
    $class_id,
    $_SESSION['billing_info']['store_name'],
    $_SESSION['billing_info']['name'],
    $_SESSION['billing_info']['email'],
    $_SESSION['billing_info']['phone'],
    $_SESSION['billing_info']['address_1'],
    $_SESSION['billing_info']['address_2'],
    $_SESSION['billing_info']['city'],
    $_SESSION['billing_info']['state'],
    $_SESSION['billing_info']['country'],
    $_SESSION['billing_info']['postcode'],
    $_SESSION['billing_info']['order_note'],
    $_SESSION['order_total'],
    $_SESSION['billing_info']['payment_method'],
    $_SESSION['billing_info']['delivery_fee'],
    $_SESSION['billing_info']['processing_fee'],
    $_SESSION['billing_info']['tax'],
    $_SESSION['billing_info']['delivery_date']
);

if (!$stmt->execute()) {
    header("Location: ../admin/checkout-details.php?error=Error creating billing details: " . $stmt->error);
    exit;
}

unset($_SESSION['order_total']);
unset($_SESSION['billing_info']);

header("Location: ../admin/checkout-details.php?success=Billing details created successfully!");
exit;
?>
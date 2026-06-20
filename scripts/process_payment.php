<?php
header("Content-Type: application/json");

$conn = require_once 'connection.php';
$data = json_decode(file_get_contents("php://input"), true);

// Extract data from the POST request
$amount = $data['amount'];
$name = $data['name'];
$email = $data['email'] ?? "";
$phone = $data['phone'] ?? "";

// Yoco Keys and URL
$apiKey = 'sk_test_238374c1M1zYPW6087943229b0b1'; // Test Secret Key
$url = 'https://payments.yoco.com/api/checkouts';

// Conversion Rate (USD to ZAR)
// Ideally this should be fetched from an API, but for now we use a fixed rate.
$exchangeRate = 17.20;
$amountZar = $amount * $exchangeRate;
$lineItems = $data['lineItems'] ?? [];

// Convert Line Item Prices to ZAR
$convertedLineItems = [];
foreach ($lineItems as $item) {
    // Price from frontend is in USD cents. Convert to ZAR cents.
    if (isset($item['pricingDetails']['price'])) {
        $item['pricingDetails']['price'] = round($item['pricingDetails']['price'] * $exchangeRate);
    }
    $convertedLineItems[] = $item;
}

// Domain for Callbacks
// Test Mode: Localhost
$domain = 'http://localhost/alibaba';

// Prepare data for Checkout API
$checkoutData = [
    'amount' => round($amountZar * 100), // Convert to cents (ZAR)
    'currency' => 'ZAR',
    'lineItems' => $convertedLineItems,
    'successUrl' => $domain . '/payment/success.php',
    'cancelUrl' => $domain . '/payment/checkout.php?status=cancelled',
    'metadata' => [
        'customerName' => $name,
        'customerEmail' => $email,
        'customerPhone' => $phone,
        'originalAmountUSD' => $amount
    ]
];

// Set up cURL request
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($checkoutData));

// Execute the request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// debug logging
$logData = "----------------\n" . date("Y-m-d H:i:s") . "\n";
$logData .= "Payload: " . json_encode($checkoutData) . "\n";
$logData .= "Response Code: " . $httpCode . "\n";
$logData .= "Response Body: " . $response . "\n";
$logData .= "Curl Error: " . $curlError . "\n";
file_put_contents("yoco_debug.log", $logData, FILE_APPEND);

// Handle the response
$responseData = json_decode($response, true);

if (($httpCode === 201 || $httpCode === 200) && isset($responseData['redirectUrl'])) {
    $redirectUrl = $responseData['redirectUrl'];
    $checkoutId = $responseData['id']; // Yoco Checkout ID

    // Insert Pending Payment Record
    $status = 'pending';
    // Note: 'transaction_id' usually stores the final charge ID, but we store checkoutId for now to track it.
    // 'payment_id' might be a better column but we use existing schema.
    $stmt = $conn->prepare("INSERT INTO payments (name, email, phone, amount, transaction_id, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $name, $email, $phone, $amount, $checkoutId, $status);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "redirectUrl" => $redirectUrl]);
    } else {
        echo json_encode(["success" => false, "message" => "Database Error: " . $stmt->error]);
    }
    $stmt->close();

} else {
    $message = $responseData['errorMessage'] ?? ($curlError ?: 'Unknown error from Yoco');
    echo json_encode(["success" => false, "message" => "Yoco Error ($httpCode): " . $message, "debug" => $responseData]);
}

$conn->close();
?>
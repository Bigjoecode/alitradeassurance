<?php
$url = 'https://payments.yoco.com/api/checkouts';
$apiKey = 'sk_test_238374c1M1zYPW6087943229b0b1';

$data = [
    'amount' => 1000, // 10.00 ZAR
    'currency' => 'ZAR',
    'successUrl' => 'http://localhost/success',
    'cancelUrl' => 'http://localhost/cancel'
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_VERBOSE, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo "HTTP Code: " . $httpCode . "\n";
echo "Response: " . $response . "\n";
echo "Error: " . $error . "\n";
?>
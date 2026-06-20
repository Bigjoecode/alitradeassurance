<?php
$conn = require_once 'connection.php'; // Ensure you include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["class_id"])) {
    $class_id = intval($_POST["class_id"]);
    
    $stmt = $conn->prepare("SELECT product_name, price, quantity FROM order_products WHERE class_id = ?");
    $stmt->bind_param("i", $class_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = [
            "product_name" => $row["product_name"],
            "price" => $row["price"],
            "quantity" => $row["quantity"]
        ];
    }

    if (!empty($products)) {
        echo json_encode(["success" => true, "products" => $products]);
    } else {
        echo json_encode(["success" => false]);
    }
    
    $stmt->close();
}
?>


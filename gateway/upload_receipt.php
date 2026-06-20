<?php
header('Content-Type: application/json');
$conn = require_once "../scripts/connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = isset($_POST['orderid']) ? $_POST['orderid'] : '';

    if (empty($order_id)) {
        echo json_encode(['success' => false, 'error' => 'Order ID is required.']);
        exit;
    }

    if (isset($_FILES['receipt']) && $_FILES['receipt']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['receipt']['tmp_name'];
        $fileName = $_FILES['receipt']['name'];
        $fileSize = $_FILES['receipt']['size'];
        $fileType = $_FILES['receipt']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Allowed file extensions
        $allowedExts = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileExtension, $allowedExts)) {
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $uploadFileDir = '../uploads/receipts/';

            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0755, true);
            }

            $dest_path = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {

                // Update database
                $stmt = $conn->prepare("UPDATE orders SET payment_status = 'Success', payment_method = 'Wire Transfer', receipt = ? WHERE order_id = ?");
                $stmt->bind_param("ss", $newFileName, $order_id);

                if ($stmt->execute()) {
                    echo json_encode(['success' => true]);
                } else {
                    echo json_encode(['success' => false, 'error' => 'Database update logic failed: ' . $conn->error]);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Error saving the file to the drive.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Invalid file extension. Please upload JPG, PNG, or PDF files.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'No file uploaded or file upload error occurred. ' . $_FILES['receipt']['error']]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>
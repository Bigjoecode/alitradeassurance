<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "alibaba";
$port = 3307;

// Create connection
$conn = new mysqli($host, $username, $password, "", $port);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS `$database`";
if (!$conn->query($sql)) {
    error_log("Error creating database: " . $conn->error);
    die("Error creating database: " . $conn->error);
}

// Select the database
if (!$conn->select_db($database)) {
    error_log("Failed to select database: " . $conn->error);
    die("Failed to select database: " . $conn->error);
}


// Create admin table if not exists
$sql = "CREATE TABLE IF NOT EXISTS admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'admin',
    status VARCHAR(20) NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL,
    profile_image VARCHAR(255),
    remember_token VARCHAR(64) DEFAULT NULL
)";

if ($conn->query($sql) === FALSE) {
    die("Error creating admin table: " . $conn->error);
}

// Create default admin if not exists
$hashedPassword = password_hash('admin', PASSWORD_DEFAULT);
$checkAdmin = "SELECT * FROM admins WHERE email = 'admin@gmail.com'";
$result = $conn->query($checkAdmin);

// if ($result->num_rows == 0) {
//     $sql = "INSERT INTO admins (firstname, lastname, username, email, password, role, status) 
//             VALUES ('Admin', 'Manager', 'admin', 'admin@gmail.com', '$hashedPassword', 'admin', 'active')";

//     if ($conn->query($sql) === FALSE) {
//         die("Error creating default admin: " . $conn->error);
//     }
// }

// Create products table if not exists
$sql = "CREATE TABLE IF NOT EXISTS order_products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    class_id INT,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    category VARCHAR(100) NOT NULL,
    variation VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    discount_price DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    quantity INT NOT NULL DEFAULT 0,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by INT,
    FOREIGN KEY (created_by) REFERENCES admins(admin_id),
    INDEX idx_product_search (product_name, category),
    FULLTEXT INDEX idx_product_description (description)
)";

if ($conn->query($sql) === FALSE) {
    die("Error creating products table: " . $conn->error);
}

// Create orders table if it doesn't exist
$orders_table = "CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id VARCHAR(100) NOT NULL UNIQUE,
    admin_id INT NULL,
    class_id INT NOT NULL UNIQUE,
    store_name VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address_1 VARCHAR(255) NOT NULL,
    address_2 VARCHAR(255),
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    postcode VARCHAR(20) NOT NULL,
    order_note VARCHAR(255),
    estimated_delivery VARCHAR(255) NOT NULL,
    delivery_fee DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    processing_fee DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    tax DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    total_amount DECIMAL(10,2) NOT NULL,
    payment_method VARCHAR(50) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES admins(admin_id)
)";
$conn->query($orders_table);

// Create Site Info table if not exists
$sql = "CREATE TABLE IF NOT EXISTS site_info (
    info_id VARCHAR(50) NOT NULL UNIQUE DEFAULT '0123abc',
    store_name VARCHAR(255) NOT NULL,
    contact_name VARCHAR(255) NOT NULL,
    site_support_email VARCHAR(100) NOT NULL,
    site_phone VARCHAR(20) NOT NULL,
    head_office VARCHAR(255) NOT NULL,
    store_link VARCHAR(255) NOT NULL,
    pay_now_link VARCHAR(255) NOT NULL DEFAULT '',
    currency VARCHAR(50) NOT NULL DEFAULT 'USD',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}

$payNowLinkColumnCheck = $conn->prepare("
    SELECT COUNT(*) AS column_exists
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = ?
      AND TABLE_NAME = 'site_info'
      AND COLUMN_NAME = 'pay_now_link'
");
$payNowLinkColumnCheck->bind_param("s", $database);
$payNowLinkColumnCheck->execute();
$payNowLinkColumnExists = $payNowLinkColumnCheck->get_result()->fetch_assoc();
$payNowLinkColumnCheck->close();

if (empty($payNowLinkColumnExists['column_exists'])) {
    if ($conn->query("ALTER TABLE site_info ADD COLUMN pay_now_link VARCHAR(255) NOT NULL DEFAULT '' AFTER store_link") === FALSE) {
        die("Error updating site_info table: " . $conn->error);
    }
}
// Create default site info if not exists
$checkSiteInfo = "SELECT * FROM site_info WHERE info_id = '0123abc'";
$result = $conn->query($checkSiteInfo);

if ($result->num_rows < 1) {
    $sql = "INSERT INTO site_info (store_name, contact_name, site_support_email, site_phone, head_office, store_link, pay_now_link, currency) 
            VALUES ('Fuzhou Zhongqian Import And Export Trading Co., Ltd.', 'leo feng', 'fuzhouyiqingya@gmail.com', '86-0591-15659191386', 'Fuzhou Yiqingya E-Commerce Co., Ltd.', '', '', 'USD')";

    if ($conn->query($sql) === FALSE) {
        die("Error creating default site info: " . $conn->error);
    }
}

$sql = "CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    amount DECIMAL(10,2),
    transaction_id VARCHAR(255),
    status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === FALSE) {
    die("Error creating table: " . $conn->error);
}
// Create Account Info table if not exists
$sql = "CREATE TABLE IF NOT EXISTS account_info (
    info_id VARCHAR(50) NOT NULL UNIQUE DEFAULT 'account01',
    account_no VARCHAR(255) NOT NULL,
    swift_code VARCHAR(100) NOT NULL,
    ben_name VARCHAR(255) NOT NULL,
    ben_address VARCHAR(255) NOT NULL,
    bank_name VARCHAR(255) NOT NULL,
    bank_address VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    die("Error creating account info table: " . $conn->error);
}

// Create default account info if not exists
$checkAccountInfo = "SELECT * FROM account_info WHERE info_id = 'account01'";
$resultAccount = $conn->query($checkAccountInfo);

if ($resultAccount->num_rows < 1) {
    $sql = "INSERT INTO account_info (account_no, swift_code, ben_name, ben_address, bank_name, bank_address) 
            VALUES ('310 909 66', 'FMLBUS66XXX', 'REMGI LLC.', '568 E 20th st Long Beach, CA 90806', 'Farmers & Merchants Bank', '302 Pine avenue, Long Beach, CA 90802')";

    if ($conn->query($sql) === FALSE) {
        die("Error creating default account info: " . $conn->error);
    }
}

// Ensure orders table has payment_status and receipt columns
$sql = "SHOW COLUMNS FROM orders LIKE 'payment_status'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $conn->query("ALTER TABLE orders ADD COLUMN payment_status VARCHAR(50) DEFAULT 'Pending'");
}

$sql = "SHOW COLUMNS FROM orders LIKE 'receipt'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $conn->query("ALTER TABLE orders ADD COLUMN receipt VARCHAR(255) NULL");
}

// Return the connection
return $conn;
?>

<?php
session_start();
$conn = require_once 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        header("Location: ../admin-login.php?error=missing_fields");
        exit();
    }
    // Sanitize inputs
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;
    // First check admin table
    $sql = "SELECT * FROM admins WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        
        // Verify admin password
        // if (password_verify($password, $admin['password'])) {
        if ($password == $admin['password']) {
            // Update last login timestamp
            $updateSql = "UPDATE admins SET last_login = NOW() WHERE admin_id = ?";
            $stmt = $conn->prepare($updateSql);
            $stmt->bind_param("i", $admin['admin_id']);
            $stmt->execute();
            // Set admin session variables
            $_SESSION['admin_id'] = $admin['admin_id'];
            $_SESSION['firstname'] = $admin['firstname'];
            $_SESSION['lastname'] = $admin['lastname'];
            $_SESSION['email'] = $admin['email'];
            $_SESSION['is_admin'] = true;
            $_SESSION['logged_in'] = true;
            // Set remember me cookie if checked
            if ($remember) {
                $token = bin2hex(random_bytes(32));
                setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/', null, true, true);
                
                // Store token in database
                $updateToken = "UPDATE admins SET remember_token = ? WHERE admin_id = ?";
                $stmt = $conn->prepare($updateToken);
                $stmt->bind_param("si", $token, $admin['admin_id']);
                $stmt->execute();
            }
            // Redirect to admin dashboard
            header("Location: ../admin/index.php");
            exit();
        } else {
            header("Location: ../admin-login.php?error=Invalid email or passwords");
            exit();
        }
    } else {
        // Check if user exists
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                // Update last login timestamp
                $updateSql = "UPDATE users SET last_login = NOW() WHERE userid = ?";
                $stmt = $conn->prepare($updateSql);
                $stmt->bind_param("i", $user['userid']);
                $stmt->execute();

                // Set session variables
                $_SESSION['user_id'] = $user['userid'];
                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = true;

                // Set remember me cookie if checked
                if ($remember) {
                    $token = bin2hex(random_bytes(32));
                    setcookie('remember_token', $token, time() + (30 * 24 * 60 * 60), '/', null, true, true);
                    // Store token in database
                    $updateToken = "UPDATE users SET remember_token = ? WHERE userid = ?";
                    $stmt = $conn->prepare($updateToken);
                    $stmt->bind_param("si", $token, $user['userid']);
                    $stmt->execute();
                }

                                // After successful login, merge guest cart if exists
                if (isset($_SESSION['guest_id'])) {
                    // Get guest cart items
                    $guest_cart_sql = "SELECT product_id, quantity FROM cart WHERE session_id = ?";
                    $stmt = $conn->prepare($guest_cart_sql);
                    $stmt->bind_param("s", $_SESSION['guest_id']);
                    $stmt->execute();
                    $guest_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

                    foreach ($guest_items as $item) {
                        // Check if product already in user's cart
                        $check_sql = "SELECT cart_id, quantity FROM cart 
                                    WHERE user_id = ? AND product_id = ?";
                        $stmt = $conn->prepare($check_sql);
                        $stmt->bind_param("ii", $_SESSION['user_id'], $item['product_id']);
                        $stmt->execute();
                        $existing_item = $stmt->get_result()->fetch_assoc();

                        if ($existing_item) {
                            // Update quantity
                            $new_quantity = $existing_item['quantity'] + $item['quantity'];
                            $update_sql = "UPDATE cart SET quantity = ? WHERE cart_id = ?";
                            $stmt = $conn->prepare($update_sql);
                            $stmt->bind_param("ii", $new_quantity, $existing_item['cart_id']);
                            $stmt->execute();
                        } else {
                            // Move item to user's cart
                            $move_sql = "UPDATE cart 
                                        SET user_id = ?, session_id = NULL 
                                        WHERE session_id = ? AND product_id = ?";
                            $stmt = $conn->prepare($move_sql);
                            $stmt->bind_param("isi", $_SESSION['user_id'], $_SESSION['guest_id'], $item['product_id']);
                            $stmt->execute();
                        }
                    }

                    // Clear guest session ID
                    unset($_SESSION['guest_id']);
                }

                 // Check if user has items in cart
                $sql = "SELECT COUNT(*) as cart_count FROM cart WHERE user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user['user_id']);
                $stmt->execute();
                $cart_result = $stmt->get_result();
                $cart_count = $cart_result->fetch_assoc()['cart_count'];

                // Redirect based on cart status
                if ($cart_count > 0) {
                    header("Location: ../cart.php");
                }elseif(isset($_SESSION['plan'])){
                    header("Location: ../checkout2.php");
                } else {
                    header("Location: ../user/dashboard.php");
                }
                exit();
                
            } else {
                header("Location: ../admin-login.php?error=Invalid email or password");
                exit();
            }
        } else {
            header("Location: ../admin-login.php?error=Invalid email or password");
            exit();
        }
    }
}
$conn->close();
?>

<?php 
include 'header.php';

// Check if order ID is provided
// Check if connection.php is included
if (!isset($conn)) {
    require_once '../scripts/connection.php';
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: all-checkout.php");
    exit();
}

$order_id = (int)$_GET['id'];

try {
    // Get order details
    $sql = "SELECT o.*
            FROM orders o
            WHERE o.order_id = ?";
            
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $order = $stmt->get_result()->fetch_assoc();

    if (!$order) {
        throw new Exception("Details not found");
    }

} catch (Exception $e) {
    header("Location: all-checkout.php");
    exit();
}
?>
        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Manage Details</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.html">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashboard</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                                    </li>
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Checkout</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Manage details</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" action="../scripts/manage-checkout-script.php" method="POST">
                                <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                                <div class="add-product__row">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                        <div class="col-12 col-lg-12 form-group form-group--lg">
                                                <label class="form-label">Store Name (Supplier)</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="store_name" 
                                                           value="<?php echo htmlspecialchars($order['store_name']); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 form-group form-group--lg">
                                                <label class="form-label">First Name and Last Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="name" 
                                                           value="<?php echo htmlspecialchars($order['name']); ?>">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 form-group form-group--lg">
                                                <label class="form-label">Email </label>
                                                <div class="input-group">
                                                    <input class="input" type="email" name="email" 
                                                           value="<?php echo htmlspecialchars($order['email']); ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Telephone</label>
                                                <div class="input-group">
                                                    <input class="input" type="tel" value="<?php echo htmlspecialchars($order['phone']); ?>" name="phone" placeholder="Telephone">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Address Line 1</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" value="<?php echo htmlspecialchars($order['address_1']); ?>" name="address_1" placeholder="Address Line 1">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Address Line 2 (Optional)</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" value="<?php echo htmlspecialchars($order['address_2']); ?>" name="address_2" placeholder="Address Line 2">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Country</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" value="<?php echo htmlspecialchars($order['country']); ?>" name="country" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">State</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" value="<?php echo htmlspecialchars($order['state']); ?>" name="state" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">City</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" value="<?php echo htmlspecialchars($order['city']); ?>" name="city" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Estimated Delivery</label>
                                                <div class="input-group">
                                                    <input class="input" type="datetime-local" name="delivery_date" 
                                                        value="<?php echo $order['estimated_delivery'] ? date('Y-m-d\TH:i:s', strtotime($order['estimated_delivery'])) : ''; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Date Created</label>
                                                <div class="input-group">
                                                    <input class="input" type="datetime-local" name="created_at" 
                                                        value="<?php echo date('Y-m-d\TH:i:s', strtotime($order['created_at'])); ?>" >
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Total Amount</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend">
                                                        <span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input class="input" type="number" name="total_amount" 
                                                           min="0" max="999999999" step="0.01"
                                                           value="<?php echo $order['total_amount']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Products Class Number</label>
                                                        <div class="input-group">
                                                            <input class="input" type="number" value="<?php echo htmlspecialchars($order['class_id']); ?>" name="class_id" id="class_id" placeholder="Enter Class Number" required>
                                                        </div>
                                                    </div>

                                            <div class="add-product__submit">
                                                <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary">Update Checkout</button>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


    
    <script src="js/photoswipe/photoswipe-lightbox.esm.min.js" type="module"></script>
    <script src="js/photoswipe/photoswipe.esm.min.js" type="module"></script>
    <script src="js/gsap/gsap.min.js"></script>
    <script src="js/gsap/ScrollToPlugin.min.js"></script>
    <script src="js/gsap/ScrollTrigger.min.js"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/photoswipe/gallery.js" type="module"></script>

    
</body>

</html>
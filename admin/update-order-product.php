<?php 
include 'header.php';

// Get product ID from URL
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$product_id) {
    header("Location: products.php");
    exit();
}

// Fetch product details
// $conn = require_once '../scripts/connection.php';
$sql = "SELECT * FROM order_products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    header("Location: order_products.php?error=Order not found!");
    exit();
}
?>

        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Update Order Product</h1>
                </div>

                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" action="../scripts/update-order-product-script.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                
                                <div class="add-product__row">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <!-- Current Image Display -->
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Current Image</label>
                                                <div class="media-item media-item--medium">
                                                    <img class="media-item__thumb" style="width: 100px; height: auto;" src="../uploads/products/<?php echo $product['image']; ?>" 
                                                        alt="<?php echo $product['name']; ?>">
                                                </div>
                                            </div>

                                            <!-- New Image Upload -->
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Change Image</label>
                                                <div class="input-group">
                                                    <input class="input" type="file" name="image" accept="image/*">
                                                </div>
                                            </div>

                                            <!-- Product Name -->
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Product Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="name" 
                                                        value="<?php echo htmlspecialchars($product['product_name']); ?>">
                                                </div>
                                            </div>

                                            <!-- Description -->
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <div class="input-editor">
                                                    <textarea name="description" rows="4" style="width: 100%; background-color: #f8fafb; border: none; border-radius: 5px; padding: 10px;" ><?php echo htmlspecialchars($product['description']); ?></textarea>
                                                </div>
                                            </div>

                                            <!-- Category -->
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Category</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" placeholder="Enter Category name">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Variation </label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="variation" placeholder="Enter Product Variation" value="<?php echo htmlspecialchars($product['variation']); ?>">
                                                </div>
                                            </div>
                                            <!-- Price -->
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Price</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend">
                                                        <span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input class="input" type="number" name="price" min="0" max="999999999" 
                                                        step="0.01" value="<?php echo $product['price']; ?>" >
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Discount Price</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend">
                                                        <span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input class="input" type="number" name="discount_price" min="0" max="999999999" 
                                                        step="0.01" value="<?php echo $product['discount_price']; ?>">
                                                </div>
                                            </div>

                                            <!-- Quantity -->
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Quantity</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend">
                                                        <span class="input-group__symbol">#</span>
                                                    </div>
                                                    <input class="input" type="number" name="quantity" min="0"  
                                                        value="<?php echo $product['quantity']; ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label" style="margin-bottom: 0.2rem;">Class Number</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">#</span>
                                                    </div>
                                                    <input class="input" type="number" value="<?php echo $product['class_id']; ?>" name="class_id" min="0" placeholder="Class Number">
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="add-product__submit">
                                                <div class="modal__footer-button">
                                                    <button type="submit" class="button button--primary button--block" 
                                                            style="float: right; right: 0;">
                                                        <span class="button__text">Update</span>
                                                    </button>
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
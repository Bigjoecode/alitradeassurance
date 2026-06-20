<?php 
include 'header.php';

// Get cart items and calculate total
// $sql = "SELECT c.*, p.name, p.price, p.image 
//         FROM cart c 
//         JOIN products p ON c.product_id = p.product_id 
//         WHERE c.admin_id = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $_SESSION['admin_id']);
// $stmt->execute();
// $cart_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// $total = 0;
// foreach ($cart_items as $item) {
//     $total += $item['price'] * $item['quantity'];
// }

// If no items in cart, redirect to cart page
// if (empty($cart_items)) {
//     header("Location: cart.php");
//     exit();
// }
?>
        <style>
            /* @media (min-width:992px){
                .summary{
                    position: relative;
                    overflow: hidden;
                    overflow-x: hidden;
                }
                .summary-card{
                    position: fixed;
                    width: auto;

                }
            } */
            @media (max-width:992px){
                .summary{
                    margin-top: 30px;
                }
            }
        </style>
        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Checkout</h1>
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
                                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>User</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                                    </li>
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Cart</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Checkout</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8">
                        <div class="card add-product card--content-center">
                            <div class="card__wrapper">
                                <div class="card__container">
                                    <div class="page-header">
                                        <h1 class="page-header__title">Billing Information</h1>
                                    </div>
                                    <form class="add-product__form" action="../scripts/process_order.php" method="POST">
                                        <div class="add-product__ro">
                                            <div class="add-product__right">
                                                <div class="row row--md">
                                                <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Store Name (Supplier)</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="store_name" placeholder="Enter Supplier Name" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Order Number (Optional)</label>
                                                        <div class="input-group">
                                                            <input class="input" type="number" name="order_id" placeholder="Enter order number">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">First name and Last name</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="name" placeholder="First name and Last name" required>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">E-Mail (Optional)</label>
                                                        <div class="input-group">
                                                            <input class="input" type="email" name="email" placeholder="E-Mail">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Telephone</label>
                                                        <div class="input-group">
                                                            <input class="input" type="tel" name="phone" placeholder="Telephone" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Address Line 1</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="address_1" placeholder="Address Line 1" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Address Line 2 (Optional)</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="address_2" placeholder="Address Line 2">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Country</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="country" placeholder="Country" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">State</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="state" placeholder="State" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">City</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="city" placeholder="City" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Zip code</label>
                                                        <div class="input-group">
                                                            <input class="input" type="text" name="postcode" placeholder="Postcode" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 form-group form-group--lg">
                                                        <label class="form-label">Order Note (Optional)</label>
                                                        <div class="input-edito">
                                                            <textarea name="order_note" placeholder="Order Note" cols="30" style="width: 100%; background-color: #f8fafb; padding: 10px; border: none; outline: none;" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Shipping Fee</label>
                                                        <div class="input-group input-group--prepend">
                                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                            </div>
                                                            <input class="input" type="text" name="delivery_fee" value="0" id="delivery_fee" placeholder="Delivery Fee" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Processing Fee</label>
                                                        <div class="input-group input-group--prepend">
                                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                            </div>
                                                            <input class="input" type="text" name="processing_fee" value="0" id="processing_fee" placeholder="Processing Fee" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Tax Amount</label>
                                                        <div class="input-group input-group--prepend">
                                                            <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                            </div>
                                                            <input class="input" type="text" value="0" name="tax" id="tax" placeholder="Enter Tax" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Estimated Delivery Date</label>
                                                        <div class="input-group">
                                                            <input class="input" type="datetime-local" name="delivery_date" placeholder="Estimated Delivery Date" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 form-group form-group--lg">
                                                        <label class="form-label">Products Class Number</label>
                                                        <div class="input-group">
                                                            <input class="input" type="number" name="class_id" id="class_id" placeholder="Enter Class Number" required>
                                                        </div>
                                                    </div>
                                                    <input class="input" type="hidden" name="payment_method"  value="card">
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 summary">
                        <div class="customer-account__item-2 customer-shipping customer-card card summary-card">
                            <div class="card__wrapper">
                                <div class="card__container">
                                    <div class="card__header">
                                        <div class="card__header-left">
                                            <h3 class="card__header-title">Order Summary</h3>
                                        </div>
                                    </div>
                                    <div class="card__body">
                                        <ul class="card-list">
                                            <li class="row row--xs">
                                                <div class="card-list__title product_detail col-auto">Product Name (Qty)</div>
                                                <div class="card-list__value product_price col">$Price * Qty</div>
                                            </li>

                                            <div style="border: 1px solid #dbd8d8; margin: 10px 0;"></div>

                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">Subtotal</div>
                                                <div class="card-list__value col subtotal">$0</div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto">TAX (0%):</div>
                                                <div class="card-list__value col tax">$0</div>
                                            </li>
                                            <li class="row row--xs">
                                                <div class="card-list__title col-auto"><b>Grand Total</b></div>
                                                <div class="card-list__value col grand-total"><b>$0</b></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-product__submi mt-3">
                                        <div class="modal__footer-button">
                                            <button type="submit" class="button button--primary button--block" style="float: right;">
                                                <span class="button__text">Continue to Order Review</span>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let timeout = null; 

    function calculateGrandTotal(subtotal) {
        let deliveryFee = parseFloat($("#delivery_fee").val()) || 0;
        let processingFee = parseFloat($("#processing_fee").val()) || 0;
        let tax = parseFloat($("#tax").val()) || 0;

        let grandTotal = subtotal + tax + deliveryFee + processingFee;

        $(".subtotal").html("$" + subtotal.toFixed(2));
        $(".tax").html("$" + tax.toFixed(2));
        $(".grand-total").html("$" + grandTotal.toFixed(2));
    }

    $("#class_id").on("input", function() {
        clearTimeout(timeout);
        let classId = $(this).val().trim();

        if (classId !== "") {
            timeout = setTimeout(function() {
                $.ajax({
                    url: "../scripts/checkout_fetch_product.php",
                    type: "POST",
                    data: { class_id: classId },
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            let subtotal = 0;
                            let productHtml = "";
                            
                            response.products.forEach(product => {
                                let productSubtotal = product.price * product.quantity;
                                subtotal += productSubtotal;

                                productHtml += `
                                    <li class="row row--xs">
                                        <div class="card-list__title product_detail col-auto">${product.product_name} (${product.quantity}x)</div>
                                        <div class="card-list__value product_price col">$${product.price} * ${product.quantity}</div>
                                    </li>
                                `;
                            });

                            $(".product_details").html(productHtml);
                            calculateGrandTotal(subtotal);
                        } else {
                            alert("No products found.");
                        }
                    },
                    error: function() {
                        alert("Error fetching product details.");
                    }
                });
            }, 3000); // Wait 3 seconds before fetching
        }
    });

    $("#delivery_fee, #processing_fee, #tax").on("input", function() {
        let subtotal = parseFloat($(".subtotal").text().replace("$", "")) || 0;
        calculateGrandTotal(subtotal);
    });
});

</script>

</body>




</html>
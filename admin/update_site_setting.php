<?php include 'header.php'; 
// $conn = require_once '../scripts/connection.php';
?>
<main class="page-content">
    <div class="container container--flex">
        <div class="page-header">
            <h1 class="page-header__title">Update Site Info</h1>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="col pl-0">
                                <h3 class="card__title mb-0">Site Info</h3>
                            </div>
                            <?php
                            // Fetch site data
                            $info_id = isset($_GET['id']) ? $_GET['id'] : '';
                            $sql = "SELECT * FROM site_info WHERE info_id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $info_id);
                            $stmt->execute();
                            $siteInfo = $stmt->get_result()->fetch_assoc();
                            if (!$siteInfo) {
                                header("Location: site-settings.php");
                                exit();
                            }
                            ?>
                            <form class="add-product__form" action="../scripts/update-site-script.php" method="POST" >
                                <input type="hidden" name="info_id" value="<?php echo $info_id; ?>">
                                <div class="add-product">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Store Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="site_name" 
                                                           value="<?php echo htmlspecialchars($siteInfo['store_name']); ?>" 
                                                           placeholder="Enter Site Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Contact Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="contact_name" 
                                                           value="<?php echo htmlspecialchars($siteInfo['contact_name']); ?>" 
                                                           placeholder="Enter Contact Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Store Email</label>
                                                <div class="input-group">
                                                    <input class="input" type="email" name="site_email" 
                                                           value="<?php echo htmlspecialchars($siteInfo['site_support_email']); ?>" 
                                                           placeholder="Site Email" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Store Phone</label>
                                                <div class="input-group">
                                                    <input class="input" type="tel" name="site_phone" 
                                                           value="<?php echo (!empty($siteInfo['site_phone'])) ? $siteInfo['site_phone'] : ''; ?>" 
                                                           placeholder="Site Phone" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Office Address</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="head_office" 
                                                           value="<?php echo htmlspecialchars($siteInfo['head_office']); ?>" 
                                                           placeholder="Head Office" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Store Web Link</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="store_link" 
                                                           value="<?php echo htmlspecialchars($siteInfo['store_link']); ?>" 
                                                           placeholder="Store Web Link" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Pay Now Redirect Link</label>
                                                <div class="input-group">
                                                    <input class="input" type="url" name="pay_now_link"
                                                           value="<?php echo htmlspecialchars($siteInfo['pay_now_link'] ?? ''); ?>"
                                                           placeholder="https://example.com/payment">
                                                </div>
                                            </div>
                                            <div class="add-product__submit">
                                                <div class="modal__footer-button">
                                                    <button type="submit" name="update_info" class="button button--primary button--block">
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

        </div>
    </div>
</main>

<?php $conn->close(); ?>

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

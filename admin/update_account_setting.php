<?php include 'header.php';
?>
<main class="page-content">
    <div class="container container--flex">
        <div class="page-header">
            <h1 class="page-header__title">Update Account Info</h1>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="col pl-0">
                                <h3 class="card__title mb-0">Wire Transfer Details</h3>
                            </div>
                            <?php
                            $info_id = isset($_GET['id']) ? $_GET['id'] : 'account01';
                            $sql = "SELECT * FROM account_info WHERE info_id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $info_id);
                            $stmt->execute();
                            $accInfo = $stmt->get_result()->fetch_assoc();
                            if (!$accInfo) {
                                header("Location: account-settings.php");
                                exit();
                            }
                            ?>
                            <form class="add-product__form" action="../scripts/update-account-script.php" method="POST">
                                <input type="hidden" name="info_id" value="<?php echo htmlspecialchars($info_id); ?>">
                                <div class="add-product">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Beneficiary Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="ben_name"
                                                        value="<?php echo htmlspecialchars($accInfo['ben_name']); ?>"
                                                        placeholder="Enter Beneficiary Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Beneficiary Address</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="ben_address"
                                                        value="<?php echo htmlspecialchars($accInfo['ben_address']); ?>"
                                                        placeholder="Enter Beneficiary Address" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Bank Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="bank_name"
                                                        value="<?php echo htmlspecialchars($accInfo['bank_name']); ?>"
                                                        placeholder="Enter Bank Name" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Bank Address</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="bank_address"
                                                        value="<?php echo htmlspecialchars($accInfo['bank_address']); ?>"
                                                        placeholder="Enter Bank Address" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Account No</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="account_no"
                                                        value="<?php echo htmlspecialchars($accInfo['account_no']); ?>"
                                                        placeholder="Account Number" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">SWIFT Code</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="swift_code"
                                                        value="<?php echo htmlspecialchars($accInfo['swift_code']); ?>"
                                                        placeholder="SWIFT Code" required>
                                                </div>
                                            </div>

                                            <div class="add-product__submit mt-3">
                                                <div class="modal__footer-button">
                                                    <button type="submit" name="update_account"
                                                        class="button button--primary button--block">
                                                        <span class="button__text">Update Account</span>
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
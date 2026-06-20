<?php include 'header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Password Settings</h1>
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
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Admin</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">password</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="col pl-0">
                                <h3 class="card__title mb-3">Change password</h3>
                            </div>
                            <form class="add-product__form" action="../scripts/admin-change-password.php" method="POST">
    <div class="add-product__row">
        <div class="add-product__right">
            <div class="row row--md">
                <!-- Old Password -->
                <div class="col-12 form-group form-group--lg">
                    <label class="form-label">Old Password</label>
                    <div class="input-group" style="position: relative;">
                        <input class="input" type="password" name="old_password" id="oldPassword" placeholder="Enter old password" required style="padding-right: 40px;">
                        <i class="fas fa-eye" id="toggleOldPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #555;"></i>
                    </div>
                </div>

                <!-- New Password -->
                <div class="col-12 form-group form-group--lg">
                    <label class="form-label">New Password</label>
                    <div class="input-group" style="position: relative;">
                        <input class="input" type="password" name="new_password" id="newPassword" placeholder="Enter new password" required style="padding-right: 40px;">
                        <i class="fas fa-eye" id="toggleNewPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #555;"></i>
                    </div>
                </div>

                <!-- Confirm New Password -->
                <div class="col-12 form-group form-group--lg">
                    <label class="form-label">Confirm New Password</label>
                    <div class="input-group" style="position: relative;">
                        <input class="input" type="password" name="confirm_password" id="confirmPassword" placeholder="Confirm new password" required style="padding-right: 40px;">
                        <i class="fas fa-eye" id="toggleConfirmPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #555;"></i>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-12 form-group form-group--lg">
                    <button type="submit" name="change_password" class="button button--primary button--block">
                        <span class="button__text">Change Password</span>
                    </button>
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

<script>
    // Add toggle functionality for each password field
    const togglePasswordVisibility = (toggleButtonId, passwordFieldId) => {
        const toggleButton = document.getElementById(toggleButtonId);
        const passwordField = document.getElementById(passwordFieldId);

        toggleButton.addEventListener("click", (event) => {
            event.stopPropagation(); // Prevent input focus
            const isPasswordHidden = passwordField.type === "password";
            passwordField.type = isPasswordHidden ? "text" : "password";
            toggleButton.classList.toggle("fa-eye");
            toggleButton.classList.toggle("fa-eye-slash");
        });
    };

    // Apply functionality to all password inputs
    togglePasswordVisibility("toggleOldPassword", "oldPassword");
    togglePasswordVisibility("toggleNewPassword", "newPassword");
    togglePasswordVisibility("toggleConfirmPassword", "confirmPassword");
</script>

</html>
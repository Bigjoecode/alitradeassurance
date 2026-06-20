<?php 
include 'header.php';
?>
        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Update Profile</h1>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Update Profile</span>
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
                                <h3 class="card__title mb-3">My Bio</h3>
                            </div>
                            <form class="add-product__form" action="../scripts/admin-profile-script.php" method="POST" enctype="multipart/form-data">
                                <div class="add-product__row">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Profile Image</label>
                                                <div class="input-group">
                                                    <input class="input" type="file" name="profile_image" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="firstname" 
                                                        value="<?php echo htmlspecialchars($admin['firstname']); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Last Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="lastname" 
                                                        value="<?php echo htmlspecialchars($admin['lastname']); ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Email</label>
                                                <div class="input-group">
                                                    <input class="input" type="email" name="email" 
                                                        value="<?php echo htmlspecialchars($admin['email']); ?>" required>
                                                </div>
                                            </div>
                                           
                                            <div class="col-12 form-group form-group--lg">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update Profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    <!--form-->
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
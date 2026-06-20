<?php include 'header.php'; ?>

        <main class="page-content">
            <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Add Product to order</h1>
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
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Products</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Product</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" action="../scripts/add-product-script.php" method="POST" enctype="multipart/form-data">
                                <div class="add-product__row">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Product Image</label>
                                                <div class="input-group">
                                                    <input class="input" type="file" name="image" accept="image/jpeg,image/png,image/gif,image/webp" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Product Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="name" placeholder="Enter product name" required>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description (Optional)</label>
                                                <div class="input-editor">
                                                    <textarea name="description" placeholder="Provide Description" rows="3" style="width: 100%; background-color: #f8fafb; border: none; border-radius: 5px; padding: 10px;" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Category (Optional)</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="category" placeholder="Enter Category name">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Variation </label><br>
                                                <label class="form-label" style="color:#0081ff; font-size:10px;">Variation format -| <span style="color:#ff6600"> Color: Pink-10.5CM, EUR Size: 35 </span></label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="variation" placeholder="Enter Product Variation" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Price</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input class="input" type="number" name="price" min="0" max="999999999" step="0.01" placeholder="Enter price" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Discount Price (Optional)</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input class="input" type="number" name="discount_price" min="0" max="999999999" step="0.01" placeholder="Enter price">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label">Quantity</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">#</span>
                                                    </div>
                                                    <input class="input" type="number" name="quantity" min="0"  placeholder="Enter quantity" required>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 form-group form-group--lg">
                                                <label class="form-label" style="margin-bottom: 0.2rem;">Class Number (i.e 1)</label><br>
                                                <label class="form-label" style="color:red; font-size:10px; margin-bottom: 0.2rem;">Note: All product of same order shold have same class number</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">#</span>
                                                    </div>
                                                    <input class="input" type="number" name="class_number" min="0" placeholder="Class Number" required>
                                                </div>
                                            </div>

                                            <div class="add-product__submit">
                                                <div class="modal__footer-button">
                                                    <button type="submit" class="button button--primary button--block" style="float: right; right: 0;"><span class="button__text">Create</span>
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
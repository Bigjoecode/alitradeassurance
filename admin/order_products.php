<?php include "header.php"; ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Products</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link"
                                            href="#"><span>Home</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Order Products</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="toolbox">
                    <div class="toolbox__row row gutter-bottom-xs">
                        
                        <div class="toolbox__right col-12 col-lg-auto">
                            <div class="toolbox__right-row row row--xs flex-nowrap">
                                <div class="col col-lg-auto">
                                    <form class="toolbox__search" method="GET">
                                        <div class="input-group input-group--white input-group--prepend">
                                            <div class="input-group__prepend">
                                                <svg class="icon-icon-search">
                                                    <use xlink:href="#icon-search"></use>
                                                </svg>
                                            </div>
                                            <input class="input" type="text" name="search" placeholder="Search product" 
                                                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-wrapper">
                    <div class="table-wrapper__content table-products table-collapse scrollbar-thin scrollbar-visible"
                        data-simplebar>
                        <table class="table table--lines">
                            <colgroup>
                                <col class="colgroup-1">
                                <col class="colgroup-2">
                                <col class="colgroup-3">
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead class="table__header">
                                <tr class="table__header-row">
                                    <th>
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox"
                                                    data-checkbox-all="product"><span class="checkbox__marker"><span
                                                        class="checkbox__marker-icon"><svg viewBox="0 0 14 12">
                                                            <path
                                                                d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z" />
                                                        </svg></span></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th class="d-none d-lg-table-cell"><span>Class ID</span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Product Name</span><span
                                            class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Category</span><span
                                            class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Variations</span><span
                                            class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Price</span><span
                                            class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort d-none d-lg-table-cell"><span
                                            class="align-middle">Date Created</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $conn = require_once '../scripts/connection.php';

                                // Number of records per page
                                $records_per_page = 10;

                                // Get current page number from URL, default to 1 if not set
                                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                $offset = ($page - 1) * $records_per_page;

                                // Initialize the search condition
                                $search_condition = "";
                                $params = [];
                                $types = "";

                                // If search parameter exists, add it to the query
                                if (isset($_GET['search']) && !empty($_GET['search'])) {
                                    $search = '%' . $_GET['search'] . '%';
                                    $search_condition = " WHERE product_name LIKE ? OR category LIKE ? OR description LIKE ?";
                                    $params = [$search, $search, $search];
                                    $types = "sss";
                                }

                                // Get total number of records with search condition
                                $total_sql = "SELECT COUNT(*) as count FROM order_products" . $search_condition;
                                if (!empty($params)) {
                                    $stmt = $conn->prepare($total_sql);
                                    $stmt->bind_param($types, ...$params);
                                    $stmt->execute();
                                    $total_result = $stmt->get_result();
                                } else {
                                    $total_result = $conn->query($total_sql);
                                }
                                $total_records = $total_result->fetch_assoc()['count'];
                                $total_pages = ceil($total_records / $records_per_page);

                                // Modify the main query to include search condition and pagination
                                $sql = "SELECT * FROM order_products" . $search_condition . " ORDER BY created_at DESC LIMIT ? OFFSET ?";
                                $params[] = $records_per_page;
                                $params[] = $offset;
                                $types .= "ii";

                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param($types, ...$params);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                ?>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span
                                                    class="checkbox__marker"><span class="checkbox__marker-icon"><svg
                                                            viewBox="0 0 14 12">
                                                            <path
                                                                d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z" />
                                                        </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="d-none d-lg-table-cell table__td"><span class="text-grey">#<?php echo $row['class_id']; ?></span>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">FB</div>
                                                <img class="media-item__thumb" src="../uploads/products/<?php echo $row['image']; ?>"
                                                    alt="<?php echo $row['name']; ?>">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="#"><?php echo $row['product_name']; ?></a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td"><span class="text-grey"><?php echo $row['category']; ?></span>
                                    </td>
                                    <td class="table__td"><span class="text-grey"><?php echo $row['variation']; ?></span>
                                    </td>
                                    <td class="table__td"><span>$<?php echo number_format($row['price'], 2); ?></span>
                                    </td>
                                    <td class="d-none d-lg-table-cell table__td"><span
                                            class="text-grey"><?php echo date('d.m.Y', strtotime($row['created_at'])); ?></span>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a
                                                                class="dropdown-items__link" href="update-order-product.php?id=<?php echo $row['product_id']; ?>"><span
                                                                    class="dropdown-items__link-icon">
                                                                    <svg class="icon-icon-task-notes">
                                                                        <use xlink:href="#icon-task-notes"></use>
                                                                    </svg></span>Edit</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a
                                                                class="dropdown-items__link" href="../scripts/delete-order-product.php?id=<?php echo $row['product_id']; ?>"><span
                                                                    class="dropdown-items__link-icon">
                                                                    <svg class="icon-icon-trash">
                                                                        <use xlink:href="#icon-trash"></use>
                                                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='8' class='text-center'>No products found</td></tr>";
                                }
                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="table-wrapper__footer">
                        <div class="row">
                            <div class="table-wrapper__show-result col text-grey">
                                <span class="d-none d-sm-inline-block">Showing</span> 
                                <?php echo $offset + 1; ?> to <?php echo min($offset + $records_per_page, $total_records); ?> 
                                <span class="d-none d-sm-inline-block">of <?php echo $total_records; ?> items</span>
                            </div>
                            <div class="table-wrapper__pagination col-auto">
                                <?php if($total_pages > 1): ?>
                                <ol class="pagination">
                                    <!-- Previous page link -->
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--prev <?php echo ($page <= 1) ? 'disabled' : ''; ?>" 
                                           href="<?php echo ($page <= 1) ? '#' : '?page='.($page-1); ?>">
                                            <svg class="icon-icon-keyboard-left">
                                                <use xlink:href="#icon-keyboard-left"></use>
                                            </svg>
                                        </a>
                                    </li>

                                    <?php
                                    // Calculate range of page numbers to show
                                    $range = 2;
                                    $initial_num = $page - $range;
                                    $condition_limit_num = ($page + $range) + 1;

                                    for($i = 1; $i <= $total_pages; $i++):
                                        if($i == 1 || $i == $total_pages || ($i >= $initial_num && $i < $condition_limit_num)):
                                    ?>
                                        <li class="pagination__item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                            <a class="pagination__link" href="?page=<?php echo $i; ?><?php echo isset($_GET['search']) ? '&search=' . urlencode($_GET['search']) : ''; ?>">
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                        <?php
                                        // Add dots if there's a gap
                                        if($i == 1 && $initial_num > 2): ?>
                                            <li class="pagination__item pagination__item--dots">...</li>
                                        <?php endif;
                                        if($i < $total_pages && $i == $condition_limit_num - 1 && $condition_limit_num < $total_pages): ?>
                                            <li class="pagination__item pagination__item--dots">...</li>
                                        <?php endif;
                                        endif;
                                    endfor;
                                    ?>

                                    <!-- Next page link -->
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--next <?php echo ($page >= $total_pages) ? 'disabled' : ''; ?>" 
                                           href="<?php echo ($page >= $total_pages) ? '#' : '?page='.($page+1); ?>">
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ol>
                                <?php endif; ?>
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
    
    <script>
    document.querySelectorAll('a[href*="delete-product.php"]').forEach(link => {
        link.addEventListener('click', function(e) {
            if (!confirm('Are you sure you want to delete this product?')) {
                e.preventDefault();
            }
        });
    });
    </script>
</body>


</html>
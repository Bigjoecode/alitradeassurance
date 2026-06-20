<?php 
include 'header.php';

// Check if connection.php is included
if (!isset($conn)) {
    $conn = require_once '../scripts/connection.php';
}

// Check if database connection is successful
if (!$conn) {
    die("Database connection failed");
}

// Pagination settings
$records_per_page = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

// Search functionality
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$search_condition = '';
if ($search) {
    $search_condition = " AND (
        o.order_id LIKE '%$search%' OR 
        o.first_name LIKE '%$search%' OR 
        o.last_name LIKE '%$search%' OR 
        o.email LIKE '%$search%'
    )";
}

try {
    // Get total records for pagination
    $total_query = "SELECT COUNT(*) as count FROM orders o
                    WHERE 1=1 $search_condition";
    $total_result = $conn->query($total_query);
    if (!$total_result) {
        throw new Exception("Error executing total count query: " . $conn->error);
    }
    $total_records = $total_result->fetch_assoc()['count'];
    $total_pages = ceil($total_records / $records_per_page);

    // Get orders with user details
    $sql = "SELECT o.*
            FROM orders o
            WHERE 1=1 $search_condition
            ORDER BY o.created_at DESC 
            LIMIT $offset, $records_per_page";

    $orders = $conn->query($sql);
    if (!$orders) {
        throw new Exception("Error executing orders query: " . $conn->error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    die("An error occurred while fetching orders. Please try again later.");
}
?>

<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">All Checkout</h1>
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
                            <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Order</span>
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
                                    <input class="input" type="text" name="search" 
                                           value="<?php echo htmlspecialchars($search); ?>" 
                                           placeholder="Search orders">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper">
            <div class="table-wrapper__content table-orders table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
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
                        <col>
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th class="d-none d-lg-table-cell"><span>Order ID</span></th>
                            <th class="table__th-sort"><span class="align-middle">Customer Name</span></th>
                            <th class="table__th-sort"><span class="align-middle">Email</span></th>
                            <th class="table__th-sort"><span class="align-middle">Total</span></th>
                            <th class="table__th-sort"><span class="align-middle">Tax</span></th>
                            <th class="table__th-sort"><span class="align-middle">Estimated Delivery</span></th>
                            <th class="table__th-sort"><span class="align-middle">Delivery Fee</span></th>
                            <th class="table__th-sort"><span class="align-middle">Processing Fee</span></th>
                        
                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($orders->num_rows > 0): ?>
                            <?php while($order = $orders->fetch_assoc()): ?>
                                <tr class="table__row">
                                    <td class="d-none d-lg-table-cell table__td">
                                        <span class="text-grey">#<?php echo $order['order_id']; ?></span>
                                    </td>
                                    <td class="table__td">
                                        <?php echo htmlspecialchars($order['name']); ?>
                                    </td>
                                    <td class="table__td">
                                        <?php echo htmlspecialchars($order['email']); ?>
                                    </td>
                                    <td class="table__td">
                                        <span>$<?php echo number_format($order['total_amount'], 2); ?></span>
                                    </td>
                                    <td class="table__td">
                                        <span>$<?php echo number_format($order['tax'], 2); ?></span>
                                    </td>
                                    <td class="table__td text-nowrap">
                                        <span class="text-grey">
                                            <?php echo date('d.m.Y', strtotime($order['estimated_delivery'])); ?>
                                        </span>
                                        <?php echo date('h:i A', strtotime($order['estimated_delivery'])); ?>
                                    </td>
                                    <td class="table__td">
                                        <span>$<?php echo number_format($order['delivery_fee'], 2); ?></span>
                                    </td>
                                    <td class="table__td">
                                        <span>$<?php echo number_format($order['processing_fee'], 2); ?></span>
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
                                                        <li class="dropdown-items__item">
                                                            <a class="dropdown-items__link" href="../payment/detail.php?orderid=<?php echo $order['order_id']; ?>">
                                                                <span class="dropdown-items__link-icon">
                                                                    <svg class="icon-icon-view">
                                                                        <use xlink:href="#icon-view"></use>
                                                                    </svg>
                                                                </span>
                                                                Details
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-items__item">
                                                            <a class="dropdown-items__link" href="manage-checkout-detail.php?id=<?php echo $order['order_id']; ?>">
                                                                <span class="dropdown-items__link-icon">
                                                                    <svg class="icon-icon-task-notes">
                                                                        <use xlink:href="#icon-task-notes"></use>
                                                                    </svg>
                                                                </span>
                                                                Manage
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a href="../scripts/delete-order.php?id=<?php echo $order['order_id']; ?>" 
                                                            onclick="return confirm('Are you sure you want to delete this order?');"
                                                            class="dropdown-items__link">
                                                                <span class="dropdown-items__link-icon">
                                                                    <svg class="icon-icon-trash">
                                                                        <use xlink:href="#icon-trash"></use>
                                                                    </svg>
                                                                </span>
                                                                Delete
                                                            </a>
                                                        </li> 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">No checkout detail found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="table-wrapper__footer">
                <div class="row">
                    <div class="table-wrapper__show-result col text-grey">
                        Showing <?php echo $offset + 1; ?> to <?php echo min($offset + $records_per_page, $total_records); ?> 
                        of <?php echo $total_records; ?> detail
                    </div>
                    <div class="table-wrapper__pagination col-auto">
                        <?php if ($total_pages > 1): ?>
                            <ol class="pagination">
                                <?php if ($page > 1): ?>
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--prev" 
                                           href="?page=<?php echo ($page - 1); ?><?php echo $search ? "&search=$search" : ''; ?>">
                                            <svg class="icon-icon-keyboard-left">
                                                <use xlink:href="#icon-keyboard-left"></use>
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                $start_page = max(1, $page - 2);
                                $end_page = min($total_pages, $start_page + 4);
                                if ($end_page - $start_page < 4) {
                                    $start_page = max(1, $end_page - 4);
                                }
                                
                                for ($i = $start_page; $i <= $end_page; $i++):
                                ?>
                                    <li class="pagination__item <?php echo $i == $page ? 'active' : ''; ?>">
                                        <a class="pagination__link" 
                                           href="?page=<?php echo $i; ?><?php echo $search ? "&search=$search" : ''; ?>">
                                            <?php echo $i; ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>

                                <?php if ($page < $total_pages): ?>
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--next" 
                                           href="?page=<?php echo ($page + 1); ?><?php echo $search ? "&search=$search" : ''; ?>">
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ol>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</main>
    </div>
    <script src="js/photoswipe/photoswipe-lightbox.esm.min.js" type="module"></script>
    <script src="js/photoswipe/photoswipe.esm.min.js" type="module"></script>
    <script src="js/gsap/gsap.min.js"></script>
    <script src="js/gsap/ScrollToPlugin.min.js"></script>
    <script src="js/gsap/ScrollTrigger.min.js"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/common.js"></script>
</body>
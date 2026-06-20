<?php include 'header.php'; ?>
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Site Details <span class="text-grey"></span></h1>
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
                                    href="#"><span>dashboard</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Site Details</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                <table class="table table--spaces">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th class="table__th-sort"><span class="align-middle">Store Name</span>
                                <span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Support Email</span>
                                <span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Store Phone</span>
                                <span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Office</span>
                                <span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Pay Now Link</span>
                                <span class="sort sort--down"></span>
                            </th>
                            <!-- <th class="table__th-sort"><span class="align-middle">Currency</span>
                                <span class="sort sort--down"></span>
                            </th> -->
                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table__row">
                            <td class="table__td text-light-theme"><?php echo htmlspecialchars($siteInfo['store_name']); ?></td>
                            <td class="table__td text-dark-theme"><?php echo htmlspecialchars($siteInfo['site_support_email']); ?></td>
                            <td class="table__td text-light-theme"><?php echo htmlspecialchars($siteInfo['site_phone']); ?></td>
                            <td class="table__td text-light-theme"><?php echo htmlspecialchars($siteInfo['head_office']); ?></td>
                            <td class="table__td text-light-theme"><?php echo !empty($siteInfo['pay_now_link']) ? htmlspecialchars($siteInfo['pay_now_link']) : 'Not set'; ?></td>
                            <!-- <td class="table__td text-light-theme"><?php echo htmlspecialchars($siteInfo['currency']); ?></td> -->
                           
                            <td class="table__td table__actions">
                                <div class="items-more">
                                    <a class="items-more__button" href="update_site_setting.php?id=<?php echo $siteInfo['info_id']; ?>" style="color:green">
                                        <svg class="icon-icon-task-notes">
                                            <use xlink:href="#icon-task-notes"></use>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="table__space">
                            <td colspan="8"></td>
                        </tr>
                    </tbody>
                </table>
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
</body>

</html>


    <!-- <link rel="stylesheet" type="text/css" href="plugins/assets/css/elements/alert.css">
    <script src="plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="plugins/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" /> -->

     <!-- <script src="plugins/assets/js/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="plugins/sweetalerts/custom-sweetalert.js"></script> -->

    <link href="sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="sweetalerts/custom-sweetalert.css" rel="stylesheet" type="text/css" />


    <?php
    if(isset($_GET['success'])){
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: "",
                text: "'.htmlspecialchars($_GET['success']).'",
                type: "success",
                icon: "success",
                iconHtml: "<i class=\'fa fa-check-circle\'></i>"
            });
        });
        </script>';
    }elseif(isset($_GET['error'])){
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: "", 
                text: "'.htmlspecialchars($_GET['error']).'",
                type: "error",
                icon: "error",
                iconHtml: "<i class=\'fa fa-times-circle\'></i>"
            });
        });
        </script>';
    }
    ?>

    <script src="sweetalerts/promise-polyfill.js"></script>
    <script src="sweetalerts/sweetalert2.min.js"></script>
    <script src="sweetalerts/custom-sweetalert.js"></script>

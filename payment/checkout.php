<?php
$conn = include_once "../scripts/connection.php";
if (isset($_GET['orderid']) || isset($_POST['orderid'])) {
    if (isset($_GET['orderid'])) {
        $orderid = $conn->real_escape_string($_GET['orderid']);
    } elseif (isset($_POST['orderid'])) {
        $orderid = $conn->real_escape_string($_POST['orderid']);
    }

    $sql = "SELECT * FROM orders WHERE order_id = ?";
    $stat = $conn->prepare($sql);
    $stat->bind_param("s", $orderid);
    $stat->execute();

    $result = $stat->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $class_id = $row['class_id'];
        }

    } else {
        header("Location: ../hello/invalid.html");
        exit();
    }
} else {
    header("Location: https://www.alibaba.com/");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />

    <title>Alibaba.com: Manufacturers, Suppliers, Exporters & Importers from the world's largest online B2B marketplace
    </title>
    <meta name="keywords"
        content="Manufacturers, Suppliers, Exporters, Importers, Products, Trade Leads, Supplier, Manufacturer, Exporter, Importer">
    <meta name="description"
        content="Find quality Manufacturers, Suppliers, Exporters, Importers, Buyers, Wholesalers, Products and Trade Leads from our award-winning International Trade Site. Import &amp; Export on alibaba.com">


    <link rel="shortcut icon" href="https://is.alicdn.com/simg/single/icon/favicon.ico" type="image/x-icon">

    <style>
        /* ========================================
       RESPONSIVE MOBILE CSS - ULTRA RESPONSIVE
       ======================================== */
        @media screen and (max-width: 768px) {

            /* Override fixed widths for mobile */
            html {
                min-width: unset !important;
            }

            body {
                overflow-x: hidden !important;
            }

            .style-0 {
                min-width: unset !important;
                padding: 16px !important;
                overflow-x: hidden !important;
            }

            .style-1 {
                min-width: unset !important;
                max-width: 100% !important;
                overflow-x: hidden !important;
            }

            /* Ensure rows in payment methods don't stack gridcells if they are flex */
            [role="row"],
            .style-22,
            .style-126,
            .style-145,
            .style-161,
            .style-176,
            .style-196,
            .style-214,
            .style-232 {
                display: flex !important;
                flex-wrap: nowrap !important;
                align-items: center !important;
                height: auto !important;
                min-height: 48px !important;
            }

            /* Middle text gridcells in payment rows */
            .style-25,
            .style-235,
            .style-129,
            .style-148,
            .style-164,
            .style-179,
            .style-199,
            .style-217 {
                flex: 1 1 auto !important;
                width: auto !important;
                height: auto !important;
                min-height: 48px !important;
                overflow: visible !important;
                white-space: normal !important;
                padding: 8px 0 !important;
            }

            /* Allow inner texts to stack correctly */
            .style-26,
            .style-236,
            .style-130,
            .style-149,
            .style-165,
            .style-180,
            .style-200,
            .style-218 {
                display: block !important;
                height: auto !important;
                white-space: normal !important;
            }

            /* Radio button boundaries */
            .style-23,
            .style-233,
            .style-127,
            .style-146,
            .style-162,
            .style-177,
            .style-197,
            .style-215 {
                flex: 0 0 40px !important;
                width: 40px !important;
                max-width: 40px !important;
                padding-left: 10px !important;
                margin-left: 0 !important;
            }

            /* End icons boundaries */
            .style-39,
            .style-242,
            .style-138,
            .style-154,
            .style-170,
            .style-190,
            .style-208,
            .style-226 {
                flex: 0 0 60px !important;
                width: 60px !important;
                max-width: 60px !important;
                padding-right: 5px !important;
                margin-left: 5px !important;
                justify-content: flex-end !important;
                height: auto !important;
                display: flex !important;
                align-items: center !important;
            }

            /* Constrain oversized inline icons in radio block like UnionPay */
            img.style-36,
            img.style-37,
            .style-29 img,
            .style-203 img,
            .style-221 img {
                max-height: 20px !important;
                width: auto !important;
                object-fit: contain !important;
                margin-top: 4px !important;
                margin-left: 4px !important;
            }

            /* Fix UnionPay massive wrapper */
            .style-29 {
                display: flex !important;
                flex-wrap: wrap !important;
                align-items: center !important;
                justify-content: flex-start !important;
                margin-top: 4px !important;
            }

            .style-21>a,
            .style-125>a,
            .style-142>div>a,
            .style-158>div>a,
            .style-174>div>a,
            .style-194>div>a,
            .style-212>div>a {
                width: 100% !important;
            }

            /* Adjust payment method container height so it expands if text wraps */
            .style-20,
            .style-124 {
                height: auto !important;
                min-height: unset !important;
            }

            .style-21,
            .style-125 {
                height: auto !important;
                min-height: 60px !important;
                padding: 10px 0 !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: center !important;
            }

            /* Stack order info vertically wrapper */
            .style-14 {
                flex-direction: column !important;
                display: flex !important;
            }

            /* Force checkout main containers */
            .style-15,
            .style-254 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
                margin-left: 0 !important;
            }

            /* Right column padding adjustment */
            .style-254 {
                padding-left: 0 !important;
                margin-top: 20px !important;
            }

            /* Hide large desktop icons if they break mobile spacing inside payment method */
            .payment-method-row img,
            [role="gridcell"] img {
                max-width: 100% !important;
                height: auto !important;
                object-fit: contain !important;
            }

            /* Reduce font sizes inside the text blocks slightly for mobile */
            .style-27,
            .style-28,
            .style-237,
            .style-238 {
                font-size: 14px !important;
                line-height: normal !important;
            }

            /* Descriptions in payment blocks */
            .style-240,
            .style-241,
            .style-206,
            .style-207,
            .style-185,
            .style-186 {
                font-size: 11px !important;
                line-height: normal !important;
                white-space: normal !important;
                word-wrap: break-word !important;
            }

            /* Ensure all containers respect viewport */
            * {
                max-width: 100vw !important;
            }
        }

        /* Small mobile devices */
        @media screen and (max-width: 480px) {
            .style-0 {
                padding: 12px !important;
            }

            .style-21 {
                font-size: 18px !important;
                margin-bottom: 16px !important;
            }

            /* Resize big payment option titles */
            [data-i18n-appname="checkout-buyer"] {
                font-size: 14px !important;
                white-space: normal !important;
            }

            /* Tighter padding on radio icons to save space */
            .style-23,
            .style-233,
            .style-127,
            .style-146,
            .style-162,
            .style-177,
            .style-197,
            .style-215 {
                padding-left: 0 !important;
                flex: 0 0 32px !important;
                width: 32px !important;
            }

            .style-39,
            .style-242,
            .style-138,
            .style-154,
            .style-170,
            .style-190,
            .style-208,
            .style-226 {
                flex: 0 0 45px !important;
                width: 45px !important;
            }
        }
    </style>
</head>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<style>
    html {
        min-width: fit-content;
    }

    body {
        overflow-y: scroll;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        background-color: #fff;
        font-family: Inter, "SF Pro Text", Roboto, "Helvetica Neue", Helvetica, Tahoma, Arial, "PingFang SC", "Microsoft YaHei" !important;
        -webkit-font-smoothing: antialiased !important;
    }

    #app {
        min-height: calc(100vh - 260px);
    }
</style>
<style>
    .style-0 {
        box-sizing: border-box;
        display: flex;
    }

    .style-1 {
        margin: 20px auto;
        min-height: 315px;
        width: 1088px;
        box-sizing: border-box;
    }

    .style-2 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        min-height: 52px;
        box-sizing: border-box;
    }

    .style-3 {
        color: rgb(51, 51, 51);
        font-size: 14px;
        margin-bottom: 24px;
        margin-top: 4px;
        box-sizing: border-box;
    }

    .style-4 {
        align-items: center;
        display: flex;
        width: fit-content;
        box-sizing: border-box;
    }

    .style-5 {
        color: rgb(0, 0, 0);
        font-size: 20px;
        font-weight: 900;
        line-height: 24px;
        margin-right: 4px;
        box-sizing: border-box;
    }

    .style-6 {
        box-sizing: border-box;
    }

    .style-7 {
        margin-top: 4px;
        box-sizing: border-box;
    }

    .style-8 {
        color: rgb(102, 102, 102);
        display: inline-block;
        font-size: 14px;
        line-height: 24px;
        box-sizing: border-box;
    }

    .style-9 {
        box-sizing: border-box;
    }

    .style-10 {
        color: rgb(34, 34, 34);
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 500;
        line-height: 24px;
        margin-left: 8px;
        box-sizing: border-box;
    }

    .style-11 {
        margin: -10px;
        background: rgba(0, 0, 0, 0) url('https://s.alicdn.com/@img/imgextra/i3/O1CN01SDY6Xa1D7u7jpBXAb_!!6000000000170-0-tps-700-552.jpg') repeat scroll -92px -488px / auto padding-box border-box;
        box-sizing: border-box;
        display: inline-block;
        height: 32px;
        position: relative;
        vertical-align: middle;
        width: 46px;
        background-position: -92px -488px;
        zoom: 0.375;
    }

    .style-12 {
        margin: 0px 6px;
        text-decoration: underline solid rgb(34, 34, 34);
        box-sizing: border-box;
    }

    .style-13 {
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
    }

    .style-14 {
        min-height: 400px;
        box-sizing: border-box;
    }

    .style-15 {
        box-sizing: border-box;
        display: flex;
    }

    .style-16 {
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-17 {
        box-sizing: border-box;
    }

    .style-18 {
        box-sizing: border-box;
    }

    .style-19 {
        box-sizing: border-box;
    }

    .payment-method-box.payment-method-unselected {
        border: 1px solid rgba(0, 0, 0, 0) !important;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px !important;
    }

    .payment-method-box.payment-method-selected {
        border: 1px solid rgb(255, 102, 0) !important;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px !important;
    }

    .payment-method-content.payment-method-unselected {
        background-color: rgb(255, 255, 255) !important;
    }

    .payment-method-content.payment-method-selected {
        background-color: rgb(255, 248, 243) !important;
    }

    .style-20 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(255, 102, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: default;
        margin-bottom: 8px;
        max-height: 1200px;
        min-height: 138px;
        overflow: visible;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-21 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
        background-color: rgb(255, 248, 243);
    }

    .style-22 {
        align-items: center;
        height: 32px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-23 {
        margin-left: 8px;
        padding-left: 32px;
        height: 25.5px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-24 {
        border: 7px solid rgb(255, 102, 0);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
        display: inline-block;
    }

    .style-25 {
        height: 28px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-26 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-27 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-28 {
        box-sizing: border-box;
    }

    .style-29 {
        box-sizing: border-box;
    }

    .style-30 {
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-31 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-32 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-33 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-34 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-35 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-36 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-37 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-38 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-39 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-40 {
        align-items: center;
        background-color: rgb(255, 240, 230);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-41 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-42 {
        box-sizing: border-box;
        background-color: rgb(250, 250, 250);
        border-radius: 8px;
        color: rgb(153, 153, 153);
        font-size: 12px;
        height: 42px;
        line-height: 42px;
        padding: 0px 40px;
    }

    .style-43 {
        box-sizing: border-box;
    }

    .style-44 {
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        margin-left: 5px;
    }

    .style-45 {
        box-sizing: border-box;
        padding: 20px 40px 0;
    }

    .style-46 {
        box-sizing: border-box;
        position: relative;
    }

    .style-47 {
        box-sizing: border-box;
    }

    .style-48 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    .style-49 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-50 {
        box-sizing: border-box;
        color: rgb(0, 0, 0);
        font-size: 16px;
        font-weight: 700;
        line-height: 40px;
    }

    .style-51 {
        box-sizing: border-box;
    }

    .style-52 {
        box-sizing: border-box;
        margin-bottom: 16px;
        position: relative;
        width: 100%;
        margin-right: 20px;
        display: inline-block;
        vertical-align: top;
    }

    .style-53 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-54 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
    }

    .style-55 {
        box-sizing: border-box;
        font-size: 13px;
        height: 46px;
        padding: 0px 8px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
    }

    .style-56 {
        box-sizing: border-box;
        background-color: rgb(255, 255, 255);
        position: absolute;
        right: 32px;
        top: 13px;
    }

    .style-57 {
        margin-left: -4px;
        margin-right: -4px;
        margin-right: -4px;
        box-sizing: border-box;
        display: flex;
    }

    .style-58 {
        padding-left: 4px;
        padding-right: 4px;
        padding-right: 4px;
        flex: 0 0 50%;
        box-sizing: border-box;
        max-width: 50%;
        width: 50%;
    }

    .style-59 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 16px;
        display: inline-block;
        vertical-align: top;
    }

    .style-60 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-61 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
    }

    .style-62 {
        box-sizing: border-box;
        font-size: 13px;
        height: 46px;
        padding: 0px 8px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
    }

    .style-63 {
        padding-left: 4px;
        padding-right: 4px;
        padding-right: 4px;
        flex: 0 0 50%;
        box-sizing: border-box;
        max-width: 50%;
        width: 50%;
    }

    .style-64 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 16px;
        display: inline-block;
        vertical-align: top;
    }

    .style-65 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-66 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
    }

    .style-67 {
        box-sizing: border-box;
        font-size: 13px;
        height: 46px;
        padding: 0px 8px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
    }

    .style-68 {
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        font-size: 14px;
        line-height: 16.1px;
        margin: 0px;
        display: none;
    }

    .style-69 {
        margin-left: -4px;
        margin-right: -4px;
        margin-right: -4px;
        box-sizing: border-box;
        display: flex;
    }

    .style-70 {
        padding-left: 4px;
        padding-right: 4px;
        padding-right: 4px;
        flex: 0 0 50%;
        box-sizing: border-box;
        max-width: 50%;
        width: 50%;
    }

    .style-71 {
        box-sizing: border-box;
        display: flex;
    }

    .style-72 {
        flex: 0 0 45.8333%;
        box-sizing: border-box;
        max-width: 45.8333%;
        width: 45.8333%;
    }

    .style-73 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 16px;
        display: inline-block;
        vertical-align: top;
    }

    .style-74 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-75 {
        box-sizing: border-box;
        width: 100%;
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        transition: 0.1s linear;
        display: inline-block;
        font-size: 0px;
        position: relative;
        vertical-align: middle;
    }

    .style-76 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-flex;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
        align-items: center;
        color: rgb(51, 51, 51);
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
    }

    .style-77 {
        box-sizing: border-box;
        font-size: 14px;
        padding-left: 0px;
        align-items: center;
        display: flex;
        flex: 1 1 0px;
        overflow: hidden;
        width: 100%;
        height: 26px;
        line-height: 26px;
        padding: 0px 8px 0px 0px;
    }

    .style-78 {
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        width: 100%;
    }

    .style-79 {
        box-sizing: border-box;
        font-size: 13px;
        height: 26px;
        padding: 0px 0px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
        cursor: default;
        left: 0px;
        position: absolute;
        z-index: 1;
        display: block;
        letter-spacing: normal;
        white-space: nowrap;
        padding-right: 0px;
    }

    .style-80 {
        box-sizing: border-box;
        max-width: 100%;
        position: relative;
        visibility: hidden;
        white-space: pre;
        z-index: -1;
        display: block;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        font-size: 14px;
        letter-spacing: normal;
        overflow: hidden;
    }

    .style-81 {
        box-sizing: border-box;
    }

    .style-82 {
        display: inline-block;
        width: 1px;
        width: 1px;
        box-sizing: border-box;
    }

    .style-83 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: block;
        line-height: 13px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        flex: 0 0 auto;
        border-radius: 0px 4px 4px 0px;
        padding-right: 8px;
    }

    .style-84 {
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        transition: 0.1s linear;
        width: auto !important;
        padding-right: 0px;
        display: inline-block;
        top: 0px;
    }

    .style-85 {
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        color: rgb(153, 153, 153);
        transition: 0.1s linear;
    }

    .style-86 {
        box-sizing: border-box;
        height: 1px;
        overflow: hidden;
        padding: 0px;
        position: absolute;
        width: 1px;
        clip: rect(0px, 0px, 0px, 0px);
        border: 0px none rgb(51, 51, 51);
        margin: -1px;
        top: 0px;
        white-space: nowrap;
    }

    .style-87 {
        flex: 0 0 8.33333%;
        box-sizing: border-box;
        max-width: 8.33333%;
        width: 8.33333%;
    }

    .style-88 {
        justify-content: center;
        box-sizing: border-box;
        display: flex;
    }

    .style-89 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        font-size: 14px;
        font-weight: 400;
        line-height: 48px;
        text-align: center;
    }

    .style-90 {
        flex: 0 0 45.8333%;
        box-sizing: border-box;
        max-width: 45.8333%;
        width: 45.8333%;
    }

    .style-91 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 16px;
        display: inline-block;
        vertical-align: top;
    }

    .style-92 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-93 {
        box-sizing: border-box;
        width: 100%;
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        transition: 0.1s linear;
        display: inline-block;
        font-size: 0px;
        position: relative;
        vertical-align: middle;
    }

    .style-94 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-flex;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
        align-items: center;
        color: rgb(51, 51, 51);
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
    }

    .style-95 {
        box-sizing: border-box;
        font-size: 14px;
        padding-left: 0px;
        align-items: center;
        display: flex;
        flex: 1 1 0px;
        overflow: hidden;
        width: 100%;
        height: 26px;
        line-height: 26px;
        padding: 0px 8px 0px 0px;
    }

    .style-96 {
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        width: 100%;
    }

    .style-97 {
        box-sizing: border-box;
        font-size: 13px;
        height: 26px;
        padding: 0px 0px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
        cursor: default;
        left: 0px;
        position: absolute;
        z-index: 1;
        display: block;
        letter-spacing: normal;
        white-space: nowrap;
        padding-right: 0px;
    }

    .style-98 {
        box-sizing: border-box;
        max-width: 100%;
        position: relative;
        visibility: hidden;
        white-space: pre;
        z-index: -1;
        display: block;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        font-size: 14px;
        letter-spacing: normal;
        overflow: hidden;
    }

    .style-99 {
        box-sizing: border-box;
    }

    .style-100 {
        display: inline-block;
        width: 1px;
        width: 1px;
        box-sizing: border-box;
    }

    .style-101 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: block;
        line-height: 13px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        flex: 0 0 auto;
        border-radius: 0px 4px 4px 0px;
        padding-right: 8px;
    }

    .style-102 {
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        transition: 0.1s linear;
        width: auto !important;
        padding-right: 0px;
        display: inline-block;
        top: 0px;
    }

    .style-103 {
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        color: rgb(153, 153, 153);
        transition: 0.1s linear;
    }

    .style-104 {
        box-sizing: border-box;
        height: 1px;
        overflow: hidden;
        padding: 0px;
        position: absolute;
        width: 1px;
        clip: rect(0px, 0px, 0px, 0px);
        border: 0px none rgb(51, 51, 51);
        margin: -1px;
        top: 0px;
        white-space: nowrap;
    }

    .style-105 {
        padding-left: 4px;
        padding-right: 4px;
        padding-right: 4px;
        flex: 0 0 50%;
        box-sizing: border-box;
        max-width: 50%;
        width: 50%;
    }

    .style-106 {
        box-sizing: border-box;
        position: relative;
        width: 100%;
        margin-bottom: 16px;
        display: inline-block;
        vertical-align: top;
    }

    .style-107 {
        box-sizing: border-box;
        width: 100%;
    }

    .style-108 {
        box-sizing: border-box;
        border-radius: 4px;
        height: 48px;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 13px;
        line-height: 40px;
        transition: 0.1s linear;
        vertical-align: middle;
        width: 200px;
    }

    .style-109 {
        box-sizing: border-box;
        font-size: 13px;
        height: 46px;
        padding: 0px 8px 0px 16px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        margin: 0px;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: clip;
        line-height: 14.95px;
        padding-left: 16px;
        -webkit-text-security: disc;
    }

    .style-110 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: table-cell;
        line-height: 12px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        font-size: 12px;
    }

    .style-111 {
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        color: rgb(153, 153, 153);
        cursor: pointer;
        margin-right: 10px;
    }

    .style-112 {
        box-sizing: border-box;
        height: 48px;
        position: absolute;
        right: 30px;
        top: 0px;
    }

    .style-113 {
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        color: rgb(153, 153, 153);
        line-height: 46px;
        margin: 0px 6px;
        cursor: pointer;
    }

    .style-114 {
        box-sizing: border-box;
        display: flex;
    }

    .style-115 {
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-116 {
        box-sizing: border-box;
        margin: 12px 0px 6px;
        color: rgb(153, 153, 153);
        display: inline-block;
    }

    .style-117 {
        box-sizing: border-box;
        display: inline-block;
        line-height: 14px;
        position: relative;
        vertical-align: middle;
    }

    .style-118 {
        box-sizing: border-box;
        background-color: rgb(255, 102, 0);
        border-color: rgba(0, 0, 0, 0);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 4px;
        box-shadow: none;
        display: block;
        height: 16px;
        text-align: left;
        transition: 0.1s linear;
        width: 16px;
    }

    .style-119 {
        margin-left: -4px;
        margin-right: -4px;
        transform: matrix(0.5, 0, 0, 0.5, 0, 0);
        box-sizing: border-box;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        opacity: 1;
        color: rgb(255, 255, 255);
        left: 4px;
        line-height: 16px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
    }

    .style-120 {
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        overflow: visible;
        font-size: 14px;
        line-height: 16.1px;
        margin: 0px;
        cursor: pointer;
        height: 16px;
        left: 0px;
        opacity: 0;
        position: absolute;
        top: 0px;
        width: 16px;
        padding: 0px;
    }

    .style-121 {
        box-sizing: border-box;
        font-size: 12px;
        color: rgb(51, 51, 51);
        line-height: 12px;
        margin: 0px 4px;
        vertical-align: middle;
    }

    .style-122 {
        box-sizing: border-box;
    }

    .style-123 {
        box-sizing: border-box;
    }

    .style-124 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-125 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-126 {
        align-items: center;
        height: 44px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-127 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-128 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-129 {
        height: 44px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-130 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-131 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-132 {
        box-sizing: border-box;
    }

    .style-133 {
        color: rgb(255, 102, 0);
        font-size: 12px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-134 {
        box-sizing: border-box;
    }

    .style-135 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-136 {
        box-sizing: border-box;
    }

    .style-137 {
        box-sizing: border-box;
        margin-left: 4px;
        text-decoration: underline solid rgb(153, 153, 153);
    }

    .style-138 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-139 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-140 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-141 {
        box-sizing: border-box;
    }

    .style-142 {
        box-sizing: border-box;
    }

    .style-143 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-144 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
        border-radius: 8px;
    }

    .style-145 {
        align-items: center;
        height: 32px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-146 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-147 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-148 {
        height: 28px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-149 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-150 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-151 {
        box-sizing: border-box;
    }

    .style-152 {
        box-sizing: border-box;
    }

    .style-153 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-154 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-155 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-156 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-157 {
        box-sizing: border-box;
    }

    .style-158 {
        box-sizing: border-box;
    }

    .style-159 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-160 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-161 {
        align-items: center;
        height: 32px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-162 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-163 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-164 {
        height: 28px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-165 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-166 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-167 {
        box-sizing: border-box;
    }

    .style-168 {
        box-sizing: border-box;
    }

    .style-169 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-170 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-171 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-172 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-173 {
        box-sizing: border-box;
    }

    .style-174 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-175 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-176 {
        align-items: center;
        height: 45px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-177 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-178 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-179 {
        height: 45px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-180 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-181 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-182 {
        box-sizing: border-box;
    }

    .style-183 {
        box-sizing: border-box;
    }

    .style-184 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-185 {
        box-sizing: border-box;
    }

    .style-186 {
        box-sizing: border-box;
    }

    .style-187 {
        color: rgb(153, 153, 153);
        box-sizing: border-box;
        text-decoration: underline solid rgb(153, 153, 153);
        background-color: rgba(0, 0, 0, 0);
        margin-left: 4px;
    }

    .style-188 {
        box-sizing: border-box;
    }

    .style-189 {
        margin-left: -4px;
        margin-right: -4px;
        transform: matrix(0.5, 0, 0, 0.5, 0, 0);
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-190 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-191 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-192 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-193 {
        box-sizing: border-box;
    }

    .style-194 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-195 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-196 {
        align-items: center;
        height: 44px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-197 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-198 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-199 {
        height: 44px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-200 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-201 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-202 {
        box-sizing: border-box;
    }

    .style-203 {
        box-sizing: border-box;
    }

    .style-204 {
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-205 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-206 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-207 {
        box-sizing: border-box;
    }

    .style-208 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-209 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-210 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-211 {
        box-sizing: border-box;
    }

    .style-212 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-213 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-214 {
        align-items: center;
        height: 32px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-215 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-216 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-217 {
        height: 28px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-218 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-219 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-220 {
        box-sizing: border-box;
    }

    .style-221 {
        box-sizing: border-box;
    }

    .style-222 {
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-223 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-224 {
        margin-left: 5px;
        height: 16px;
        box-sizing: border-box;
        border-style: none;
    }

    .style-225 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-226 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-227 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-228 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-229 {
        box-sizing: border-box;
    }

    .style-230 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgba(0, 0, 0, 0);
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        margin-bottom: 8px;
        max-height: 100px;
        min-height: 98px;
        overflow: hidden;
        position: relative;
        transition: min-height 0.4s linear, max-height 0.3s linear 0.1s;
        box-sizing: border-box;
    }

    .style-231 {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 96px;
        box-sizing: border-box;
    }

    .style-232 {
        align-items: center;
        height: 44px;
        width: 100%;
        box-sizing: border-box;
        display: flex;
    }

    .style-233 {
        margin-left: 8px;
        padding-left: 32px;
        height: 24px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 80px;
        max-width: 80px;
        width: 80px;
        box-sizing: border-box;
    }

    .style-234 {
        border: 1px solid rgb(191, 191, 191);
        border-radius: 50%;
        box-sizing: border-box;
        height: 24px;
        width: 24px;
    }

    .style-235 {
        height: 44px;
        overflow: hidden;
        padding-right: 0px;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-236 {
        align-items: flex-end;
        display: flex;
        margin-bottom: 4px;
        box-sizing: border-box;
    }

    .style-237 {
        color: rgb(51, 51, 51);
        font-size: 16px;
        font-weight: 700;
        line-height: 24px;
        margin-right: 12px;
        box-sizing: border-box;
    }

    .style-238 {
        box-sizing: border-box;
    }

    .style-239 {
        box-sizing: border-box;
    }

    .style-240 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        line-height: 16px;
        box-sizing: border-box;
    }

    .style-241 {
        box-sizing: border-box;
    }

    .style-242 {
        display: flex;
        justify-content: end;
        height: 32px;
        overflow: hidden;
        padding-right: 0px;
        flex: 0 0 120px;
        max-width: 120px;
        width: 120px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-243 {
        align-items: center;
        background-color: rgb(247, 248, 250);
        border-radius: 3px;
        display: flex;
        height: 32px;
        justify-content: center;
        margin-right: 36px;
        width: 72px;
        box-sizing: border-box;
    }

    .style-244 {
        max-height: 20px;
        max-width: 60px;
        object-fit: contain;
        box-sizing: border-box;
        border-style: none;
        height: 20px;
    }

    .style-245 {
        letter-spacing: -0.07px;
        margin: 24px 0px 60px;
        text-align: center;
        box-sizing: border-box;
    }

    .style-246 {
        box-sizing: border-box;
    }

    .style-247 {
        color: rgb(34, 34, 34);
        cursor: pointer;
        font-size: 12px;
        line-height: 16px;
        text-decoration: underline solid rgb(34, 34, 34);
        box-sizing: border-box;
    }

    .style-248 {
        margin-right: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-249 {
        box-sizing: border-box;
    }

    .style-250 {
        box-sizing: border-box;
    }

    .style-251 {
        background-color: rgb(255, 255, 255);
        height: 40px;
        border-radius: 4px 0px 0px 4px;
        bottom: 310px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 2px 6px 2px;
        cursor: pointer;
        line-height: 40px;
        position: fixed;
        right: 0px;
        text-align: center;
        width: 40px;
        z-index: 99;
        box-sizing: border-box;
    }

    .style-252 {
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-253 {
        box-sizing: border-box;
    }

    .style-254 {
        padding-left: 20px;
        flex: 0 0 360px;
        max-width: 360px;
        width: 360px;
        box-sizing: border-box;
    }

    .style-255 {
        position: sticky;
        top: 20px;
        top: 20px;
        box-sizing: border-box;
    }

    .style-256 {
        box-sizing: border-box;
    }

    .style-257 {
        max-height: 800px;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        padding: 36px 28px;
        transition-duration: 1s;
        transition-property: max-height;
        box-sizing: border-box;
    }

    .style-258 {
        border-bottom: 1px solid rgb(238, 238, 238);
        margin-bottom: 18px;
        box-sizing: border-box;
    }

    .style-259 {
        border: 0px none rgb(51, 51, 51);
        margin-bottom: 24px;
        padding: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        font-size: 12px;
        width: 100%;
        box-sizing: border-box;
    }

    .style-260 {
        margin: 0px;
        padding: 0px;
        align-items: center;
        cursor: pointer;
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        color: rgb(0, 127, 252);
        text-decoration: none solid rgb(0, 127, 252);
        background-color: rgba(0, 0, 0, 0);
    }

    .style-261 {
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(218, 226, 238);
        border-radius: 4px;
        height: 52px;
        overflow: hidden;
        width: 52px;
        box-sizing: border-box;
    }

    .style-262 {
        height: 50px;
        width: 100%;
        box-sizing: border-box;
        border-style: none;
    }

    .style-263 {
        flex: 1 1 0%;
        margin-left: 8px;
        max-width: 200px;
        overflow: hidden;
        box-sizing: border-box;
    }

    .style-264 {
        color: rgb(0, 0, 0);
        font-weight: 500;
        text-decoration: underline solid rgb(0, 0, 0);
        margin-top: 0px;
        font-size: 12px;
        line-height: 12px;
        overflow-x: clip;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin: 0px;
        box-sizing: border-box;
        margin-bottom: 0px;
    }

    .style-265 {
        box-sizing: border-box;
    }

    .style-266 {
        color: rgb(118, 118, 118);
        font-size: 12px;
        line-height: 12px;
        margin-top: 8px;
        overflow-x: clip;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin: 8px 0px 0px;
        box-sizing: border-box;
        font-weight: 400;
        margin-bottom: 0px;
    }

    .style-267 {
        color: rgb(118, 118, 118);
        font-size: 12px;
        line-height: 12px;
        margin-top: 8px;
        overflow-x: clip;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin: 8px 0px 0px;
        box-sizing: border-box;
        font-weight: 400;
        margin-bottom: 0px;
    }

    .style-268 {
        box-sizing: border-box;
    }

    .style-269 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        margin-bottom: 12px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-270 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-271 {
        box-sizing: border-box;
    }

    .style-272 {
        color: rgb(0, 0, 0);
        flex-shrink: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-273 {
        color: rgb(118, 118, 118);
        font-size: 12px;
        font-weight: 400;
        line-height: 20px;
        margin-bottom: 12px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-274 {
        color: rgb(34, 34, 34);
        cursor: pointer;
        font-size: 12px;
        font-weight: 500;
        text-decoration: underline solid rgb(34, 34, 34);
        line-height: 20px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-275 {
        box-sizing: border-box;
    }

    .style-276 {
        color: rgb(208, 74, 10);
        flex-shrink: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-277 {
        box-sizing: border-box;
    }

    .style-278 {
        box-sizing: border-box;
    }

    .style-279 {
        box-sizing: border-box;
    }

    .style-280 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        margin-bottom: 12px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-281 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-282 {
        box-sizing: border-box;
    }

    .style-283 {
        color: rgb(0, 0, 0);
        flex-shrink: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-284 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        margin-bottom: 12px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-285 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-286 {
        box-sizing: border-box;
    }

    .style-287 {
        cursor: pointer;
        margin-left: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-288 {
        color: rgb(0, 0, 0);
        flex-shrink: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-289 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        margin-bottom: 12px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-290 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-291 {
        box-sizing: border-box;
    }

    .style-292 {
        cursor: pointer;
        margin-left: 4px;
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-293 {
        color: rgb(0, 0, 0);
        flex-shrink: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-294 {
        line-height: 26px;
        margin: 14px 0px;
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 14px;
        position: relative;
        justify-content: space-between;
        box-sizing: border-box;
        display: flex;
    }

    .style-295 {
        color: rgb(0, 0, 0);
        font-weight: 500;
        line-height: 26px;
        font-size: 14px;
        min-width: fit-content;
        box-sizing: border-box;
    }

    .style-296 {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
    }

    .style-297 {
        color: rgb(34, 34, 34);
        display: block;
        font-size: 14px;
        line-height: 24px;
        max-width: 180px;
        vertical-align: middle;
        box-sizing: border-box;
    }

    .style-298 {
        box-sizing: border-box;
    }

    .style-299 {
        text-decoration: underline solid rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        float: none;
        line-height: 26px;
        margin-top: 2px;
        border: 0px none rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 700;
        height: 24px;
        margin-left: 8px;
        margin-right: 6px;
        padding: 0px;
        vertical-align: baseline;
        cursor: pointer;
        box-shadow: none;
        display: inline-block;
        box-sizing: border-box;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(34, 34, 34);
        border-style: none;
        border-radius: 100px;
        border-width: 0px;
        position: relative;
        text-align: center;
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 2px 6px 0px 8px;
    }

    .style-300 {
        margin-top: -2px;
        box-sizing: border-box;
        text-decoration: underline solid rgb(34, 34, 34);
        display: inline-block;
        vertical-align: middle;
    }

    .style-301 {
        margin-top: -2px;
        box-sizing: border-box;
        text-decoration: underline solid rgb(34, 34, 34);
        display: inline-block;
        vertical-align: middle;
    }

    .style-302 {
        color: rgb(34, 34, 34);
        cursor: pointer;
        margin-top: -2px;
        transition: transform 0.1s linear;
        box-sizing: border-box;
        margin-left: 4px;
        margin-right: 0px;
        transform: matrix(1, 0, 0, 1, 0, 0);
        font-size: 0px;
        display: inline-block;
        vertical-align: middle;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-303 {
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        color: rgb(0, 0, 0);
        flex-shrink: 0;
        overflow: hidden;
        text-align: right;
        box-sizing: border-box;
    }

    .style-304 {
        visibility: hidden;
        z-index: -1000;
        height: 0px;
        position: absolute;
        width: 0px !important;
        box-sizing: border-box;
    }

    .style-305 {
        margin-top: 16px;
        box-sizing: border-box;
    }

    .style-306 {
        height: 25px;
        transition: 0.2s ease-in-out;
        transition: 0.2s ease-in-out;
        position: relative;
        display: inline-block;
        width: 100%;
        min-height: 25px;
        min-width: 150px;
        font-size: 0px;
        box-sizing: border-box;
    }

    .style-307 {
        background-color: transparent;
        border: none;
        border: 0px none rgb(51, 51, 51);
        opacity: 1;
        z-index: 100;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 25px;
        box-sizing: border-box;
    }

    .style-308 {
        position: absolute;
        z-index: 300;
        top: 0px;
        left: 0px;
        width: 100%;
        box-sizing: border-box;
    }

    .style-309 {
        box-sizing: border-box;
    }

    .style-310 {
        display: none;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
    }

    .style-311 {
        visibility: hidden;
        z-index: -1000;
        height: 0px;
        position: absolute;
        width: 0px !important;
        box-sizing: border-box;
    }

    .style-312 {
        width: 100%;
        box-sizing: border-box;
        pointer-events: none;
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(255, 102, 0);
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        font-size: 14px;
        height: 36px;
        padding: 0px 28px;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        line-height: 14px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(255, 255, 255);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(255, 255, 255) none 0px;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px;
    }

    .style-313 {
        cursor: pointer;
        left: 16px;
        line-height: 36px;
        position: absolute;
        top: 0px;
        box-sizing: border-box;
        display: none;
        margin-left: 0px;
        margin-right: 4px;
        transform: none;
        font-size: 0px;
        vertical-align: middle;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-314 {
        box-sizing: border-box;
        text-decoration: none solid rgb(255, 255, 255);
        display: inline-block;
        vertical-align: middle;
    }

    .style-315 {
        box-sizing: border-box;
        display: inline-block;
        vertical-align: middle;
    }

    .style-316 {
        height: 0px;
        position: absolute;
        visibility: hidden;
        width: 0px;
        z-index: -1000;
        margin-top: 16px;
        box-sizing: border-box;
    }

    .style-317 {
        box-sizing: border-box;
    }

    .style-318 {
        width: 100%;
        box-sizing: border-box;
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(255, 102, 0);
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        font-size: 14px;
        height: 36px;
        padding: 0px 28px;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        line-height: 14px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(255, 255, 255);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(255, 255, 255) none 0px;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px;
    }

    .style-319 {
        cursor: pointer;
        left: 16px;
        line-height: 36px;
        position: absolute;
        top: 0px;
        box-sizing: border-box;
        margin-left: 0px;
        margin-right: 4px;
        transform: matrix(1, 0, 0, 1, 0, 0);
        font-size: 0px;
        display: block;
        vertical-align: middle;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-320 {
        box-sizing: border-box;
        text-decoration: none solid rgb(255, 255, 255);
        display: inline-block;
        vertical-align: middle;
    }

    .style-321 {
        font-weight: 500;
        padding: 0px 10px;
        white-space: normal;
        box-sizing: border-box;
        display: inline-block;
        vertical-align: middle;
    }

    .style-322 {
        margin-bottom: 12px;
        margin-top: 10px;
        background: rgb(232, 251, 241) none repeat scroll 0% 0% / auto padding-box border-box;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 2px 12px 0px;
        cursor: pointer;
        padding: 6px 20px 14px;
        position: relative;
        box-sizing: border-box;
    }

    .style-323 {
        border-top: 3px solid rgb(212, 244, 227);
        border-right: 3px solid rgb(212, 244, 227);
        border-left: 3px solid rgb(212, 244, 227);
        border-image: none;
        border-bottom: 0px hidden rgb(51, 51, 51);
        border-radius: 6px 6px 0px 0px;
        height: 20px;
        left: 20.3906px;
        margin-top: 16px;
        position: absolute;
        top: 0px;
        width: 88%;
        box-sizing: border-box;
    }

    .style-324 {
        position: relative;
        z-index: 100;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        display: flex;
    }

    .style-325 {
        background-color: rgb(232, 251, 241);
        box-sizing: border-box;
        border-style: none;
        height: 24px;
    }

    .style-326 {
        height: 10px;
        width: 9px;
        background-color: rgb(232, 251, 241);
        box-sizing: border-box;
    }

    .style-327 {
        background-color: rgb(232, 251, 241);
        box-sizing: border-box;
        border-style: none;
        height: 24px;
    }

    .style-328 {
        margin-top: 8px;
        box-sizing: border-box;
        display: flex;
    }

    .style-329 {
        color: rgb(102, 102, 102);
        font-size: 12px;
        line-height: 20px;
        width: 82%;
        overflow-wrap: break-word;
        flex: 1 1 0%;
        box-sizing: border-box;
    }

    .style-330 {
        box-sizing: border-box;
    }

    .style-331 {
        box-sizing: border-box;
    }

    .style-332 {
        flex: 0 0 20px;
        max-width: 20px;
        width: 20px;
        align-self: center;
        box-sizing: border-box;
    }

    .style-333 {
        cursor: pointer;
        color: rgb(153, 153, 153);
        margin-left: 8px;
        box-sizing: border-box;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
    }

    .style-334 {
        color: rgb(176, 176, 176);
        display: block;
        font-size: 12px;
        font-weight: 400;
        line-height: 16px;
        margin-bottom: 10px;
        text-align: justify;
        box-sizing: border-box;
    }
</style>
<style>
    .style-00 {
        box-sizing: border-box;
        padding-top: 10px;
        height: 65px;
        min-width: 1200px;
        background-color: rgb(255, 255, 255);
        box-shadow: rgba(0, 0, 0, 0.1) 2px 2px 3px 0px;
    }

    .style-01 {
        box-sizing: border-box;
        display: block;
        margin: 0px auto;
        max-width: 1200px;
        min-width: 600px;
        height: 55px;
        font-size: 14px;
        line-height: 55px;

        display: flex;
        justify-content: start;
        /* Centers horizontally */
        align-items: start;
        /* Centers vertically */
    }

    .style-02 {
        color: rgb(0, 127, 252);
        text-decoration: none solid rgb(0, 127, 252);
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        float: left;
        margin-top: 9px;
        margin-left: 5px;
        width: 210px;
        height: 38px;
        background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDYxIiBoZWlnaHQ9IjU2IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNjQuOTMgNDEuOTcxYzUuNzU3LTguMTA3IDE1LjczMy0yMC4yMjYgMTUuMjc0LTI4LjIyMkM3OS43ODIgMy4zMDEgNjguOTE5LS4xMDEgNTguMTM0LjAwMiA1MC42Mi4xMDEgNDMuMDc0IDIuMjUgMzcuOTgxIDQuMTQ4Yy0xNy41ODQgNi40NS0yNy45NjUgMTYuNzk3LTMzLjk3IDI4LjI0NS02LjQ2IDExLjM0OC0yLjc3NCAyMi4xOTUgMTMuNDU1IDIyLjU0NSAxMC45MDQtLjQ0IDE4LjE3OC0zLjE2OSAyNS4yMDItNi43NTUuMzgtLjE5NC4xNjYtLjc3My0uMjQ5LS42NjktNi40OTQgMS42MTItMjEuNTU1IDQuNzA3LTI4LjU3LjkyNi0uMDEtLjAwMS0uMDI3LS4wMDgtLjA0LS4wMS0uOTM0LS41LTEuOTc1LTEuMjA3LTIuNDI1LTMuMTI3LS40ODUtNC4wNSA1LjgwMi04LjI0OCA5LjQyMS05LjU5OWwtLjc1LTcuMDE3YzIuODkgMS4wOCA1Ljk3IDEuNjc2IDkuMTI3IDEuNjc2IDUuOTg5IDAgMTEuMjQ2LTIuMTM3IDE1LjE0NC01LjY4My4yNDQuNTcuNDM4IDEuMjEyLjU0NCAxLjkzNmgxLjdjLjAyNS0xLjgwMS0xLjEzNS0zLjIyOC0xLjEzNS0zLjIyOC0xLjc4Mi0yLjQyNC00LjQ0NC0yLjM4MS00LjQ0NC0yLjM4MXMxLjI2LjU5NiAyLjM2IDIuMDE0Yy05LjAxNiA3Ljk3OC0yMC4yOTggNC4wNS0yMC4yOTggNC4wNWw0LjY0My01LjE2My0xLjk2Mi00YzEwLjcyNC0zLjg5OSAxOS43NjMtNi44OTkgMzQuNzMtOS41NDZMNTYuNzQxIDUuNTFsMS42NjUtMS4wOTdjOS40NTkgMi41OSAxNS42NzMgNC40OTYgMTUuODg3IDkuMzU3LS4wNjYuODEtLjI0IDEuNzQ1LS42MiAyLjgyNi0yLjEwNiA1LjMtOS4xMzEgMTQuMTQ3LTExLjk1NCAxNy44NDctMS44NjcgMi40NDgtMy42ODggNC44NS00LjkzMSA3LjE1LTEuMjg5IDIuMy0xLjk5OCA0LjQ0Ni0xLjgyOCA2LjQ5Ny0uMDk1IDEyLjAxNCAyMS4zNyAxLjk2NCAzMS4wNjYtNC41MDEuMzEyLS4yMDguMDcyLS42ODgtLjI4NC0uNTY5LTI3LjIzIDkuMDUtMjAuODEyLTEuMDQ5LTIwLjgxMi0xLjA0OVoiIGZpbGw9IiNGNjAiLz48ZyBjbGlwLXBhdGg9InVybCgjYSkiIGZpbGw9IiNGNjAiPjxwYXRoIGQ9Ik02NC4zNTQgNDIuMTE2YzUuNzcyLTguMTI1IDE1Ljc3NS0yMC4yNzIgMTUuMzE0LTI4LjI4N0M3OS4yNDYgMy4zNTcgNjguMzUyLS4wNTMgNTcuNTM4LjA1Yy03LjUzNS4xLTE1LjEgMi4yNTQtMjAuMjA3IDQuMTU2QzE5LjcgMTAuNjcgOS4yOSAyMS4wNDIgMy4yNjkgMzIuNTE1LTMuMjA3IDQzLjg4OS40ODggNTQuNzYxIDE2Ljc2MSA1NS4xMTJjMTAuOTM0LS40NCAxOC4yMjgtMy4xNzYgMjUuMjctNi43Ny4zODItLjE5NS4xNjctLjc3NS0uMjUtLjY3MS02LjUxMSAxLjYxNS0yMS42MTQgNC43MTgtMjguNjQ2LjkyOC0uMDEyLS4wMDEtLjAyOC0uMDA4LS4wNC0uMDEtLjkzOC0uNS0xLjk4Mi0xLjIxLTIuNDMzLTMuMTMzLS40ODYtNC4wNiA1LjgxOC04LjI2OCA5LjQ0Ny05LjYyMWwtLjc1My03LjAzM2MyLjg5OCAxLjA4MyA1Ljk4NyAxLjY4IDkuMTUzIDEuNjggNi4wMDQgMCAxMS4yNzYtMi4xNDIgMTUuMTg0LTUuNjk2LjI0NC41NzIuNDM5IDEuMjE0LjU0NSAxLjk0aDEuNzA1Yy4wMjQtMS44MDYtMS4xMzgtMy4yMzYtMS4xMzgtMy4yMzYtMS43ODctMi40My00LjQ1NS0yLjM4Ny00LjQ1NS0yLjM4N3MxLjI2My41OTggMi4zNjYgMi4wMmMtOS4wNDEgNy45OTYtMjAuMzUzIDQuMDU5LTIwLjM1MyA0LjA1OWw0LjY1NS01LjE3Ni0xLjk2OC00LjAxYzEwLjc1NC0zLjkwNiAxOS44MTYtNi45MTQgMzQuODIzLTkuNTY3bC0zLjczLTIuODU5IDEuNjctMS4xYzkuNDgzIDIuNTk2IDE1LjcxNCA0LjUwOCAxNS45MjggOS4zOGExMS4yIDExLjIgMCAwIDEtLjYyMSAyLjgzMWMtMi4xMTIgNS4zMTItOS4xNTYgMTQuMTgtMTEuOTg3IDE3Ljg4OS0xLjg3IDIuNDUzLTMuNjk4IDQuODYtNC45NDQgNy4xNjYtMS4yOTIgMi4zMDUtMi4wMDQgNC40NTYtMS44MzIgNi41MTItLjA5NiAxMi4wNCAyMS40MjggMS45NjggMzEuMTQ5LTQuNTEyLjMxMy0uMjA4LjA3My0uNjg5LS4yODUtLjU3LTI3LjMwMyA5LjA3LTIwLjg2OC0xLjA1LTIwLjg2OC0xLjA1Wm0yNjYuNDc3IDcuNzU0Yy0uNTYxLS4xOS0uOTY1LS41NjMtMS4yMTQtMS4xMjMtLjI1LS41NjItLjM3NC0xLjQyMy0uMzc0LTIuNTkgMC0xLjYyLjI3OS0yLjY3Ljg0LTMuMTQ4LjU2MS0uNDc2IDEuNjEtLjcxNiAzLjE0OC0uNzE2IDEuNTM3IDAgMi41ODcuMjQgMy4xNDcuNzE2LjU2MS40NzkuODQyIDEuNTI4Ljg0MiAzLjE0OXMtLjI4MSAyLjc0NC0uODQyIDMuMjQzYy0uNTYxLjQ5OS0xLjYxLjc0OS0zLjE0Ny43NDktMS4wMzkgMC0xLjgzOS0uMDk1LTIuNC0uMjhaTTE0Ny40MTkgNS4wMWg5LjkyNXY0NS4xMTNoLTkuOTI1VjUuMDFabTE2Ljg4NiAzLjk5NWMwLTQuNjM4Ljk1LTQuOTk1IDUuNDA5LTQuOTk1czUuNDA5LjM1NyA1LjQwOSA0Ljk5NS0uODkyIDUuMTE0LTUuNDA5IDUuMTE0Yy00LjUxNyAwLTUuNDA5LS41MzUtNS40MDktNS4xMTRabS40NzYgOC40M2g5Ljg2N1Y1MC4xNWgtOS44NjdWMTcuNDM2Wm00OS4yMzEgMTYuNjQ5YzAgOS4zMzQtMi4zNzggMTYuNjQ3LTEyLjY2MSAxNi42NDctNi4wNjIgMC04LjQzOS0xLjg0Mi05LjYyOC00LjY5N2wtLjU5NSA0LjEwM2gtOS4wMzRWNC45NWg5Ljg2N3YxNi4yOTFjMS4zMDgtMS45MDIgMy45MjMtMy44MDUgOS4zOS0zLjgwNSAxMC4yODMgMCAxMi42NjEgNi4zNjIgMTIuNjYxIDE2LjY0OFptLTEwLjA0NSAwYzAtNS41ODktLjgzMi05LjQ1My02LjA2My05LjQ1M3MtNi40NzggMy4zODktNi40NzggOS40NTNjMCA2LjA2MyAxLjI0NyA5LjMzNCA2LjQ3OCA5LjMzNCA1LjIzIDAgNi4wNjMtNC4xMDMgNi4wNjMtOS4zMzRabTQ0LjI1OC02LjAxOHYyMi4wNmgtOC44NTdsLS44MzEtMy4zOWMtMS4yNDkgMi4wMjItNC4zOTkgMy45ODQtOS44NjcgMy45ODQtNi45NTUgMC0xMC45MzctMy4xNS0xMC45MzctOS44NyAwLTcuNDMyIDQuMzk5LTEwLjEwNyAxMy4zMTQtMTAuMTA3aDcuMzd2LS4xNzhjMC0zLjgwNi0xLjEyOS00LjgxNy02LjQ3OC00LjgxNy0yLjMxOCAwLTUuODk3LjE3OC04LjAzNy41MzV2LTguMjY1YzIuNDM3LS4zNTYgNy4wMjctLjUzNSA5LjI4NS0uNTM1IDEwLjk5NSAwIDE1LjAzNyAzLjUwOSAxNS4wMzcgMTAuNTgzaC4wMDFabS05LjgwOCAxMi4zMDl2LTMuMjExaC01LjY0NmMtMy45MjIgMC01LjQwOS42NTQtNS40MDkgMy4yNyAwIDIuMDgxIDEuMzY3IDIuODUzIDQuMTYxIDIuODUzIDMuNDQ3IDAgNS45NDQtMS4yNDggNi44OTQtMi45MTN2LjAwMVptNDkuMTY5LTYuMzAzYzAgOS4zMzUtMi4zNzggMTYuNjQ4LTEyLjY2MSAxNi42NDgtNi4wNjIgMC04LjQzOS0xLjg0My05LjYyNy00LjY5N2wtLjU5NSA0LjEwM2gtOS4wMzVWNC45MzloOS44Njd2MTYuMjljMS4zMDgtMS45MDEgMy45MjMtMy44MDUgOS4zOS0zLjgwNSAxMC4yODQgMCAxMi42NjEgNi4zNjMgMTIuNjYxIDE2LjY0OFptLTEwLjA0NSAwYzAtNS41ODgtLjgzMi05LjQ1Mi02LjA2My05LjQ1MlMyNjUgMjguMDA4IDI2NSAzNC4wNzJzMS4yNDggOS4zMzUgNi40NzggOS4zMzVjNS4yMyAwIDYuMDYzLTQuMTAzIDYuMDYzLTkuMzM1Wm0tMTQ5LjI4OSA1LjU5NWgtMTYuMTY3bC0zLjI2OSAxMC4zODRIOTguMDU5bDE1LjI3NC00NS4wNEgxMjcuM2wxNS4xNTcgNDUuMDRoLTEwLjk5NmwtMy4yMDktMTAuMzg0Wm0tMi44NTQtOS4yMTYtNC44MTQtMTUuNjRoLS43MTNsLTQuOTMzIDE1LjY0aDEwLjQ2Wm0xOTYuNDAxLTIuMzg0djIyLjA2aC04Ljg1N2wtLjgzMS0zLjM5Yy0xLjI0OSAyLjAyMi00LjM5OSAzLjk4NC05Ljg2NiAzLjk4NC02Ljk1NiAwLTEwLjkzOC0zLjE1LTEwLjkzOC05Ljg3IDAtNy40MzMgNC4zOTktMTAuMTA3IDEzLjMxNC0xMC4xMDdoNy4zNzF2LS4xNzljMC0zLjgwNS0xLjEzLTQuODE2LTYuNDc4LTQuODE2LTIuMzE5IDAtNS44OTguMTc4LTguMDM4LjUzNFYxOC4wMmMyLjQzNy0uMzU3IDcuMDI3LS41MzUgOS4yODUtLjUzNSAxMC45OTUgMCAxNS4wMzcgMy41MDkgMTUuMDM3IDEwLjU4M2guMDAxWm0tOS44MDcgMTIuMzA5di0zLjIxMWgtNS42NDdjLTMuOTIxIDAtNS40MDguNjU0LTUuNDA4IDMuMjcgMCAyLjA4IDEuMzY2IDIuODUzIDQuMTYgMi44NTMgMy40NDcgMCA1Ljk0NC0xLjI0OSA2Ljg5NS0yLjkxM1ptMzAuMTkxLTYuNTY4YzAtNC4zMTEuNjQ1LTcuNzA2IDEuOTM0LTEwLjE4NCAxLjI4OS0yLjQ3OCAzLjEzMy00LjIyMSA1LjUzMS01LjIyOCAyLjM5Ni0xLjAwNyA1LjQyOC0xLjUxMiA5LjA5Ni0xLjUxMiAxLjUzIDAgMy4wNTIuMDkxIDQuNTYyLjI3MiAxLjUxMS4xODIgMi43OS40MTQgMy44MzguNjk1djguNDAxYy0yLjAxNS0uNzY0LTQuMjkxLTEuMTQ4LTYuODMtMS4xNDgtMi42OTkgMC00LjY2NC42MjUtNS44OTIgMS44NzMtMS4yMyAxLjI1LTEuODQ0IDMuNTI3LTEuODQ0IDYuODMgMCAyLjI1Ny4yODIgNCAuODQ3IDUuMjI4LjU2MyAxLjIzIDEuNDIgMi4wOTYgMi41NjggMi42IDEuMTQ5LjUwNCAyLjY2OS43NTUgNC41NjMuNzU1IDIuNTM5IDAgNC44NTUtLjM4MiA2Ljk1MS0xLjE0OXY4LjIyYy0uOTY4LjM2My0yLjI4OC42NjUtMy45NTkuOTA3YTMzLjYyMiAzMy42MjIgMCAwIDEtNC44MDQuMzYzYy0zLjY2OCAwLTYuNy0uNTA1LTkuMDk2LTEuNTEyLTIuMzk4LTEuMDA2LTQuMjQyLTIuNzUtNS41MzEtNS4yMjctMS4yODktMi40NzgtMS45MzQtNS44NzMtMS45MzQtMTAuMTg1di4wMDFabTMwLjI4NyAwYzAtNC4zNTEuNjM1LTcuNzU2IDEuOTA1LTEwLjIxNSAxLjI2OC0yLjQ1NyAzLjA4Mi00LjE5IDUuNDM5LTUuMTk3IDIuMzU4LTEuMDA3IDUuMzY5LTEuNTEyIDkuMDM2LTEuNTEyczYuNjI3LjUwNSA5LjAwNSAxLjUxMmMyLjM3OCAxLjAwNyA0LjE5IDIuNzQgNS40NCA1LjE5NyAxLjI0OCAyLjQ1OSAxLjg3MyA1Ljg2MyAxLjg3MyAxMC4yMTUgMCA0LjM1Mi0uNjI1IDcuNzU3LTEuODczIDEwLjIxNC0xLjI1IDIuNDU5LTMuMDYzIDQuMTkyLTUuNDQgNS4xOTgtMi4zNzggMS4wMDctNS4zNzkgMS41MTEtOS4wMDUgMS41MTEtMy42MjYgMC02LjY3OS0uNTA0LTkuMDM2LTEuNTEtMi4zNTctMS4wMDctNC4xNy0yLjc0LTUuNDM5LTUuMTk5LTEuMjctMi40NTctMS45MDUtNS44NjItMS45MDUtMTAuMjE0Wm0xNi4zOCA5LjM2OGMxLjU3MSAwIDIuNzgtLjI4MiAzLjYyNi0uODQ3Ljg0Ny0uNTYzIDEuNDUxLTEuNTEgMS44MTMtMi44NC4zNjMtMS4zMy41NDQtMy4yMjMuNTQ0LTUuNjgxcy0uMTgxLTQuMzYxLS41NDQtNS43MTFjLS4zNjItMS4zNS0uOTc3LTIuMzE3LTEuODQzLTIuOTAyLS44NjctLjU4NC0yLjA2NS0uODc3LTMuNTk2LS44NzctMS41MzEgMC0yLjc4MS4yOTMtMy42MjYuODc3LS44NDcuNTg1LTEuNDUxIDEuNTUyLTEuODE0IDIuOTAyLS4zNjIgMS4zNS0uNTQzIDMuMjU0LS41NDMgNS43MTEgMCAyLjQ1Ny4xODEgNC4zNTEuNTQzIDUuNjgxLjM2MyAxLjMzLjk3NyAyLjI3NyAxLjg0NCAyLjg0Ljg2Ni41NjUgMi4wNjQuODQ3IDMuNTk2Ljg0N1pNNDYxIDI4LjgyNVY1MC4wNWgtMTAuMTkxVjMwLjM5MmMwLTIuMDUtLjMzMi0zLjQ1Ny0uOTk1LTQuMjIxLS42NjMtLjc2NC0xLjc5OS0xLjE0Ni0zLjQwNy0xLjE0NnMtMi44MTQuMzMyLTMuNjE4Ljk5NmMtLjgwNS42NjMtMS4zNjcgMS43MzktMS42ODkgMy4yMjZWNTAuMDVoLTEwLjE5MVYzMC4zOTJjMC0yLjA1LS4zNTItMy40NTctMS4wNTUtNC4yMjEtLjcwNC0uNzY0LTEuODItMS4xNDYtMy4zNDctMS4xNDYtMS41MjYgMC0yLjcxNC4yODItMy40MzYuODQ1LS43MjQuNTYzLTEuMjQ3IDEuNDg3LTEuNTY4IDIuNzczVjUwLjA1aC0xMC4xMzFWMTcuNDg4aDEwLjEzMXYzLjQ5OGMuODQ0LTEuMzI3IDEuOTktMi4zNDEgMy40MzctMy4wNDYgMS40NDctLjcwMyAzLjMzNi0xLjA1NSA1LjY2OC0xLjA1NSAyLjMzMiAwIDQuMzExLjM1MiA1LjgxOSAxLjA1NSAxLjUwOC43MDQgMi42NDQgMS43OCAzLjQwOCAzLjIyNiAxLjY0OC0yLjg1NCA1LjA0NC00LjI4IDEwLjE5MS00LjI4IDMuNjk4IDAgNi40NTIuOTI0IDguMjYxIDIuNzczIDEuODA5IDEuODUgMi43MTQgNC45MDUgMi43MTQgOS4xNjZINDYxWiIvPjwvZz48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGw9IiNmZmYiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC4yNSAuMDQ4KSIgZD0iTTAgMGg0NjAuNzV2NTUuMDY0SDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PC9zdmc+');
        background-size: auto 20px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        font-size: 0px;

    }

    .payment-status {
        text-align: center;
        font-size: 14px;
        padding-bottom: 10px;
        color: #cc0023;
    }

    .payment-success {
        text-align: center;
        font-size: 14px;
        padding-bottom: 10px;
        color: #699e9c;
    }

    /* ========================================
       RESPONSIVE MOBILE CSS - ULTRA RESPONSIVE
       ======================================== */

    @media screen and (max-width: 768px) {

        /* Override fixed widths */
        html {
            min-width: unset !important;
        }

        body {
            overflow-x: hidden !important;
        }

        .style-00 {
            min-width: unset !important;
            padding-top: 8px !important;
            height: auto !important;
        }

        .style-01 {
            min-width: unset !important;
            max-width: 100% !important;
            padding: 0 16px;
        }

        .style-02 {
            width: 150px !important;
            height: 28px !important;
            margin-left: 0 !important;
            background-size: auto 18px !important;
        }

        /* Main container responsive */
        .style-0 {
            padding: 16px !important;
            overflow-x: hidden !important;
        }

        .style-1 {
            padding: 16px !important;
            overflow-x: hidden !important;
        }

        /* Stack checkout header elements */
        .style-2 {
            flex-direction: column !important;
            gap: 12px;
        }

        .style-4,
        .style-7 {
            width: 100% !important;
            text-align: center !important;
        }

        /* Force single column layout - critical fix */
        .style-14,
        .style-15,
        .style-16,
        .style-17 {
            width: 100% !important;
            max-width: 100% !important;
            flex: 0 0 100% !important;
            display: block !important;
        }

        /* Main layout structural stacks */

        /* Payment method cards stack */
        .style-19,
        .style-20,
        .style-21,
        .style-123,
        .style-124,
        .style-125,
        .style-141,
        .style-142,
        .style-143,
        .style-157,
        .style-158,
        .style-159,
        .style-173,
        .style-174,
        .style-175,
        .style-193,
        .style-194,
        .style-195,
        .style-211,
        .style-212,
        .style-213,
        .style-229,
        .style-230,
        .style-231 {
            width: 100% !important;
            margin-bottom: 12px !important;
        }

        /* Payment method rows */
        .style-22,
        .style-126,
        .style-145,
        .style-161,
        .style-176,
        .style-196,
        .style-214,
        .style-232 {
            flex-direction: row !important;
            padding: 12px !important;
        }

        /* Make form inputs full width */
        .style-306,
        .style-307,
        .style-312,
        .style-318 {
            width: 100% !important;
            min-width: unset !important;
        }

        /* Input fields */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 100% !important;
            font-size: 16px !important;
            /* Prevent zoom on iOS */
        }

        /* Card payment icons */
        .style-29 {
            flex-wrap: wrap !important;
        }

        .style-30,
        .style-31,
        .style-32,
        .style-33,
        .style-34,
        .style-35,
        .style-36,
        .style-37 {
            margin: 4px !important;
            max-width: 48px !important;
        }

        /* Payment method icons */
        .style-39,
        .style-40,
        .style-41 {
            width: auto !important;
            max-width: 80px !important;
        }

        /* Buttons full width */
        button[type="submit"],
        .style-107,
        .style-109,
        .style-312,
        .style-318 {
            width: 100% !important;
            min-width: unset !important;
            margin: 8px 0 !important;
            height: 48px !important;
        }

        /* Payment form sections */
        .style-45,
        .style-46,
        .style-47,
        .style-48,
        .style-49 {
            padding: 12px !important;
        }

        /* Form field rows */
        .style-57 {
            flex-direction: column !important;
        }

        /* Touch-friendly sizing */
        a,
        button,
        .style-10 {
            min-height: 44px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* Font sizes */
        body {
            font-size: 14px !important;
        }

        .style-4 span,
        .style-6 {
            font-size: 18px !important;
        }

        .style-27,
        .style-28 {
            font-size: 14px !important;
        }

        /* Payment status messages */
        .payment-status,
        .payment-success {
            font-size: 13px !important;
            padding: 12px !important;
        }

        /* Loading message */
        #loading-message {
            font-size: 13px !important;
        }

        /* Card container */
        #card-container {
            pading: 12px !important;
        }

        /* Trade Assurance info */
        .style-322,
        .style-323 {
            padding: 12px !important;
            margin: 8px 0 !important;
        }

        /* Billing info compact */
        .style-329 {
            font-size: 11px !important;
            width: 100% !important;
        }
    }

    /* Tablet adjustments */
    @media screen and (min-width: 769px) and (max-width: 1024px) {
        .style-00 {
            min-width: unset !important;
        }

        .style-01 {
            min-width: unset !important;
            max-width: 100% !important;
        }

        /* Two-column grid for payment methods */
        .style-16 {
            width: 100% !important;
            max-width: 100% !important;
        }

        .style-19,
        .style-123,
        .style-141,
        .style-157,
        .style-173 {
            width: 48% !important;
            display: inline-block !important;
            vertical-align: top !important;
        }
    }

    /* Small mobile devices */
    @media screen and (max-width: 480px) {

        .style-0,
        .style-1 {
            padding: 12px !important;
        }

        .style-01 {
            padding: 0 12px !important;
        }

        .style-02 {
            width: 120px !important;
            background-size: auto 16px !important;
        }

        /* Compact payment method cards */
        .style-22,
        .style-126,
        .style-145 {
            padding: 8px !important;
        }

        .style-27,
        .style-28 {
            font-size: 13px !important;
        }

        /* Smaller payment icons */
        .style-30,
        .style-31,
        .style-32,
        .style-33,
        .style-34 {
            max-width: 40px !important;
        }

        /* Compact buttons */
        button[type="submit"],
        .style-312,
        .style-318 {
            font-size: 14px !important;
            height: 44px !important;
            padding: 0 16px !important;
        }
    }
</style>

<div class="style-00" data-spm-anchor-id="0.12336158.0.i17.65c565aa7Z6egm">
    <header class="style-01">
        <a href="//www.alibaba.com/" class="style-02" data-val="Alibaba.com">Alibaba.com</a>
    </header>
</div>

<?php
$conn = require "../scripts/connection.php";
if (isset($_GET['orderid']) || isset($_POST['orderid'])) {
    if (isset($_GET['orderid'])) {
        $orderid = $conn->real_escape_string($_GET['orderid']);
    } elseif (isset($_POST['orderid'])) {
        $orderid = $conn->real_escape_string($_POST['orderid']);
    }

    if (isset($_GET['protection'])) {
        $protection = floatval($conn->real_escape_string($_GET['protection']));
    } elseif (isset($_POST['protection'])) {
        $protection = floatval($conn->real_escape_string($_POST['protection']));
    } else {
        $protection = 0;
    }

    $sql = "SELECT * FROM orders WHERE order_id = ?";
    $stat = $conn->prepare($sql);
    $stat->bind_param("s", $orderid);
    $stat->execute();

    $result = $stat->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $class_id = $row['class_id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address_1 = $row['address_1'];
            $address_2 = $row['address_2'];
            $city = $row['city'];
            $state = $row['state'];
            $country = $row['country'];
            $postcode = $row['postcode'];
            $order_note = $row['order_note'];
            $estimated_delivery = $row['estimated_delivery'];
            $delivery_fee = $row['delivery_fee'];
            $processing_fee = $row['processing_fee'];
            $tax = $row['tax'];
            $total_amount = $row['total_amount'];
            $payment_method = $row['payment_method'];
            $created_at = $row['created_at'];
        }
        // Convert to DateTime object
        $date = new DateTime($estimated_delivery);

        // Format as "Feb 17"
        $estimated_delivery = $date->format('M j');



        $sql = "SELECT * FROM site_info";
        $stat = $conn->prepare($sql);
        $stat->execute();
        $site_info = $stat->get_result();
        if ($site_info->num_rows > 0) {
            while ($row = $site_info->fetch_assoc()) {
                $store_name = $row['store_name'];
                $contact_name = $row['contact_name'];
                $site_support_email = $row['site_support_email'];
                $site_phone = $row['site_phone'];
                $head_office = $row['head_office'];
                $store_link = $row['store_link'];
                $pay_now_link = $row['pay_now_link'] ?? '';
            }
        }

        $sql = "SELECT * FROM order_products WHERE class_id = ? ORDER BY created_at DESC";
        $stat = $conn->prepare($sql);
        $stat->bind_param("i", $class_id);
        $stat->execute();
        $order_products = $stat->get_result();
    }

} else {
    header("Location: https://www.alibaba.com/");
    exit();
}
?>

<div data-spm-anchor-id="0.12336158.0.i16.65c565aa7Z6egm" class="style-0">
    <div class="style-1">
        <div class="style-2">
            <div class="style-3">
                <div class="style-4"><span class="style-5"><span data-i18n-appname="checkout-buyer"
                            data-i18n-key="checkout.layouts.detail.TradeAssuranceCheckout" class="style-6">Trade
                            Assurance order</span></span></div>
            </div>
            <div class="style-7"><span class="style-8"><span data-i18n-appname="checkout-buyer"
                        data-i18n-key="checkout.components.country-list.PayFrom" class="style-9">Pay
                        from</span></span><span class="style-10" aria-haspopup="true" aria-expanded="false"><i
                        class="style-11"></i><span class="style-12"><?= ($country) ?? "" ?></span><i
                        class="style-13"></i></span></div>
        </div>
        <div class="style-14">
            <div dir="ltr" role="row" class="style-15">
                <div dir="ltr" role="gridcell" class="style-16">
                    <div class="style-17">
                        <div class="style-18">
                            <div class="style-229 payment-method-row" id="wire-method-option">
                                <div class="style-20 payment-method-box" id="wire-payment-box">
                                    <div class="style-21 payment-method-content" id="wire-payment-content">
                                        <a href="#" id="select-wire">
                                            <div dir="ltr" role="row" class="style-232">
                                                <div dir="ltr" role="gridcell" class="style-233">
                                                    <i class="style-128 payment-radio-icon"
                                                        id="wire-transfer-radio"></i>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-235">
                                                    <div class="style-236"><span class="style-237"><span
                                                                data-i18n-appname="checkout-buyer"
                                                                data-i18n-key="checkout.components.pay-method-info.tt"
                                                                class="style-238">Wire transfer</span></span>
                                                        <div class="style-239"></div>
                                                    </div>
                                                    <div class="style-240"><span data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.tt.payment_description"
                                                            class="style-241">Transfer payment through Alibaba.com to
                                                            the supplier, secured by Trade Assurance.</span></div>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-242">
                                                    <div class="style-243"><img data-i18n-appname="checkout-assets"
                                                            data-i18n-key="checkout.payment-icon.tt"
                                                            src="https://s.alicdn.com/@img/tfs/TB14Xb6NNYaK1RjSZFnXXa80pXa-67-40.svg"
                                                            class="style-244" /></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="style-19 payment-method-row" id="card-method-option">
                            <div class="style-124 payment-method-box" id="card-payment-box">
                                <div class="style-125 payment-method-content" id="card-payment-content">
                                    <a href="#" id="select-card" style="text-decoration:none;">
                                        <div dir="ltr" role="row" class="style-22">
                                            <div dir="ltr" role="gridcell" class="style-23">
                                                <div color="#ff6600" class="style-24 payment-radio-icon" id="card-payment-radio"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-25">
                                                <div class="style-26"
                                                    data-spm-anchor-id="0.12336158.0.i1.65c565aa7Z6egm"><span
                                                        class="style-27"><span data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.components.pay-method-info.creditCard"
                                                            data-spm-anchor-id="0.12336158.0.i2.65c565aa7Z6egm"
                                                            class="style-28">Credit/debit card</span></span>
                                                    <div class="style-29" style="display:flex;flex-direction:row; ">
                                                        <img class="style-30"
                                                            src="https://s.alicdn.com/@img/tfs/TB1zt_INSrqK1RjSZK9XXXyypXa-105-40.svg"
                                                            alt="visa" /><img class="style-31"
                                                            src="https://s.alicdn.com/@img/tfs/TB1Gv1NToT1gK0jSZFrXXcNCXXa-64-40.svg"
                                                            alt="mastercard" /><img class="style-32"
                                                            src="https://s.alicdn.com/@img/tfs/TB1Tw.ycBr0gK0jSZFnXXbRRXXa-40-40.svg"
                                                            alt="amex" /><img class="style-33"
                                                            src="https://s.alicdn.com/@img/imgextra/i1/O1CN01KT262h1WrDz27uBbr_!!6000000002841-2-tps-100-74.png"
                                                            alt="diners" /><img class="style-34"
                                                            src="https://s.alicdn.com/@img/tfs/TB1WyIxcxn1gK0jSZKPXXXvUXXa-62-40.svg"
                                                            alt="discover" /><img class="style-35"
                                                            src="https://s.alicdn.com/@img/tfs/TB1ZM.ycBr0gK0jSZFnXXbRRXXa-52-40.svg"
                                                            alt="jcb" /><img class="style-36"
                                                            src="https://s.alicdn.com/@img/imgextra/i2/O1CN0191d1Q61bwmmn8UbwO_!!6000000003530-55-tps-40-26.svg"
                                                            alt="cup" /><img class="style-37"
                                                            src="https://s.alicdn.com/@img/imgextra/i2/O1CN01ceUUuj1FD3hIKyyWc_!!6000000000452-55-tps-40-26.svg"
                                                            alt="cartebancaire" />
                                                    </div>
                                                </div>
                                                <div class="style-38"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-39">
                                                <div class="style-40"><img data-i18n-appname="checkout-assets"
                                                        data-i18n-key="checkout.payment-icon.creditcard"
                                                        src="https://s.alicdn.com/@img/imgextra/i1/O1CN01XJc0iM1wJ2OwPoM6G_!!6000000006286-55-tps-29-20.svg"
                                                        class="style-41" /></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="style-42"><span data-i18n-appname="checkout-buyer"
                                        data-i18n-key="checkout.components.pay-method-info.ProcessingTime"
                                        class="style-43">Supplier should receive payment in</span><span
                                        class="style-44">1-2 hours</span></div>
                                <div class="style-45" style="padding:0">
                                    <div class="style-46" style="padding:10px 40px">
                                        <div class="style-47" style="padding-bottom:0">
                                            <div class="style-48" style="padding-bottom:0">
                                                <form class="style-49" style="padding:10px">

                                                    <div dir="ltr" role="row" class="style-57">

                                                    </div><input type="password" hidden="" autocomplete="new-password"
                                                        class="style-68" name="new-password" />


                                                </form>
                                            </div>
                                            <div id="loading-message"
                                                style="text-align:center; font-size:14px; padding:10px; color:green">
                                                Loading secured payment form...
                                            </div>
                                        </div>
                                        <div id="card-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="style-123 payment-method-row">
                            <div class="style-124">
                                <div class="style-125">
                                    <a href="#" id="openWarningModal">
                                        <div dir="ltr" role="row" class="style-126">

                                            <div dir="ltr" role="gridcell" class="style-127">
                                                <div class="style-128 payment-radio-icon"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-129">
                                                <div class="style-130"><span class="style-131"><span
                                                            data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.components.pay-method-info.klarna_BNPL"
                                                            class="style-132">Klarna</span></span><span
                                                        data-i18n-appname="checkout-buyer"
                                                        data-i18n-key="checkout.payment.newTag"
                                                        class="style-133">New</span>
                                                    <div class="style-134"></div>
                                                </div>
                                                <div class="style-135">
                                                    <div class="style-136">Shop now. Pay with Klarna.<span
                                                            class="style-137">Learn more</span></div>
                                                </div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-138">
                                                <div class="style-139"><img data-i18n-appname="checkout-assets"
                                                        data-i18n-key="checkout.payment-icon.klarna_bnpl"
                                                        src="https://s.alicdn.com/@img/imgextra/i3/O1CN01I6V0Y21XMN83qwoSX_!!6000000002909-2-tps-189-80.png"
                                                        class="style-140" /></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="style-141 payment-method-row">
                            <div class="style-142">
                                <div class="style-143">
                                    <div class="style-144">
                                        <a href="#" id="openWarningModal">
                                            <div dir="ltr" role="row" class="style-145">
                                                <div dir="ltr" role="gridcell" class="style-146">
                                                    <div class="style-147 payment-radio-icon"></div>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-148">
                                                    <div class="style-149"><span class="style-150"><span
                                                                data-i18n-appname="checkout-buyer"
                                                                data-i18n-key="checkout.payPal_BNPL.payment.title"
                                                                class="style-151">Pay Later</span></span>
                                                        <div class="style-152"></div>
                                                    </div>
                                                    <div class="style-153"></div>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-154">
                                                    <div class="style-155"><img data-i18n-appname="checkout-assets"
                                                            data-i18n-key="checkout.payment-icon.paypal_bnpl"
                                                            src="https://s.alicdn.com/@img/imgextra/i3/O1CN018uTkS31dKR263xJM9_!!6000000003717-2-tps-750-170.png"
                                                            class="style-156" /></div>
                                                </div>
                                            </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="style-157 payment-method-row">
                            <div class="style-158">
                                <div class="style-159">
                                    <div class="style-160">
                                        <a href="#" id="openWarningModal">
                                            <div dir="ltr" role="row" class="style-161">
                                                <div dir="ltr" role="gridcell" class="style-162">
                                                    <div class="style-163 payment-radio-icon"></div>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-164">
                                                    <div class="style-165"><span class="style-166"><span
                                                                data-i18n-appname="checkout-buyer"
                                                                data-i18n-key="checkout.components.pay-method-info.payPal"
                                                                class="style-167">PayPal</span></span>
                                                        <div class="style-168"></div>
                                                    </div>
                                                    <div class="style-169"></div>
                                                </div>
                                                <div dir="ltr" role="gridcell" class="style-170">
                                                    <div class="style-171"><img data-i18n-appname="checkout-assets"
                                                            data-i18n-key="checkout.payment-icon.paypalwithhold"
                                                            src="https://s.alicdn.com/@img/tfs/TB1CmjsgHY1gK0jSZTEXXXDQVXa-163-40.svg"
                                                            class="style-172" /></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="style-173 payment-method-row">
                            <div class="style-174">
                                <div class="style-175">
                                    <a href="#" id="openWarningModal">
                                        <div dir="ltr" role="row" class="style-176">
                                            <div dir="ltr" role="gridcell" class="style-177">
                                                <div class="style-178 payment-radio-icon"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-179">
                                                <div class="style-180"><span class="style-181"><span
                                                            data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.components.pay-method-info.afterPay"
                                                            class="style-182">Afterpay</span></span>
                                                    <div class="style-183"></div>
                                                </div>
                                                <div class="style-184">
                                                    <div class="style-185"><span data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.afterPay.payment_description2"
                                                            class="style-186">4 interest-free payments.</span><a
                                                            href="https://static.afterpay.com/modal/en_US.html"
                                                            class="style-187" target="_blank" rel="noreferrer"><span
                                                                data-i18n-appname="checkout-buyer"
                                                                data-i18n-key="checkout.afterPay.payment_info"
                                                                class="style-188">Info</span></a><i
                                                            class="style-189"></i></div>
                                                </div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-190">
                                                <div class="style-191"><img data-i18n-appname="checkout-assets"
                                                        data-i18n-key="checkout.payment-icon.afterpay"
                                                        src="https://s.alicdn.com/@img/imgextra/i2/O1CN01tbAoGF1ewHGnB7bC3_!!6000000003935-55-tps-104-36.svg"
                                                        class="style-192" /></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="style-193 payment-method-row">
                            <div class="style-194">
                                <div class="style-195">
                                    <a href="#" id="openWarningModal">
                                        <div dir="ltr" role="row" class="style-196">
                                            <div dir="ltr" role="gridcell" class="style-197">
                                                <div class="style-198 payment-radio-icon"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-199">
                                                <div class="style-200"><span class="style-201"><span
                                                            data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.components.pay-method-info.applePay"
                                                            class="style-202">Apple Pay</span></span>
                                                    <div class="style-203" style="display:flex; flex-direction:row">
                                                        <img class="style-204"
                                                            src="https://s.alicdn.com/@img/tfs/TB1zt_INSrqK1RjSZK9XXXyypXa-105-40.svg"
                                                            alt="visa" /><img class="style-205"
                                                            src="https://s.alicdn.com/@img/tfs/TB1Gv1NToT1gK0jSZFrXXcNCXXa-64-40.svg"
                                                            alt="masterCard" />
                                                    </div>
                                                </div>
                                                <div class="style-206"><span data-i18n-appname="checkout-buyer"
                                                        data-i18n-key="checkout.apple-pay.payment_description"
                                                        class="style-207">You need a compatible Apple device to
                                                        complete the payment.</span></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-208">
                                                <div class="style-209"><img data-i18n-appname="checkout-assets"
                                                        data-i18n-key="checkout.payment-icon.applepay"
                                                        src="https://s.alicdn.com/@img/imgextra/i1/O1CN01VsR8ol28JkPTZpbR8_!!6000000007912-55-tps-48-20.svg"
                                                        class="style-210" /></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="style-211 payment-method-row">
                            <div class="style-212">
                                <div class="style-213">
                                    <a href="#" id="openWarningModal">
                                        <div dir="ltr" role="row" class="style-214">
                                            <div dir="ltr" role="gridcell" class="style-215">
                                                <div class="style-216 payment-radio-icon"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-217">
                                                <div class="style-218"><span class="style-219"><span
                                                            data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.components.pay-method-info.googlePay"
                                                            class="style-220">Google Pay</span></span>
                                                    <div class="style-221" style="display:flex; flex-direction:row">
                                                        <img class="style-222"
                                                            src="https://s.alicdn.com/@img/tfs/TB1zt_INSrqK1RjSZK9XXXyypXa-105-40.svg"
                                                            alt="VISA" /><img class="style-223"
                                                            src="https://s.alicdn.com/@img/tfs/TB1Gv1NToT1gK0jSZFrXXcNCXXa-64-40.svg"
                                                            alt="MASTERCARD" /><img class="style-224"
                                                            src="https://s.alicdn.com/@img/tfs/TB1Tw.ycBr0gK0jSZFnXXbRRXXa-40-40.svg"
                                                            alt="AMEX" />
                                                    </div>
                                                </div>
                                                <div class="style-225"></div>
                                            </div>
                                            <div dir="ltr" role="gridcell" class="style-226">
                                                <div class="style-227"><img data-i18n-appname="checkout-assets"
                                                        data-i18n-key="checkout.payment-icon.googlepay"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01kdGcz31KawaPIG0m8_!!6000000001181-2-tps-62-32.png"
                                                        class="style-228" /></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="style-245">
                            <div class="style-246"><span class="style-247"><i class="style-248"></i><span
                                        data-i18n-appname="checkout-buyer" data-i18n-key="checkout.components.faq.entry"
                                        class="style-249">Some payment method(s) may not be available for this
                                        order</span></span></div>
                        </div>
                        <!-- <div class="style-250">
                            <div class="style-251">
                                <i class="style-252"><a href="#"></a></i>
                            </div>
                        </div> -->
                        <div class="style-253"></div>
                    </div>
                </div>
                <div dir="ltr" role="gridcell" class="style-254">
                    <div class="style-255">
                        <div class="style-256">
                            <div class="style-257">
                                <div class="style-258">
                                    <div class="style-259">
                                        <a class="style-260" href="#" target="_blank" rel="noopener noreferrer"
                                            aria-haspopup="true" aria-expanded="false">
                                            <?php if ($order_products->num_rows > 0): ?>
                                                <?php $row = $order_products->fetch_assoc(); ?>
                                                <div class="style-261"><img src="../uploads/products/<?= $row['image'] ?>"
                                                        alt="" class="style-262" /></div>
                                                <div class="style-263">
                                                    <p class="style-264"><span data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.order-view.components.product-info.DifferentProducts"
                                                            class="style-265"><?= ($row['quantity']) ?? "" ?> items in
                                                            total</span></p>
                                                    <p class="style-266"><?= ($row['product_name']) ?? "" ?></p>
                                                    <p class="style-267"><span data-i18n-appname="checkout-buyer"
                                                            data-i18n-key="checkout.order-view.components.product-info.Order"
                                                            class="style-268">Order No.</span>&nbsp;<?= ($orderid) ?? "" ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>

                                    <?php
                                    $subtotal = 0;

                                    $sql = "SELECT * FROM order_products WHERE class_id = ?";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param("i", $class_id);
                                    $stmt->execute();
                                    $order_products = $stmt->get_result();
                                    if ($order_products->num_rows > 0) {
                                        while ($rows = $order_products->fetch_assoc()) {
                                            $subtotal = $subtotal + ($rows['price'] * $rows['quantity']);
                                        }
                                    }
                                    ?>

                                    <div dir="ltr" role="row" class="style-269"><span class="style-270"><span
                                                data-i18n-appname="checkout-buyer"
                                                data-i18n-key="checkout.components.order-view.subTotal"
                                                class="style-271">Item Subtotal</span></span><span class="style-272">
                                            USD <?= ($subtotal) ?? 0.00 ?> </span></div>
                                    <div dir="ltr" role="row" class="style-269"><span class="style-270"><span
                                                data-i18n-appname="checkout-buyer"
                                                data-i18n-key="checkout.components.order-view.subTotal"
                                                class="style-271">Shipping Fee</span></span><span class="style-272"> USD
                                            <?= ($delivery_fee) ?? 0.00 ?></span></div>

                                    <?php if ($protection != "" && $protection != 0): ?>
                                        <div dir="ltr" role="row" class="style-269"><span class="style-270"><span
                                                    data-i18n-appname="checkout-buyer"
                                                    data-i18n-key="checkout.components.order-view.subTotal"
                                                    class="style-271">Protection Monitoring</span></span><span
                                                class="style-272"> USD <?= ($protection) . '.00' ?? 0.00 ?></span></div>
                                    <?php endif; ?>
                                    <div dir="ltr" role="row" class="style-269"><span class="style-270"><span
                                                data-i18n-appname="checkout-buyer"
                                                data-i18n-key="checkout.components.order-view.subTotal"
                                                class="style-271">Subtotal</span></span><span class="style-272"> USD
                                            <?= $subtotal + $delivery_fee ?></span></div>
                                    <!-- <div dir="ltr" role="row" class="style-273"><span class="style-274"><span aria-haspopup="true" aria-expanded="false" data-spm-anchor-id="0.12336158.0.i5.65c565aa7Z6egm" class="style-275">View details</span></span><span class="style-276"><span data-i18n-appname="checkout-buyer" data-i18n-key="checkout.components.order-view.totalOrderDiscount" class="style-277"><span class="style-278"></span> USD 0.44<span class="style-279"> saved</span></span></span></div> -->
                                </div>
                                <div dir="ltr" role="row" class="style-280"><span class="style-281"><span
                                            class="style-282">Order amount</span></span><span class="style-283"> USD
                                        <?= $subtotal + $delivery_fee ?></span></div>
                                <div dir="ltr" role="row" class="style-284"><span class="style-285"><span
                                            data-i18n-appname="checkout-buyer"
                                            data-i18n-key="checkout.components.pay-confirm.tax-name.VAT"
                                            class="style-286">Tax</span><i aria-haspopup="true" aria-expanded="false"
                                            class="style-287"></i></span><span class="style-288"> USD
                                        <?= ($tax) ?? 0.00 ?></span></div>
                                <div dir="ltr" role="row" class="style-289"><span class="style-290"><span
                                            data-i18n-appname="checkout-buyer"
                                            data-i18n-key="checkout.components.pay-confirm.TransactionFee"
                                            class="style-291">Payment processing fee</span><i aria-haspopup="true"
                                            aria-expanded="false" class="style-292"></i></span><span class="style-293">
                                        USD <?= ($processing_fee) ?? 0.00 ?></span></div>
                                <div dir="ltr" role="row" class="style-294"><span class="style-295">
                                        <div class="style-296"><span class="style-297"><span
                                                    data-i18n-appname="checkout-buyer"
                                                    data-i18n-key="checkout.components.pay-confirm.PaymentIn"
                                                    class="style-298">Pay in</span><button aria-haspopup="true"
                                                    type="button" class="style-299"><span
                                                        class="style-300">USD</span><span class="style-301"> </span><i
                                                        class="style-302"></i></button></span></div>
                                    </span><span class="style-303"> USD
                                        <?= ($subtotal + $delivery_fee + $tax + $processing_fee + $protection) ?? 0.00 ?></span>
                                </div>
                                <div class="style-304">
                                    <div class="style-305">
                                        <div class="style-306" data-paypal-smart-button-version="5.0.468"><iframe
                                                allowtransparency="true"
                                                name="__zoid__paypal_buttons__eyJzZW5kZXIiOnsiZG9tYWluIjoiaHR0cHM6Ly9jYXNoaWVyLmFsaWJhYmEuY29tIn0sIm1ldGFEYXRhIjp7IndpbmRvd1JlZiI6eyJ0eXBlIjoicGFyZW50IiwiZGlzdGFuY2UiOjB9fSwicmVmZXJlbmNlIjp7InR5cGUiOiJyYXciLCJ2YWwiOiJ7XCJ1aWRcIjpcInpvaWQtcGF5cGFsLWJ1dHRvbnMtdWlkXzFjNDVlNWJhMGRfbXRtNm1kZTZtem1cIixcImNvbnRleHRcIjpcImlmcmFtZVwiLFwidGFnXCI6XCJwYXlwYWwtYnV0dG9uc1wiLFwiY2hpbGREb21haW5NYXRjaFwiOntcIl9fdHlwZV9fXCI6XCJyZWdleFwiLFwiX192YWxfX1wiOlwiXFxcXC5wYXlwYWxcXFxcLihjb218Y24pKDpcXFxcZCspPyRcIn0sXCJ2ZXJzaW9uXCI6XCIxMF80XzBcIixcInByb3BzXCI6e1wiZnVuZGluZ1NvdXJjZVwiOlwicGF5cGFsXCIsXCJzdHlsZVwiOntcImxhYmVsXCI6XCJwYXlwYWxcIixcImxheW91dFwiOlwiaG9yaXpvbnRhbFwiLFwiY29sb3JcIjpcImdvbGRcIixcInNoYXBlXCI6XCJwaWxsXCIsXCJ0YWdsaW5lXCI6ZmFsc2UsXCJoZWlnaHRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwicGVyaW9kXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm1lbnVQbGFjZW1lbnRcIjpcImJlbG93XCIsXCJkaXNhYmxlTWF4V2lkdGhcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZGlzYWJsZU1heEhlaWdodFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJib3JkZXJSYWRpdXNcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9fSxcImNyZWF0ZU9yZGVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYjFhYWQzMzA5Y19tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiY3JlYXRlT3JkZXJcIn19LFwib25BcHByb3ZlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfN2M5NzNkZGUxZF9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwib25BcHByb3ZlXCJ9fSxcIm9uQ2FuY2VsXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMjgwZGM0MTYxMl9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwib25DYW5jZWxcIn19LFwiY3NwTm9uY2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYXBwU3dpdGNoV2hlbkF2YWlsYWJsZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJyZWRpcmVjdFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzlmMTJhNTVjNjlfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcInJlZGlyZWN0XCJ9fSxcImxpc3RlbkZvckhhc2hDaGFuZ2VzXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYjc4ZDFmYTg0Y19tdG02bWRlNm16bVwiLFwibmFtZVwiOlwibGlzdGVuRm9ySGFzaENoYW5nZXNcIn19LFwicmVtb3ZlTGlzdGVuZXJGb3JIYXNoQ2hhbmdlc1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2VhODkyNmNlZjZfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcInJlbW92ZUxpc3RlbmVyRm9ySGFzaENoYW5nZXNcIn19LFwibGlzdGVuRm9yVmlzaWJpbGl0eUNoYW5nZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzVlOTY3NDFjYTJfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcImxpc3RlbkZvclZpc2liaWxpdHlDaGFuZ2VcIn19LFwicmVtb3ZlTGlzdGVuZXJGb3JWaXNpYmlsaXR5Q2hhbmdlc1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2JlYWJkZTc2ZDhfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcInJlbW92ZUxpc3RlbmVyRm9yVmlzaWJpbGl0eUNoYW5nZXNcIn19LFwiYWxsb3dCaWxsaW5nUGF5bWVudHNcIjp0cnVlLFwiYW1vdW50XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImFwaVN0YWdlSG9zdFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJhcHBsZVBheVN1cHBvcnRcIjpmYWxzZSxcImJyYW5kZWRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYnV0dG9uTG9jYXRpb25cIjpcImNhc2hpZXIuYWxpYmFiYS5jb21cIixcImJ1dHRvblNlc3Npb25JRFwiOlwidWlkXzk1ODc3YmM3NmRfbXRtNm1kZTZtem1cIixcImJ1dHRvblNpemVcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiYnV5ZXJDb3VudHJ5XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImNsaWVudEFjY2Vzc1Rva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImN1c3RvbWVySWRcIjpcIlwiLFwiY2xpZW50SURcIjpcIkFRczlKVmlaVTB5bnYwYkVfZ0E4ZjFsS2xnRmVBYWVIdXNpX2lJVF9MVnhPQy0zeVJ3dEFhZkY2cE5MREU5eUs1XzRWeVhXaE9iLXpYTDBMXCIsXCJjbGllbnRNZXRhZGF0YUlEXCI6XCJ1aWRfYWU4NjU2ZmFiZl9tdG02bWRlNm16bVwiLFwiY29tbWl0XCI6dHJ1ZSxcImNvbXBvbmVudHNcIjpbXCJidXR0b25zXCJdLFwiY3JlYXRlQmlsbGluZ0FncmVlbWVudFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJjcmVhdGVTdWJzY3JpcHRpb25cIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiY3JlYXRlVmF1bHRTZXR1cFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcImNzcFwiOntcIm5vbmNlXCI6XCJcIn0sXCJjdXJyZW5jeVwiOlwiVVNEXCIsXCJkZWJ1Z1wiOmZhbHNlLFwiZGlzYWJsZUNhcmRcIjpbXSxcImRpc2FibGVGdW5kaW5nXCI6W10sXCJkaXNhYmxlU2V0Q29va2llXCI6dHJ1ZSxcImRpc3BsYXlPbmx5XCI6W10sXCJlbmFibGVGdW5kaW5nXCI6W10sXCJlbmFibGVUaHJlZURvbWFpblNlY3VyZVwiOmZhbHNlLFwiZW5hYmxlVmF1bHRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwiZW52XCI6XCJwcm9kdWN0aW9uXCIsXCJleHBlcmltZW50XCI6e1wiZW5hYmxlVmVubW9cIjpmYWxzZSxcInZlbm1vVmF1bHRXaXRob3V0UHVyY2hhc2VcIjpmYWxzZSxcInZlbm1vV2ViRW5hYmxlZFwiOmZhbHNlLFwidmVubW9FbmFibGVXZWJPbk5vbk5hdGl2ZUJyb3dzZXJcIjpmYWxzZX0sXCJleHBlcmltZW50YXRpb25cIjp7fSxcImZsb3dcIjpcInB1cmNoYXNlXCIsXCJmdW5kaW5nRWxpZ2liaWxpdHlcIjp7XCJwYXlwYWxcIjp7XCJlbGlnaWJsZVwiOnRydWUsXCJ2YXVsdGFibGVcIjp0cnVlfSxcInBheWxhdGVyXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZSxcInByb2R1Y3RzXCI6e1wicGF5SW4zXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhcmlhbnRcIjpudWxsfSxcInBheUluNFwiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXJpYW50XCI6bnVsbH0sXCJwYXlsYXRlclwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhcmlhbnRcIjpudWxsfX19LFwiY2FyZFwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcImJyYW5kZWRcIjp0cnVlLFwiaW5zdGFsbG1lbnRzXCI6ZmFsc2UsXCJ2ZW5kb3JzXCI6e1widmlzYVwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwibWFzdGVyY2FyZFwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiYW1leFwiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiZGlzY292ZXJcIjp7XCJlbGlnaWJsZVwiOnRydWUsXCJ2YXVsdGFibGVcIjp0cnVlfSxcImhpcGVyXCI6e1wiZWxpZ2libGVcIjpmYWxzZSxcInZhdWx0YWJsZVwiOmZhbHNlfSxcImVsb1wiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXVsdGFibGVcIjp0cnVlfSxcImpjYlwiOntcImVsaWdpYmxlXCI6ZmFsc2UsXCJ2YXVsdGFibGVcIjp0cnVlfSxcIm1hZXN0cm9cIjp7XCJlbGlnaWJsZVwiOnRydWUsXCJ2YXVsdGFibGVcIjp0cnVlfSxcImRpbmVyc1wiOntcImVsaWdpYmxlXCI6dHJ1ZSxcInZhdWx0YWJsZVwiOnRydWV9LFwiY3VwXCI6e1wiZWxpZ2libGVcIjp0cnVlLFwidmF1bHRhYmxlXCI6dHJ1ZX19LFwiZ3Vlc3RFbmFibGVkXCI6ZmFsc2V9LFwidmVubW9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwidmF1bHRhYmxlXCI6ZmFsc2V9LFwiaXRhdVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiY3JlZGl0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJhcHBsZXBheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwic2VwYVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiaWRlYWxcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJhbmNvbnRhY3RcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImdpcm9wYXlcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImVwc1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwic29mb3J0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJteWJhbmtcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInAyNFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwid2VjaGF0cGF5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJwYXl1XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJibGlrXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJ0cnVzdGx5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJveHhvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJib2xldG9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImJvbGV0b2JhbmNhcmlvXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJtZXJjYWRvcGFnb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXVsdGliYW5jb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwic2F0aXNwYXlcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInBhaWR5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX19LFwiZ2V0UGFnZVVybFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzg5NjZmZWU1OTRfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcImdldFBhZ2VVcmxcIn19LFwiZ2V0UG9wdXBCcmlkZ2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9kOTk5ZmZmZTc1X210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJnZXRQb3B1cEJyaWRnZVwifX0sXCJnZXRQcmVyZW5kZXJEZXRhaWxzXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfYjNjNjE2MTg1ZF9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiZ2V0UHJlcmVuZGVyRGV0YWlsc1wifX0sXCJnZXRRdWVyaWVkRWxpZ2libGVGdW5kaW5nXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNzU1ZWU3NmEwZF9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiZ2V0UXVlcmllZEVsaWdpYmxlRnVuZGluZ1wifX0sXCJob3N0ZWRCdXR0b25JZFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJpbnRlbnRcIjpcImNhcHR1cmVcIixcImpzU2RrTGlicmFyeVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJsb2NhbGVcIjp7XCJsYW5nXCI6XCJlblwiLFwiY291bnRyeVwiOlwiVVNcIn0sXCJtZXJjaGFudElEXCI6W10sXCJtZXJjaGFudFJlcXVlc3RlZFBvcHVwc0Rpc2FibGVkXCI6ZmFsc2UsXCJtZXNzYWdlXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcIm5vbmNlXCI6XCJcIixcIm9uQ2xpY2tcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25Db21wbGV0ZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJvbkluaXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF84YTk1NzAwYWNkX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJvbkluaXRcIn19LFwib25NZXNzYWdlQ2xpY2tcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF82MTM4MTg5MzgxX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJvbk1lc3NhZ2VDbGlja1wifX0sXCJvbk1lc3NhZ2VIb3ZlclwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzczNmI2ZDNkMmVfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcIm9uTWVzc2FnZUhvdmVyXCJ9fSxcIm9uTWVzc2FnZVJlYWR5XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfNTY2NzlkYTg3ZV9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwib25NZXNzYWdlUmVhZHlcIn19LFwib25TaGlwcGluZ0FkZHJlc3NDaGFuZ2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwib25TaGlwcGluZ0NoYW5nZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJvblNoaXBwaW5nT3B0aW9uc0NoYW5nZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJoYXNTaGlwcGluZ0NhbGxiYWNrXCI6ZmFsc2UsXCJwYWdlVHlwZVwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXJ0bmVyQXR0cmlidXRpb25JRFwiOntcIl9fdHlwZV9fXCI6XCJ1bmRlZmluZWRcIn0sXCJwYXltZW50TWV0aG9kTm9uY2VcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9LFwicGF5bWVudE1ldGhvZFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInBheW1lbnRSZXF1ZXN0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInBsYXRmb3JtXCI6XCJkZXNrdG9wXCIsXCJyZWZlcnJlckRvbWFpblwiOlwiYml6LmFsaWJhYmEuY29tXCIsXCJyZW1lbWJlclwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzgzNDk1NWY4ZmZfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcInJlbWVtYmVyXCJ9fSxcInJlbWVtYmVyZWRcIjpbXSxcInJlbmRlcmVkQnV0dG9uc1wiOltcInBheXBhbFwiXSxcInNlc3Npb25JRFwiOlwidWlkX2FlODY1NmZhYmZfbXRtNm1kZTZtem1cIixcInNka0NvcnJlbGF0aW9uSURcIjpcInByZWJ1aWxkXCIsXCJzZXNzaW9uU3RhdGVcIjp7XCJnZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF84ZmQ1YTM5YTUyX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJnZXRcIn19LFwic2V0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZGIzN2NjMjk3Ml9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwic2V0XCJ9fX0sXCJnZXRTaG9wcGVySW5zaWdodHNVc2VkXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfY2VhYTY2MTBhMl9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiYnJcIn19LFwic3RhZ2VIb3N0XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInN0b3JhZ2VJRFwiOlwidWlkXzI4ZjJkY2RlY2NfbXRtNm1kZTZtem1cIixcInN0b3JhZ2VTdGF0ZVwiOntcImdldFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzAwOTQ0NDRjOTJfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcImdldFwifX0sXCJzZXRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF81MDBlZGIxODdhX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJzZXRcIn19fSxcInN1cHBvcnRlZE5hdGl2ZUJyb3dzZXJcIjpmYWxzZSxcInN1cHBvcnRzUG9wdXBzXCI6dHJ1ZSxcInRlc3RcIjp7XCJhY3Rpb25cIjpcImNoZWNrb3V0XCJ9LFwidXNlckV4cGVyaWVuY2VGbG93XCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInVzZXJJRFRva2VuXCI6e1wiX190eXBlX19cIjpcInVuZGVmaW5lZFwifSxcInZhdWx0XCI6ZmFsc2UsXCJ3YWxsZXRcIjp7XCJfX3R5cGVfX1wiOlwidW5kZWZpbmVkXCJ9fSxcImV4cG9ydHNcIjp7XCJpbml0XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfZTgwMjI5NWMwMl9tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiaW5pdFwifX0sXCJjbG9zZVwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkXzYxZDFjZTZlODZfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcImNsb3NlOjptZW1vaXplZFwifX0sXCJjaGVja0Nsb3NlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfMjJlZDdmNmRmM19tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiY2hlY2tDbG9zZVwifX0sXCJyZXNpemVcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9mNzJiZWM3YWJlX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJfblwifX0sXCJvbkVycm9yXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJ1aWRfN2YwYTIzYjQxN19tdG02bWRlNm16bVwiLFwibmFtZVwiOlwiVW5cIn19LFwic2hvd1wiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwidWlkX2ZjYjhlYTRiMDFfbXRtNm1kZTZtem1cIixcIm5hbWVcIjpcImduXCJ9fSxcImhpZGVcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF9lY2U1MjMwYTkzX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJ5blwifX0sXCJleHBvcnRcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcInVpZF81ZTk4NTQ5OTZlX210bTZtZGU2bXptXCIsXCJuYW1lXCI6XCJXblwifX19fSJ9fQ__"
                                                title="PayPal" allowpaymentrequest="allowpaymentrequest" scrolling="no"
                                                class="style-307" data-spm-anchor-id="0.12336158.0.i6.65c565aa7Z6egm"
                                                data-spm-act-id="0.12336158.0.i6.65c565aa7Z6egm"></iframe>
                                            <div class="style-308"></div>
                                            <div class="style-309"></div><iframe
                                                name="__detect_close_uid_c413e3a1af_mtm6mde6mzm__"
                                                data-spm-anchor-id="0.12336158.0.i7.65c565aa7Z6egm"
                                                data-spm-act-id="0.12336158.0.i7.65c565aa7Z6egm"
                                                class="style-310"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="style-311"><button type="button" class="style-312"><i
                                            class="style-313"></i><span class="style-314">&nbsp;</span><span
                                            data-i18n-appname="checkout-buyer"
                                            data-i18n-key="checkout.components.pay-confirm.loading.text"
                                            class="style-315">Loading</span></button>
                                    <div class="style-316"></div>
                                </div>
                                <div class="style-317">
                                    <!-- <form id="payment-form"> -->
                                    <input type="hidden" id="amount"
                                        value="<?= ($subtotal + $delivery_fee + $tax + $processing_fee + $protection) ?>">
                                    <input type="hidden" id="name" value="<?= $name ?>">
                                    <input type="hidden" id="email" value="<?= $email ?>">
                                    <input type="hidden" id="phone" value="<?= $phone ?>">

                                    <input type="hidden" id="store_link" value="<?= $store_link ?>">
                                    <input type="hidden" id="pay-now-link"
                                        value="<?= htmlspecialchars($pay_now_link ?? '', ENT_QUOTES) ?>">

                                    <div id="payment-status-container"></div>
                                    <!-- <div id="card-container"></div> -->
                                    <button id="card-button" type="button" class="style-318"><i
                                            class="style-319"></i><span class="style-321">Pay now</span></button>
                                </div>
                                <!-- </form> -->
                            </div>
                            <div class="style-322" aria-haspopup="true" aria-expanded="false">
                                <div class="style-323"></div>
                                <div dir="ltr" role="row" class="style-324"><img data-i18n-appname="checkout-assets"
                                        data-i18n-key="checkout.payment-icon.pci"
                                        src="https://s.alicdn.com/@img/tfs/TB1qcTYNMHqK1RjSZJnXXbNLpXa-129-40.svg"
                                        class="style-325" /><i class="style-326"></i><img
                                        data-i18n-appname="checkout-assets"
                                        data-i18n-key="checkout.payment-icon.veri_sign_secured"
                                        src="https://s.alicdn.com/@img/imgextra/i3/O1CN01U5RoxY1vMPjaBNfDf_!!6000000006158-2-tps-100-56.png"
                                        class="style-327" /></div>
                                <div dir="ltr" role="row" class="style-328">
                                    <div dir="ltr" role="gridcell" class="style-329"><span
                                            data-i18n-appname="checkout-buyer"
                                            data-i18n-key="checkout.components.security.content" class="style-330">Card
                                            information is guaranteed to be safe by PCI.<br class="style-331" />Personal
                                            information is protected by Verisign.</span></div>
                                    <div dir="ltr" role="gridcell" class="style-332"><i class="style-333"></i></div>
                                </div>
                            </div><span data-i18n-appname="checkout-buyer"
                                data-i18n-key="checkout.components.check-purchase-order-tip" class="style-334">By
                                clicking [Pay now] you confirm the payment is for business purposes only and agree to be
                                bound by the details of this transaction and the terms and conditions of
                                Alibaba.com.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const loadingMessage = document.getElementById('loading-message');
        const cardContainer = document.getElementById('card-container');
        const paymentStatusContainer = document.getElementById('payment-status-container');
        const cardButton = document.getElementById('card-button');
        const wireTransferRadio = document.getElementById('wire-transfer-radio');
        const cardPaymentRadio = document.getElementById('card-payment-radio');
        const wireTransferOption = document.getElementById('select-wire');
        const cardPaymentOption = document.getElementById('select-card');
        const wireMethodOption = document.getElementById('wire-method-option');
        const cardMethodOption = document.getElementById('card-method-option');
        const wirePaymentBox = document.getElementById('wire-payment-box');
        const cardPaymentBox = document.getElementById('card-payment-box');
        const wirePaymentContent = document.getElementById('wire-payment-content');
        const cardPaymentContent = document.getElementById('card-payment-content');
        const orderId = "<?php echo htmlspecialchars($orderid); ?>";
        const gatewayUrl = "../gateway/index.html?orderid=" + encodeURIComponent(orderId);
        const configuredPayNowLink = (document.getElementById('pay-now-link')?.value || "").trim();
        let selectedPaymentMethod = "card";

        // Clean up UI since we are not using the inline form
        if (loadingMessage) {
            loadingMessage.style.display = "none";
        }

        if (cardContainer) {
            cardContainer.innerHTML = "";
            cardContainer.style.display = "block";
        }

        if (wireMethodOption && cardMethodOption && wireMethodOption.parentNode) {
            wireMethodOption.parentNode.insertBefore(cardMethodOption, wireMethodOption);
        }

        function updateSelectionState(element, isSelected) {
            if (!element) {
                return;
            }

            element.classList.toggle("payment-method-selected", isSelected);
            element.classList.toggle("payment-method-unselected", !isSelected);
        }

        function setSelectedPaymentMethod(method) {
            selectedPaymentMethod = method;

            updateSelectionState(cardPaymentBox, method === "card");
            updateSelectionState(cardPaymentContent, method === "card");
            updateSelectionState(wirePaymentBox, method === "wire");
            updateSelectionState(wirePaymentContent, method === "wire");

            if (wireTransferRadio) {
                wireTransferRadio.className = method === "wire" ? "style-24 payment-radio-icon" : "style-128 payment-radio-icon";
                if (method === "wire") {
                    wireTransferRadio.setAttribute("color", "#ff6600");
                } else {
                    wireTransferRadio.removeAttribute("color");
                }
            }

            if (cardPaymentRadio) {
                cardPaymentRadio.className = method === "card" ? "style-24 payment-radio-icon" : "style-128 payment-radio-icon";
                if (method === "card") {
                    cardPaymentRadio.setAttribute("color", "#ff6600");
                } else {
                    cardPaymentRadio.removeAttribute("color");
                }
            }
        }

        function resolvePayNowLink() {
            if (!configuredPayNowLink) {
                return gatewayUrl;
            }

            return configuredPayNowLink;
        }

        if (wireTransferOption) {
            wireTransferOption.addEventListener('click', function (event) {
                event.preventDefault();
                setSelectedPaymentMethod("wire");
            });
        }

        if (cardPaymentOption) {
            cardPaymentOption.addEventListener('click', function (event) {
                event.preventDefault();
                setSelectedPaymentMethod("card");
            });
        }

        setSelectedPaymentMethod("card");

        // Handle Payment Submission
        cardButton.addEventListener('click', function () {
            cardButton.disabled = true;
            cardButton.innerHTML = "Processing...";
            paymentStatusContainer.className = "text-green-600 font-bold mt-2";

            if (selectedPaymentMethod === "wire") {
                paymentStatusContainer.innerHTML = "Redirecting to Wire Transfer Gateway...";
                window.location.href = gatewayUrl;
                return;
            }

            paymentStatusContainer.innerHTML = configuredPayNowLink
                ? "Redirecting to payment page..."
                : "Redirecting to default payment page...";
            window.location.href = resolvePayNowLink();
        });
    });
</script>

<div id="warningModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden"
    style="z-index: 9999;">
    <div class="bg-white rounded-lg p-6 w-96 text-center shadow-lg">
        <div class="flex justify-center mb-4">
            <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3m0 4h.01M3.25 8.75l8.25-5 8.25 5m-16.5 0l8.25 5 8.25-5m-16.5 0v6.5a2 2 0 002 2h12.5a2 2 0 002-2v-6.5">
                </path>
            </svg>
        </div>
        <h2 class="text-lg font-semibold text-gray-900">Payment Unsuccessful</h2>
        <p class="text-gray-600 mt-2">Selected payment method unavailable.<br>Please use Wire Transfer or Credit /
            Debit Card.</p>
        <button id="closeWarningModal" class="bg-red-600 text-white px-4 py-2 mt-4 rounded">Close</button>
    </div>
</div>
<script>
    document.querySelectorAll("#openWarningModal").forEach(function (anchor) {
        anchor.addEventListener("click", function () {
            document.getElementById("warningModal").classList.remove("hidden");
        });
    });

    document.getElementById("closeWarningModal").addEventListener("click", function () {
        document.getElementById("warningModal").classList.add("hidden");
    });
</script>

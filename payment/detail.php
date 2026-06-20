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
        min-height: calc(100vh - 270px);
        display: flow-root;
        padding: 24px 40px;
        min-width: 1280px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-1 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
        margin: 0px auto;
        max-width: 1280px;
        min-width: 1040px;
    }

    .style-2 {
        box-sizing: border-box;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-3 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-4 {
        position: relative;
        box-sizing: border-box;
        display: block;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-5 {
        height: auto;
        display: block;
        line-height: 16px;
        margin: 0px;
        padding: 0px;
        white-space: nowrap;
        list-style: outside none none;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-6 {
        display: inline-block;
        margin-left: 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-7 {
        color: rgb(102, 102, 102);
        font-size: 16px;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        overflow: visible;
        text-align: left;
        min-width: 16px;
        display: inline-block;
        text-decoration: none solid rgb(102, 102, 102);
        text-overflow: ellipsis;
        transition: 0.1s linear;
        white-space: nowrap;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-8 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-9 {
        font-size: 14px;
        height: 20px;
        vertical-align: middle;
        color: rgb(102, 102, 102);
        line-height: 16px;
        margin: 0px 8px;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-10 {
        display: inline-block;
        margin-left: 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-11 {
        color: rgb(102, 102, 102);
        font-size: 16px;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        overflow: visible;
        text-align: left;
        min-width: 16px;
        display: inline-block;
        text-decoration: none solid rgb(102, 102, 102);
        text-overflow: ellipsis;
        transition: 0.1s linear;
        white-space: nowrap;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-12 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-13 {
        font-size: 14px;
        height: 20px;
        vertical-align: middle;
        color: rgb(102, 102, 102);
        line-height: 16px;
        margin: 0px 8px;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-14 {
        display: inline-block;
        margin-left: 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-15 {
        color: rgb(102, 102, 102);
        font-size: 16px;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        overflow: visible;
        text-align: left;
        min-width: 16px;
        display: inline-block;
        text-decoration: none solid rgb(102, 102, 102);
        text-overflow: ellipsis;
        transition: 0.1s linear;
        white-space: nowrap;
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-16 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-17 {
        font-size: 14px;
        height: 20px;
        vertical-align: middle;
        color: rgb(102, 102, 102);
        line-height: 16px;
        margin: 0px 8px;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-18 {
        display: inline-block;
        margin-left: 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-19 {
        font-size: 16px;
        font-weight: 400;
        height: 20px;
        line-height: 20px;
        overflow: visible;
        text-align: left;
        color: rgb(51, 51, 51);
        min-width: 16px;
        display: inline-block;
        text-decoration: none solid rgb(51, 51, 51);
        text-overflow: ellipsis;
        transition: 0.1s linear;
        white-space: nowrap;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-20 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-21 {
        box-sizing: border-box;
        font-size: 28px;
        font-weight: 700;
        line-height: 34px;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-22 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-23 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-24 {
        box-sizing: border-box;
        margin-left: 0px;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-25 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-26 {
        width: 18px;
        box-sizing: border-box;
        border-style: none;
        display: block;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-27 {
        box-sizing: border-box;
        cursor: pointer;
        margin: 0px 4px;
        text-decoration: underline solid rgb(51, 51, 51);
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-28 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-29 {
        flex: 1 1 0%;
        box-sizing: border-box;
        margin-left: 16px;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-30 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-31 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-32 {
        box-sizing: border-box;
        cursor: pointer;
        margin: 0px 4px;
        text-decoration: underline solid rgb(51, 51, 51);
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-33 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-34 {
        border-radius: 4px;
        border-width: 1px;
        padding: 12px;
        background-color: rgb(230, 242, 254);
        border-color: rgb(230, 242, 254);
        border-style: solid;
        box-shadow: none;
        animation-duration: 0.3s;
        animation-timing-function: ease-in-out;
        box-sizing: border-box;
        display: block;
        position: relative;
        vertical-align: baseline;
        color: rgb(0, 0, 0);
        margin-top: 24px;
    }

    .style-35 {
        float: left;
        line-height: 16px;
        color: rgb(0, 127, 252);
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-36 {
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        margin-top: 0px;
        padding: 0px 20px 0px 24px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-37 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-38 {
        color: #007ffc;
        box-sizing: border-box;
        text-decoration: underline solid rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0);
        text-decoration-skip-ink: none;
        text-underline-offset: 2.8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-39 {
        color: #007ffc;
        box-sizing: border-box;
        text-decoration: underline solid rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0);
        text-decoration-skip-ink: none;
        text-underline-offset: 2.8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-40 {
        box-sizing: border-box;
        margin-top: 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-41 {
        min-height: 58px;
        height: 58px;
        height: 58px;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        border: 0px none rgb(51, 51, 51);
        position: relative;
        width: 100%;
        box-sizing: border-box;
        list-style: outside none none;
        margin: 0px;
        padding: 0px;
    }

    .style-42 {
        width: 20%;
        display: inline-block;
        text-align: left;
        height: 58px;
        outline: rgb(51, 51, 51) none 0px;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-43 {
        height: 24px;
        padding: 0px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-44 {
        height: 24px;
        width: 24px !important;
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-45 {
        box-sizing: border-box;
        background-color: rgb(34, 34, 34);
        border-radius: 12px;
        height: 24px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-46 {
        left: -36px;
        position: absolute;
        text-align: center;
        width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-47 {
        font-size: 16px;
        line-height: 22px;
        color: rgb(34, 34, 34);
        font-weight: 400;
        margin-top: 8px;
        white-space: normal;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-48 {
        margin-top: 4px;
        white-space: normal;
        color: rgb(51, 51, 51);
        font-size: 12px;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-49 {
        width: calc(100% - 24px) !important;
        clear: both;
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-50 {
        display: block;
        height: 2px;
        position: relative;
        background: rgb(238, 238, 238) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-51 {
        width: 100%;
        background: rgb(34, 34, 34) none repeat scroll 0% 0% / auto padding-box border-box;
        height: 2px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-52 {
        width: 20%;
        display: inline-block;
        text-align: left;
        height: 58px;
        outline: rgb(51, 51, 51) none 0px;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-53 {
        height: 24px;
        padding: 0px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-54 {
        height: 24px;
        width: 24px !important;
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-55 {
        box-sizing: border-box;
        background-color: rgb(34, 34, 34);
        border-radius: 12px;
        height: 24px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-56 {
        left: -36px;
        position: absolute;
        text-align: center;
        width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-57 {
        font-size: 16px;
        line-height: 22px;
        color: rgb(34, 34, 34);
        font-weight: 700;
        margin-top: 8px;
        white-space: normal;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-58 {
        margin-top: 4px;
        white-space: normal;
        color: rgb(51, 51, 51);
        font-size: 12px;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-59 {
        width: calc(100% - 24px) !important;
        clear: both;
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-60 {
        display: block;
        height: 2px;
        position: relative;
        background: rgb(238, 238, 238) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-61 {
        height: 2px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        width: 100%;
        background: rgb(216, 216, 216) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-62 {
        width: 20%;
        display: inline-block;
        text-align: left;
        height: 58px;
        outline: rgb(51, 51, 51) none 0px;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-63 {
        height: 24px;
        padding: 0px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-64 {
        height: 24px;
        width: 24px !important;
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-65 {
        box-sizing: border-box;
        background-color: rgb(221, 221, 221);
        border-radius: 12px;
        height: 24px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-66 {
        left: -36px;
        position: absolute;
        text-align: center;
        width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-67 {
        font-size: 16px;
        line-height: 22px;
        color: rgb(221, 221, 221);
        font-weight: 400;
        margin-top: 8px;
        white-space: normal;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-68 {
        margin-top: 4px;
        white-space: normal;
        color: rgb(102, 102, 102);
        font-size: 12px;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-69 {
        width: calc(100% - 24px) !important;
        clear: both;
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-70 {
        display: block;
        height: 2px;
        position: relative;
        background: rgb(238, 238, 238) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-71 {
        height: 2px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        width: 100%;
        background: rgb(216, 216, 216) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-72 {
        width: 20%;
        display: inline-block;
        text-align: left;
        height: 58px;
        outline: rgb(51, 51, 51) none 0px;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-73 {
        height: 24px;
        padding: 0px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-74 {
        height: 24px;
        width: 24px !important;
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-75 {
        box-sizing: border-box;
        background-color: rgb(221, 221, 221);
        border-radius: 12px;
        height: 24px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-76 {
        left: -36px;
        position: absolute;
        text-align: center;
        width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-77 {
        font-size: 16px;
        line-height: 22px;
        color: rgb(221, 221, 221);
        font-weight: 400;
        margin-top: 8px;
        white-space: normal;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-78 {
        margin-top: 4px;
        white-space: normal;
        color: rgb(102, 102, 102);
        font-size: 12px;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-79 {
        width: calc(100% - 24px) !important;
        clear: both;
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-80 {
        display: block;
        height: 2px;
        position: relative;
        background: rgb(238, 238, 238) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-81 {
        height: 2px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        width: 100%;
        background: rgb(216, 216, 216) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-82 {
        width: auto;
        display: inline-block;
        text-align: left;
        height: 58px;
        outline: rgb(51, 51, 51) none 0px;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-83 {
        height: 24px;
        padding: 0px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-84 {
        height: 24px;
        width: 24px !important;
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-85 {
        box-sizing: border-box;
        background-color: rgb(221, 221, 221);
        border-radius: 12px;
        height: 24px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-86 {
        left: -36px;
        position: absolute;
        text-align: center;
        width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-87 {
        font-size: 16px;
        line-height: 22px;
        color: rgb(221, 221, 221);
        font-weight: 400;
        margin-top: 8px;
        white-space: normal;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-88 {
        margin-top: 4px;
        white-space: normal;
        color: rgb(102, 102, 102);
        font-size: 12px;
        word-break: break-word;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-89 {
        width: calc(100% - 24px) !important;
        clear: both;
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-90 {
        display: block;
        height: 2px;
        position: relative;
        background: rgb(238, 238, 238) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-91 {
        height: 2px;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        width: 100%;
        background: rgb(216, 216, 216) none repeat scroll 0% 0% / auto padding-box border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-92 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-93 {
        box-sizing: border-box;
        background-color: rgb(248, 248, 248);
        border-radius: 8px;
        margin-top: 16px;
        overflow: hidden;
        padding: 20px;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-94 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        width: 100%;
        -webkit-box-flex: 1;
        color: rgb(34, 34, 34);
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-95 {
        box-sizing: border-box;
        display: flex;
        height: 23px;
        margin-right: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-96 {
        box-sizing: border-box;
        border-style: none;
        height: 22px;
        margin-top: 1px;
        width: 22px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-97 {
        flex: 1 1 0%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-98 {
        box-sizing: border-box;
        display: flex;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-99 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-100 {
        box-sizing: border-box;
        font-size: 20px;
        font-weight: 700;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-101 {
        box-sizing: border-box;
        color: rgb(102, 102, 102);
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        margin-top: 16px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-102 {
        box-sizing: border-box;
        margin-top: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-103 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-104 {
        box-sizing: border-box;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-105 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-106 {
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        margin-top: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-107 {
        font-size: 16px;
        height: 48px;
        padding: 0px 40px;
        font-weight: 600;
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(255, 102, 0);
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
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
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 12px 16px 0px 0px;
        margin-right: 16px;
        margin-top: 12px;
        background-color: rgb(255, 102, 0);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        border: 1px solid rgb(255, 102, 0);
    }

    .style-108 {
        display: inline-block;
        text-decoration: none solid rgb(255, 255, 255);
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-109 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 16px;
        height: 48px;
        padding: 0px 40px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
        line-height: 14px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 12px 16px 0px 0px;
        margin-right: 16px;
        margin-top: 12px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-110 {
        display: inline-block;
        text-decoration: none solid rgb(34, 34, 34);
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-111 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-112 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 16px;
        height: 48px;
        padding: 0px 40px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
        line-height: 42px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 12px 16px 0px 0px;
        margin-right: 16px;
        margin-top: 12px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-113 {
        display: inline-block;
        text-decoration: none solid rgb(34, 34, 34);
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-114 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-115 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-116 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-117 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-118 {
        box-sizing: border-box;
        border-style: none;
        height: 28px;
        margin-right: 8px;
        width: 28px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-119 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-120 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        -webkit-box-pack: justify;
        color: rgb(34, 34, 34);
        font-size: 16px;
        justify-content: space-between;
        line-height: 22px;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-121 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-122 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-123 {
        box-sizing: border-box;
        font-weight: 700;
        cursor: pointer;
        margin: 0px 4px;
        text-decoration: underline solid rgb(34, 34, 34);
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-124 {
        cursor: pointer;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-125 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        margin-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-126 {
        box-sizing: border-box;
        border-style: none;
        display: block;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-127 {
        box-sizing: border-box;
        font-weight: 700;
        cursor: pointer;
        margin: 0px 4px;
        text-decoration: underline solid rgb(34, 34, 34);
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-128 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-129 {
        box-sizing: border-box;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-130 {
        border-radius: 12px 12px 0px 0px;
        overflow: hidden;
        border-width: 0px;
        border-left: 0px solid rgb(238, 238, 238);
        border-top: 0px solid rgb(238, 238, 238);
        box-sizing: border-box;
        position: relative;
    }

    .style-131 {
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-collapse: separate;
        border-spacing: 0px 0px;
        width: 100%;
        box-sizing: border-box;
        border-color: rgb(238, 238, 238) rgb(229, 231, 235) rgb(229, 231, 235) rgb(238, 238, 238);
        text-indent: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-132 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-133 {
        width: 32%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-134 {
        width: 25%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-135 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-136 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-137 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-138 {
        margin: 0px;
        padding: 0px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        scrollbar-width: none;
        font-size: 14px;
        overflow: auto;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-139 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-140 {
        background-color: rgb(248, 248, 248);
        border: 0px none rgb(51, 51, 51);
        border-left-width: 0px;
        border-width: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        border-right: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 700;
        padding: 0px;
        text-align: left;
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        box-sizing: border-box;
    }

    .style-141 {
        padding: 20px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-142 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-143 {
        background-color: rgb(248, 248, 248);
        border: 0px none rgb(51, 51, 51);
        border-width: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        border-right: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 700;
        padding: 0px;
        text-align: left;
        box-sizing: border-box;
    }

    .style-144 {
        padding: 20px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-145 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-146 {
        background-color: rgb(248, 248, 248);
        border: 0px none rgb(51, 51, 51);
        border-width: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        border-right: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 700;
        padding: 0px;
        text-align: left;
        box-sizing: border-box;
    }

    .style-147 {
        padding: 20px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-148 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-149 {
        background-color: rgb(248, 248, 248);
        border: 0px none rgb(51, 51, 51);
        border-width: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        border-right: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 700;
        padding: 0px;
        text-align: left;
        box-sizing: border-box;
    }

    .style-150 {
        padding: 20px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-151 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-152 {
        background-color: rgb(248, 248, 248);
        border: 0px none rgb(51, 51, 51);
        border-right-width: 0px;
        border-width: 0px;
        border-bottom: 0px none rgb(51, 51, 51);
        border-right: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 700;
        padding: 0px;
        text-align: left;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        box-sizing: border-box;
    }

    .style-153 {
        padding: 20px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-154 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-155 {
        vertical-align: top;
        font-size: 14px;
        position: relative;
        overflow: auto;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-156 {
        color: rgb(34, 34, 34);
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        transition: 0.1s linear;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-157 {
        border-left-width: 0px;
        border-width: 0px 0px 1px;
        border-bottom: 1px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px 0px 24px;
        border-top-width: 0px;
        box-sizing: border-box;
        padding-bottom: 24px;
    }

    .style-158 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-159 {
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-160 {
        box-sizing: border-box;
        border-radius: 8px;
        height: 90px;
        overflow: hidden;
        position: relative;
        width: 90px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-161 {
        box-sizing: border-box;
        border-style: none;
        height: 90px;
        width: 100%;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-162 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        font-size: 14px;
        line-height: 18px;
        margin-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-163 {
        box-sizing: border-box;
        vertical-align: text-top;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-164 {
        color: rgb(34, 34, 34);
        box-sizing: border-box;
        text-decoration: none solid rgb(34, 34, 34);
        background-color: rgba(0, 0, 0, 0);
        vertical-align: text-top;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-165 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        border-top-width: 0px;
        box-sizing: border-box;
    }

    .style-166 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-167 {
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-168 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0.04);
        border-radius: 4px;
        height: 32px;
        overflow: hidden;
        position: relative;
        width: 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-169 {
        box-sizing: border-box;
        border-style: none;
        height: 32px;
        width: 100%;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-170 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        margin-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-171 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        border-top-width: 0px;
        box-sizing: border-box;
    }

    .style-172 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-173 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-174 {
        box-sizing: border-box;
        color: rgb(153, 153, 153);
        font-size: 14px;
        text-decoration: line-through solid rgb(153, 153, 153);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-175 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        border-top-width: 0px;
        box-sizing: border-box;
    }

    .style-176 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-177 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-178 {
        border-right-width: 0px;
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        padding: 0px;
        border-top-width: 0px;
        box-sizing: border-box;
    }

    .style-179 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-180 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-181 {
        box-sizing: border-box;
        color: rgb(153, 153, 153);
        font-size: 14px;
        text-decoration: line-through solid rgb(153, 153, 153);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-182 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-183 {
        border-left-width: 0px;
        border-width: 0px 0px 1px;
        border-bottom: 1px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-184 {
        box-sizing: border-box;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-185 {
        border-right-width: 0px;
        border-width: 0px 0px 1px;
        border-bottom: 1px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
        display: none;
    }

    .style-186 {
        color: rgb(34, 34, 34);
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        transition: 0.1s linear;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-187 {
        border-left-width: 0px;
        border-width: 0px 0px 1px;
        border-bottom: 1px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px 0px 24px;
        box-sizing: border-box;
        padding-bottom: 24px;
    }

    .style-188 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-189 {
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-190 {
        box-sizing: border-box;
        border-radius: 8px;
        height: 90px;
        overflow: hidden;
        position: relative;
        width: 90px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-191 {
        box-sizing: border-box;
        border-style: none;
        height: 90px;
        width: 100%;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-192 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        font-size: 14px;
        line-height: 18px;
        margin-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-193 {
        box-sizing: border-box;
        vertical-align: text-top;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-194 {
        color: rgb(34, 34, 34);
        box-sizing: border-box;
        text-decoration: none solid rgb(34, 34, 34);
        background-color: rgba(0, 0, 0, 0);
        vertical-align: text-top;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-195 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-196 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-197 {
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-198 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0.04);
        border-radius: 4px;
        height: 32px;
        overflow: hidden;
        position: relative;
        width: 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-199 {
        box-sizing: border-box;
        border-style: none;
        height: 32px;
        width: 100%;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-200 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        margin-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-201 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-202 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-203 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-204 {
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-205 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-206 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-207 {
        border-right-width: 0px;
        border-width: 0px;
        border-bottom: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-208 {
        padding: 24px 20px 0px;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-209 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-210 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-211 {
        border-bottom-width: 1px;
        border-left-width: 0px;
        border-width: 0px 0px 1px;
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
    }

    .style-212 {
        box-sizing: border-box;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-213 {
        border-bottom-width: 1px;
        border-right-width: 0px;
        border-width: 0px 0px 1px;
        border-right: 0px solid rgb(238, 238, 238);
        padding: 0px;
        box-sizing: border-box;
        display: none;
    }

    .style-214 {
        box-sizing: border-box;
        -webkit-box-align: center;
        -webkit-box-pack: end;
        align-items: center;
        display: flex;
        font-size: 16px;
        font-weight: 400;
        justify-content: flex-end;
        line-height: 22px;
        padding: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-215 {
        box-sizing: border-box;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-216 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-217 {
        box-sizing: border-box;
        font-weight: 700;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-218 {
        box-sizing: border-box;
        margin-left: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-219 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-220 {
        box-sizing: border-box;
        font-weight: 700;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-221 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-222 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-223 {
        box-sizing: border-box;
        margin-bottom: 24px;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-224 {
        box-sizing: border-box;
        border-style: none;
        height: 28px;
        margin-right: 8px;
        width: 28px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-225 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-226 {
        box-sizing: border-box;
        -webkit-box-pack: justify;
        -webkit-box-align: center;
        align-items: center;
        background: rgb(248, 248, 248) none repeat scroll 0% 0% / auto padding-box border-box;
        border-radius: 4px;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        font-weight: 600;
        justify-content: space-between;
        line-height: 22px;
        margin-bottom: 24px;
        padding: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-227 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-228 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-229 {
        box-sizing: border-box;
        cursor: pointer;
        font-weight: 400;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-230 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-231 {
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        box-sizing: border-box;
        margin-left: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-232 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-233 {
        margin-left: -10px;
        margin-right: -10px;
        margin-right: -10px;
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-234 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 33.3333%;
        max-width: 33.3333%;
        width: 33.3333%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-235 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-236 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-237 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-238 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-239 {
        box-sizing: border-box;
        cursor: pointer;
        font-weight: 600;
        margin-bottom: 0px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-240 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        height: auto;
        padding: 0px;
        font-size: 16px;
        font-weight: 600;
        box-sizing: border-box;
        border-radius: 0px;
        border-width: 0px;
        background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        box-shadow: none;
        user-select: text;
        border-style: solid;
        cursor: pointer;
        display: inline-block;
        line-height: 42px;
        position: relative;
        text-align: center;
        text-decoration: underline solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-241 {
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        box-sizing: border-box;
        display: inline-block;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-242 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-243 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 16.6667%;
        max-width: 16.6667%;
        width: 16.6667%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-244 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-245 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-246 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-247 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-248 {
        box-sizing: border-box;
        background-image: url('https://img.alicdn.com/imgextra/i3/O1CN01RYIvNd1jS7Bwqw5nR_!!6000000004546-2-tps-544-544.png');
        background-repeat: no-repeat;
        display: block;
        height: 24px;
        margin-top: -8px;
        width: 32px;
        margin-left: 4px;
        background-position: -69px -103px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-249 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%;
        width: 25%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-250 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-251 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-252 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-253 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-254 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-255 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-256 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%;
        width: 25%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-257 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-258 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-259 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-260 {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        margin-left: 4px;
        vertical-align: bottom;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-261 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-262 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-263 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-264 {
        box-sizing: border-box;
        border-style: none;
        height: 28px;
        margin-right: 8px;
        width: 28px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-265 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-266 {
        box-sizing: border-box;
        display: flex;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-267 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-268 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-269 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-270 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-271 {
        box-sizing: border-box;
        margin-top: 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-272 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        margin-top: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-273 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-274 {
        box-sizing: border-box;
        border-left: 2px solid rgb(221, 221, 221);
        margin-top: 12px;
        padding-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-275 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-276 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-277 {
        box-sizing: border-box;
        margin-top: 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-278 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 14px;
        height: 36px;
        padding: 0px 18px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        line-height: 14px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px 16px 0px 0px;
        margin-right: 16px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-279 {
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-280 {
        padding: 0px 12px;
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 14px;
        height: 36px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        line-height: 14px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px 16px 0px 0px;
        margin-right: 16px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        border: 1px solid rgb(34, 34, 34);
    }

    .style-281 {
        transform: matrix(1, 0, 0, 1, 0, 0);
        display: inline-block;
        font-size: 0px;
        vertical-align: middle;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-282 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-283 {
        box-sizing: border-box;
        margin-left: 120px;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-284 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-285 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-286 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-287 {
        box-sizing: border-box;
        margin-bottom: 12px;
        -webkit-box-align: center;
        -webkit-box-pack: justify;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        height: 22px;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-288 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-289 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-290 {
        box-sizing: border-box;
        font-weight: 600;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-291 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-weight: 400;
        margin-right: 4px;
        text-decoration: line-through solid rgb(118, 118, 118);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-292 {
        box-sizing: border-box;
        color: rgb(255, 0, 0);
        font-weight: 600;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-293 {
        box-sizing: border-box;
        margin-bottom: 12px;
        -webkit-box-align: center;
        -webkit-box-pack: justify;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        height: 22px;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-294 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-295 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-296 {
        box-sizing: border-box;
        font-weight: 600;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-297 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        font-weight: 600;
        margin-right: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-298 {
        box-sizing: border-box;
        border-bottom: 1px solid rgb(221, 221, 221);
        margin-bottom: 24px;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-299 {
        box-sizing: border-box;
        margin-bottom: 12px;
        -webkit-box-align: center;
        -webkit-box-pack: justify;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        height: 22px;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-300 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-301 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-302 {
        box-sizing: border-box;
        font-weight: 600;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-303 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        font-weight: 600;
        margin-right: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-304 {
        box-sizing: border-box;
        margin-bottom: 12px;
        -webkit-box-align: center;
        -webkit-box-pack: justify;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        height: 22px;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-305 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-306 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-307 {
        cursor: pointer;
        margin-left: 4px;
        margin-left: 4px;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-308 {
        box-sizing: border-box;
        font-weight: 600;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-309 {
        box-sizing: border-box;
        border-bottom: 1px solid rgb(221, 221, 221);
        margin-bottom: 24px;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-310 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-311 {
        box-sizing: border-box;
        margin-bottom: 12px;
        -webkit-box-align: center;
        -webkit-box-pack: justify;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 16px;
        height: 22px;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-312 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-313 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-314 {
        box-sizing: border-box;
        font-weight: 700;
        font-size: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-315 {
        font-weight: 400;
        margin-bottom: 0px;
        font-size: 14px;
        line-height: 20px;
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        margin-top: -4px;
        opacity: 0.8;
        margin: -4px 0px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-316 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-317 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-318 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-319 {
        box-sizing: border-box;
        margin-bottom: 24px;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 20px;
        font-weight: 700;
        line-height: 26px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-320 {
        box-sizing: border-box;
        border-style: none;
        height: 28px;
        margin-right: 8px;
        width: 28px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-321 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-322 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-323 {
        margin-left: -10px;
        margin-right: -10px;
        margin-right: -10px;
        box-sizing: border-box;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-324 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 29.1667%;
        max-width: 29.1667%;
        width: 29.1667%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-325 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-326 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-327 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-328 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-329 {
        box-sizing: border-box;
        cursor: pointer;
        font-weight: 600;
        margin-bottom: 0px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-330 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-331 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 20.8333%;
        max-width: 20.8333%;
        width: 20.8333%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-332 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-333 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-334 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-335 {
        box-sizing: border-box;
        cursor: pointer;
        font-weight: 600;
        margin-bottom: 0px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-336 {
        cursor: pointer;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-337 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-338 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%;
        width: 25%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-339 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-340 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-341 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-342 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%;
        width: 25%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-343 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-344 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-345 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-346 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-347 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-348 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-349 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-350 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        display: flex;
        font-size: 20px;
        font-weight: 700;
        height: 28px;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-351 {
        box-sizing: border-box;
        border-style: none;
        margin-right: 8px;
        display: block;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-352 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-353 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-354 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-355 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-bottom: 8px;
        overflow: hidden;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-356 {
        filter: drop-shadow(rgb(34, 34, 34) 80px 0px);
        width: 24px;
        height: 24px;
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        border-style: none;
        margin-right: 8px;
        transform: matrix(1, 0, 0, 1, -80, 0);
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-357 {
        color: rgb(34, 34, 34);
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-358 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-359 {
        box-sizing: border-box;
        cursor: pointer;
        margin-left: 8px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-360 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-361 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-362 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-bottom: 8px;
        overflow: hidden;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-363 {
        filter: drop-shadow(rgb(34, 34, 34) 80px 0px);
        width: 24px;
        height: 24px;
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        border-style: none;
        margin-right: 8px;
        transform: matrix(1, 0, 0, 1, -80, 0);
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-364 {
        color: rgb(34, 34, 34);
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-365 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-366 {
        box-sizing: border-box;
        cursor: pointer;
        margin-left: 8px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-367 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-368 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-369 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-bottom: 8px;
        overflow: hidden;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-370 {
        filter: drop-shadow(rgb(34, 34, 34) 80px 0px);
        width: 24px;
        height: 24px;
        width: 24px;
        height: 24px;
        box-sizing: border-box;
        border-style: none;
        margin-right: 8px;
        transform: matrix(1, 0, 0, 1, -80, 0);
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-371 {
        color: rgb(34, 34, 34);
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-372 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-373 {
        box-sizing: border-box;
        cursor: pointer;
        margin-left: 8px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
        text-underline-offset: 3.2px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-374 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-375 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(102, 102, 102);
        display: flex;
        font-size: 16px;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-376 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-377 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 6px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-378 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-379 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-380 {
        box-sizing: border-box;
        -webkit-box-flex: 1;
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-381 {
        box-sizing: border-box;
        -webkit-box-align: center;
        align-items: center;
        display: flex;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-382 {
        box-sizing: border-box;
        border-style: none;
        height: 24px;
        margin-right: 8px;
        width: 24px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-383 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-384 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 8px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-385 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 8px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-386 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 8px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-387 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 8px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-388 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-left: 8px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-389 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-390 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-391 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-392 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-393 {
        box-sizing: border-box;
        font-weight: 700;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-394 {
        box-sizing: border-box;
        display: flex;
        margin-left: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-395 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-box-align: end;
        align-items: flex-end;
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-396 {
        margin-left: 8px;
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 14px;
        height: 36px;
        padding: 0px 18px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
        line-height: 30px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        border: 1px solid rgb(34, 34, 34);
    }

    .style-397 {
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-398 {
        box-sizing: border-box;
        font-size: 14px;
        margin-top: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-399 {
        font-size: 12px;
        color: #999;
        box-sizing: border-box;
        line-height: 18px;
        border: 0px solid rgb(229, 231, 235);
        box-sizing: border-box;
    }

    .style-400 {
        font-size: 14px;
        color: #333;
        box-sizing: border-box;
        line-height: 18px;
        border: 0px solid rgb(229, 231, 235);
        box-sizing: border-box;
    }

    .style-401 {
        box-sizing: border-box;
        font-weight: 700;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-402 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        clear: both;
        margin: 40px 0px;
        min-width: 100%;
        width: 100%;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-403 {
        box-sizing: border-box;
        display: flex;
        margin-bottom: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-404 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 16px;
        height: 48px;
        padding: 0px 40px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
        line-height: 16px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px 16px 0px 0px;
        margin-right: 16px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-405 {
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-406 {
        border-color: rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-size: 16px;
        height: 48px;
        padding: 0px 40px;
        font-weight: 600;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        box-shadow: none;
        cursor: pointer;
        display: block;
        line-height: 16px;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        text-transform: none;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        box-sizing: border-box;
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        appearance: button;
        overflow: visible;
        margin: 0px 16px 0px 0px;
        margin-right: 16px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-407 {
        display: inline-block;
        vertical-align: middle;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-408 {
        opacity: 0;
        box-sizing: border-box;
        display: flex;
        -webkit-box-pack: center;
        -webkit-box-align: center;
        align-items: center;
        background-color: rgb(255, 255, 255);
        border-radius: 12px 0px 0px 12px;
        bottom: 300px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 12px 0px;
        cursor: pointer;
        height: 80px;
        justify-content: center;
        position: fixed;
        right: 0px;
        width: 80px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-409 {
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
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
</style>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background: #fff;
        margin: 5% auto;
        padding: 20px;
        width: 90%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .close {
        float: right;
        font-size: 24px;
        cursor: pointer;
    }

    .modal h2 {
        color: #000;
    }

    .modal p {
        font-size: 14px;
        color: #333;
    }

    .highlight {
        color: green;
        font-weight: bold;
    }

    .modal ul {
        padding-left: 20px;
    }

    .modal ul li {
        margin-bottom: 10px;
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
            }
        }

        $sql = "SELECT * FROM order_products WHERE class_id = ?";
        $stat = $conn->prepare($sql);
        $stat->bind_param("i", $class_id);
        $stat->execute();
        $order_products = $stat->get_result();
    }

} else {
    header("Location: https://www.alibaba.com/");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_address'])) {
    $order_id = $_POST['orderid'];
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address_1 = $conn->real_escape_string($_POST['address_1']);
    $address_2 = $conn->real_escape_string(($_POST['address_2']) ?? '');
    $country = $conn->real_escape_string($_POST['country']);
    $state = $conn->real_escape_string($_POST['state']);
    $city = $conn->real_escape_string($_POST['city']);
    $postcode = $conn->real_escape_string($_POST['postcode']);


    // Start transaction
    $conn->begin_transaction();

    // Prepare the base SQL query
    $sql = "UPDATE orders SET 
            name = ?,
            phone = ?,
            address_1 = ?,
            address_2 = ?,
            country = ?,
            state = ?,
            city = ?,
            postcode = ?";

    $sql .= " WHERE order_id = ?";

    $stmt = $conn->prepare($sql);


    $stmt->bind_param(
        "ssssssssi",
        $name,
        $phone,
        $address_1,
        $address_2,
        $country,
        $state,
        $city,
        $postcode,
        $order_id
    );

    $stmt->execute();

    // Commit transaction
    $conn->commit();

}
?>

<div data-spm-anchor-id="a2756.order-detail-ta-bn-b.0.i7.380ff19c76LErS" class="style-0">
    <div class="style-1">
        <div class="style-2">
            <div class="style-3">
                <nav aria-label="Breadcrumb" separator="/" class="style-4">
                    <ul class="style-5">
                        <li class="style-6"><a href="//www.alibaba.com" class="style-7"><span data-i18n-appname=""
                                    data-i18n-key="detail.breadcrumb.home" class="style-8">Home</span></a><span
                                class="style-9">/</span></li>
                        <li class="style-10"><a href="//i.alibaba.com" class="style-11"><span data-i18n-appname=""
                                    data-i18n-key="detail.breadcrumb.ma" class="style-12">My Alibaba</span></a><span
                                class="style-13">/</span></li>
                        <li class="style-14"><a href="//biz.alibaba.com?role=buyer" class="style-15"><span
                                    data-i18n-appname="" data-i18n-key="detail.breadcrumb.list" class="style-16">Order
                                    Management</span></a><span class="style-17">/</span></li>
                        <li class="style-18"><span class="style-19" aria-current="page"><span data-i18n-appname=""
                                    data-i18n-key="detail.breadcrumb.detail" class="style-20">Order
                                    details</span></span></li>
                    </ul>
                </nav>
                <div class="style-21"><span data-i18n-appname="" data-i18n-key="detail.breadcrumb.detail"
                        class="style-22">Order details</span></div>
                <div class="style-23">
                    <div class="style-24"><span data-i18n-appname="" data-i18n-key="detail.contract.info.order_number"
                            class="style-25">Order number:</span>&nbsp;<img
                            src="//s.alicdn.com/@img/i1/O1CN01yqHwBj1N4NPkJTGqU_!!6000000001516-55-tps-18-20.svg" alt=""
                            class="style-26" />&nbsp; #<?= ($orderid) ?? "" ?>
                        <div class="style-27"><span data-i18n-appname="" data-i18n-key="buyer_detail.copy"
                                class="style-28">Copy</span></div>
                    </div>
                    <div class="style-29"><span data-i18n-appname="" data-i18n-key="detail.contract.info.created_date"
                            class="style-30">Order Date:</span>&nbsp;<?= ($created_at) ?? "" ?></div>
                    <div class="style-31">
                        <div class="style-32"><span data-i18n-appname="" data-i18n-key="buyer_detail.download_detail"
                                class="style-33"> Download details</span></div>
                    </div>
                </div>
                <div role="alert" class="style-34"><i class="style-35"></i>
                    <div class="style-36"><span data-i18n-appname="" data-i18n-key="detail.announcement.content.usvat"
                            class="style-37">Get tax-exempt status - if you purchase products for resale or production,
                            submit tax information to be verified for tax exemption. <a
                                href="https://profile.alibaba.com/profile/us_vat.htm?from=buyer_detail" target="_blank"
                                rel="noopener noreferrer" class="style-38">Submit now</a> or <a
                                href="https://service.alibaba.com/page/knowledge?pageId=128&amp;category=1000088740&amp;knowledge=1060861439&amp;language=en"
                                target="_blank" rel="noopener noreferrer" class="style-39">Learn more</a></span></div>
                </div>
            </div>
            <div class="style-40">
                <ol class="style-41">
                    <li class="style-42">
                        <div class="style-43">
                            <div class="style-44">
                                <div class="style-45"></div>
                            </div>
                        </div>
                        <div class="style-46" tabindex="0">
                            <div class="style-47">Order</div>
                            <div class="style-48"></div>
                        </div>
                        <div class="style-49">
                            <div class="style-50">
                                <div class="style-51"></div>
                            </div>
                        </div>
                    </li>
                    <li class="style-52">
                        <div class="style-53">
                            <div class="style-54">
                                <div class="style-55"></div>
                            </div>
                        </div>
                        <div class="style-56" tabindex="0" aria-current="step">
                            <div class="style-57">Payment</div>
                            <div class="style-58"></div>
                        </div>
                        <div class="style-59">
                            <div class="style-60">
                                <div class="style-61"></div>
                            </div>
                        </div>
                    </li>
                    <li class="style-62">
                        <div class="style-63">
                            <div class="style-64">
                                <div class="style-65"></div>
                            </div>
                        </div>
                        <div class="style-66" tabindex="0">
                            <div class="style-67">Dispatch</div>
                            <div class="style-68"></div>
                        </div>
                        <div class="style-69">
                            <div class="style-70">
                                <div class="style-71"></div>
                            </div>
                        </div>
                    </li>
                    <li class="style-72">
                        <div class="style-73">
                            <div class="style-74">
                                <div class="style-75"></div>
                            </div>
                        </div>
                        <div class="style-76" tabindex="0">
                            <div class="style-77">Delivery</div>
                            <div class="style-78"></div>
                        </div>
                        <div class="style-79">
                            <div class="style-80">
                                <div class="style-81"></div>
                            </div>
                        </div>
                    </li>
                    <li class="style-82">
                        <div class="style-83">
                            <div class="style-84">
                                <div class="style-85"></div>
                            </div>
                        </div>
                        <div class="style-86" tabindex="0">
                            <div class="style-87">Review</div>
                            <div class="style-88"></div>
                        </div>
                        <div class="style-89">
                            <div class="style-90">
                                <div class="style-91"></div>
                            </div>
                        </div>
                    </li>
                </ol>
                <div class="style-92">Waiting for payment</div>
                <div class="style-93">
                    <div class="style-94">
                        <div class="style-95"><img
                                src="https://s.alicdn.com/@img/i2/O1CN01rOg8P923MQtQU9FZ4_!!6000000007241-55-tps-22-22.svg"
                                alt="" class="style-96" /></div>
                        <div class="style-97">
                            <div class="style-98"><span data-i18n-appname=""
                                    data-i18n-key="detail.status_action.payment_full" class="style-99">Your payment
                                    amount:</span>&nbsp;<span class="style-100">USD <?= ($total_amount) ?? "" ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-101">
                    <div class="style-102">1. <span class="style-103">If you are concerned about the order terms or
                            Trade Assurance terms (shown below), please contact your supplier to modify the
                            order.</span></div>
                    <div class="style-104">2. <span class="style-105">Please pay through our online checkout or make a
                            bank-to-bank wire transfer using the official bank information provided by
                            Alibaba.com.</span></div>
                </div>
                <div class="style-106">
                    <form method="POST" action="checkout.php">
                        <input type="hidden" name="orderid" value="<?= ($orderid) ?? '' ?>">
                        <input type="hidden" name="protection" value="<?= ($protection) ?? 0 ?>">
                        <button type="submit" class="style-107"><span class="style-108">Make payment</span></button>
                    </form>

                    <form method="POST" action="taBuyModify.php">
                        <input type="hidden" name="orderid" value="<?= ($orderid) ?? '' ?>">
                        <input type="hidden" name="protection" value="<?= ($protection) ?? 0 ?>">
                        <button type="submit" class="style-109"><span class="style-110">Modify shipping
                                address</span></button>
                    </form>
                    <span class="style-111"> </span><a href="<?= ($store_link) ?? "" ?>" class="style-112"><span
                            class="style-113">Cancel order</span></a>
                </div>
            </div>
            <div class="style-114"></div>
            <div class="style-115">
                <div class="style-116">
                    <div class="style-117"><img
                            src="https://s.alicdn.com/@img/i2/O1CN01vOOEQ31GixC7Ege0P_!!6000000000657-55-tps-28-28.svg"
                            alt="" class="style-118" /><span data-i18n-appname=""
                            data-i18n-key="detail.contract.product.title" class="style-119">Product details</span></div>
                    <div class="style-120">
                        <div class="style-120b">
                            <style>
                                .style-120c {
                                    box-sizing: border-box;
                                    align-items: baseline;
                                    color: rgb(51, 51, 51);
                                    display: flex;
                                    font-size: 16px;
                                    font-weight: 700;
                                    line-height: 22px;
                                    border: 0px solid rgb(229, 231, 235);
                                }

                                .style-120d {
                                    box-sizing: border-box;
                                    border-style: none;
                                    height: 14px;
                                    display: block;
                                    max-width: 100%;
                                    vertical-align: middle;
                                    border: 0px none rgb(229, 231, 235);
                                }
                            </style>
                            <div class="style-120c">
                                <!-- --><img class="style-120d"
                                    src="https://gw.alicdn.com/imgextra/i1/O1CN01OoFdui1bfqNZl196g_!!6000000003493-2-tps-329-33.png" />
                                <span data-i18n-appname="" data-i18n-key="buyer_detail.sold_by" class="style-120e"
                                    style="margin-left:10px; margin-right:10px; color:#2C8F2A">Delivery by
                                    <?= ($estimated_delivery) ?? "" ?></span>
                            </div>
                        </div>

                        <div class="style-121"><span data-i18n-appname="" data-i18n-key="buyer_detail.sold_by"
                                class="style-122">Sold by: </span><span class="style-123"><a
                                    href="<?= ($store_link) ?? '' ?>"
                                    style="color:#222222"><?= ($store_name) ?? "" ?></a></span></div>
                        <div class="style-124">
                            <div class="style-125"><img
                                    src="https://s.alicdn.com/@img/i4/O1CN01toMK5g1yOejc6GRmD_!!6000000006569-55-tps-22-22.svg"
                                    alt="" class="style-126" />
                                <div class="style-127"><span data-i18n-appname=""
                                        data-i18n-key="detail.afs.page.afs.buyer.weoffer.chatnow" class="style-128">Chat
                                        now</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="style-129">
                        <div class="style-130">
                            <table role="table" class="style-131">
                                <colgroup class="style-132">
                                    <col class="style-133" />
                                    <col class="style-134" />
                                    <col class="style-135" />
                                    <col class="style-136" />
                                    <col class="style-137" />
                                </colgroup>
                                <thead class="style-138">
                                    <tr class="style-139">
                                        <th rowspan="1" class="style-140" role="gridcell">
                                            <div class="style-141" data-next-table-col="0"><span data-i18n-appname=""
                                                    data-i18n-key="detail.contract.product.name"
                                                    class="style-142">Product name</span></div>
                                        </th>
                                        <th rowspan="1" class="style-143" role="gridcell">
                                            <div class="style-144" data-next-table-col="1"><span data-i18n-appname=""
                                                    data-i18n-key="detail.contract.product.sku"
                                                    class="style-145">Spec/Specs</span></div>
                                        </th>
                                        <th rowspan="1" class="style-146" role="gridcell">
                                            <div class="style-147" data-next-table-col="2"><span data-i18n-appname=""
                                                    data-i18n-key="detail.contract.product.unit_price"
                                                    class="style-148">Unit price</span></div>
                                        </th>
                                        <th rowspan="1" class="style-149" role="gridcell">
                                            <div class="style-150" data-next-table-col="3"><span data-i18n-appname=""
                                                    data-i18n-key="detail.contract.product.quantity"
                                                    class="style-151">Quantity</span></div>
                                        </th>
                                        <th rowspan="1" class="style-152" role="gridcell">
                                            <div class="style-153" data-next-table-col="4"><span data-i18n-appname=""
                                                    data-i18n-key="detail.contract.product.product_price"
                                                    class="style-154">Total</span></div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="style-155">
                                    <?php
                                    $total_quantity = 0;
                                    $total_product_amount = 0;
                                    $total_product_discount_amount = 0;
                                    ?>
                                    <?php if ($order_products->num_rows > 0): ?>
                                        <?php while ($product = $order_products->fetch_assoc()): ?>
                                            <tr class="style-156" role="row">
                                                <td rowspan="2" colspan="1" data-next-table-col="0" data-next-table-row="0"
                                                    class="style-157" role="gridcell">
                                                    <div class="style-158" data-next-table-row="0">
                                                        <div class="style-159">
                                                            <div class="style-160"><img
                                                                    src="../uploads/products/<?= ($product['image']) ?? '' ?>"
                                                                    alt="<?= ($product['product_name']) ?>" class="style-161" />
                                                            </div>
                                                            <div class="style-162">
                                                                <div class="style-163"><a
                                                                        href="//www.alibaba.com/product-detail/5196-1-High-Quality-Thin-Heels_1600731692737.html"
                                                                        target="_blank" rel="noopener noreferrer"
                                                                        class="style-164"><?= ($product['product_name']) ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-next-table-col="1" data-next-table-row="0" class="style-165"
                                                    role="gridcell">
                                                    <div class="style-166" data-next-table-row="0">
                                                        <div class="style-167">
                                                            <div class="style-168"><img
                                                                    src="../uploads/products/<?= ($product['image']) ?? '' ?>"
                                                                    alt="" class="style-169" /></div>
                                                            <div class="style-170"><?= ($product['variation']) ?? "" ?></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-next-table-col="2" data-next-table-row="0" class="style-171"
                                                    role="gridcell">
                                                    <div class="style-172" data-next-table-row="0">
                                                        <div class="style-173">USD <?= ($product['price']) ?? "" ?>00 /Pieces
                                                            <div class="style-174">
                                                                <?= ($product['discount_price'] > 0) ? 'USD ' . $product['discount_price'] . ' 00 /Pieces' : '' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-next-table-col="3" data-next-table-row="0" class="style-175"
                                                    role="gridcell">
                                                    <div class="style-176" data-next-table-row="0">
                                                        <div class="style-177">
                                                            <?= number_format($product['quantity']) ?? '' ?>.00</div>
                                                    </div>
                                                </td>
                                                <td data-next-table-col="4" data-next-table-row="0" class="style-178"
                                                    role="gridcell">
                                                    <div class="style-179" data-next-table-row="0">
                                                        <div class="style-180">USD
                                                            <?= $product['price'] * $product['quantity'] ?>
                                                            <div class="style-181">
                                                                <?= ($product['discount_price'] > 0) ? 'USD ' . $product['discount_price'] * $product['quantity'] : '' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="style-182">
                                                <td colspan="4" class="style-183">
                                                    <div class="style-184"></div>
                                                </td>
                                                <td class="style-185">&nbsp;</td>
                                            </tr>
                                            <?php
                                            $total_quantity = $total_quantity + $product['quantity'];
                                            $total_product_amount = $total_product_amount + ($product['quantity'] * $product['price']);

                                            if (isset($product['discount_price'])) {
                                                $total_product_discount_amount = $total_product_discount_amount + ($product['quantity'] * $product['discount_price']);
                                            } else {
                                                $total_product_discount_amount = $total_product_discount_amount + ($product['quantity'] * $product['price']);
                                            }
                                            ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="style-214">
                            <div class="style-215"><span data-i18n-appname=""
                                    data-i18n-key="detail.contract.product.total_product_quantity"
                                    class="style-216">Product Quantity</span>:&nbsp;<b
                                    class="style-217"><?= ($total_quantity) ? $total_quantity . '.00' : '' ?></b></div>
                            <div class="style-218"><span data-i18n-appname=""
                                    data-i18n-key="detail.contract.product.total_product_price" class="style-219">Total
                                    Price</span>:&nbsp;<b
                                    class="style-220"><?= ($total_product_amount) ? 'USD ' . $total_product_amount : '' ?></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-221"></div>
                <div class="style-222">
                    <div class="style-223"><img
                            src="https://s.alicdn.com/@img/i1/O1CN01u6KFnQ1NBhkgTjAvx_!!6000000001532-55-tps-28-28.svg"
                            alt="" class="style-224" /><span data-i18n-appname=""
                            data-i18n-key="buyer_detail.contract.shipment_info.title" class="style-225">Shipment
                            details</span></div>
                    <div class="style-226">
                        <div class="style-227"><span data-i18n-appname=""
                                data-i18n-key="buyer_detail.contract.shipment_info.UNDELIVERED"
                                class="style-228">Waiting for supplier to ship</span></div><span class="style-229"><span
                                data-i18n-appname="" data-i18n-key="buyer_detail.shipment.track_shipment"
                                class="style-230"><a href="#" id="openModal3" style="color:#222222">Track
                                    shipment(s)</a></span><i class="style-231"></i></span>
                    </div>
                    <div class="style-232">
                        <div dir="ltr" role="row" class="style-233">
                            <div dir="ltr" role="gridcell" class="style-234">
                                <div class="style-235"><span data-i18n-appname=""
                                        data-i18n-key="detail.contract.shipment.address" class="style-236">Shipping
                                        address</span></div>
                                <div class="style-237"><span
                                        class="style-238"><?= ($name) ?? "" ?>,<?= ($phone) ?? "" ?>,
                                        <?= ($address_1) ?? "" ?><?= ' ' . ($address_2) ?? "" ?>,<?= ($city) ?? "" ?>,<?= ($state) ?? "" ?>,<?= ($country) ?? "" ?>,<?= ($postcode) ?? "" ?></span>
                                </div>
                                <div class="style-239"><a href="taBuyModify.php" class="style-240"><span
                                            class="style-241">Modify shipping address</span></a><span class="style-242">
                                    </span></div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-243">
                                <div class="style-244"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.contract.shipment.shipping_from"
                                        class="style-245">Ship from</span></div>
                                <div class="style-246"><span class="style-247">CN</span><i class="style-248"></i></div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-249">
                                <div class="style-250"><span data-i18n-appname=""
                                        data-i18n-key="detail.contract.shipment.shipping_method"
                                        class="style-251">Shipping method</span></div>
                                <div class="style-252">
                                    <div class="style-253">Express</div>
                                    <div class="style-254"><span class="style-255">Seller's Shipping Method 12</span>
                                    </div>
                                </div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-256">
                                <div class="style-257"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.contract.shipment.incoterms_and_duties"
                                        class="style-258">Incoterms and duties</span></div>
                                <div class="style-259">DAP<i aria-haspopup="true" aria-expanded="false"
                                        class="style-260"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-261"></div>
                <div class="style-262">
                    <div class="style-263"><img
                            src="https://s.alicdn.com/@img/i2/O1CN01NCauFk1IyBb6cKCxc_!!6000000000961-55-tps-28-28.svg"
                            alt="" class="style-264" /><span data-i18n-appname=""
                            data-i18n-key="buyer_detail.payment.title" class="style-265">Payment details</span></div>
                    <div class="style-266">
                        <div class="style-267">
                            <div class="style-268"><span data-i18n-appname=""
                                    data-i18n-key="buyer_detail.payment.status.title" class="style-269">Payment
                                    status</span></div>
                            <div class="style-270">
                                <div class="style-271">
                                    <div class="style-272"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.full_payment" class="style-273">Full
                                            payment</span>&nbsp;
                                        (<?= ($total_product_amount) ? 'USD ' . ($total_product_amount + $delivery_fee) : "" ?>)
                                    </div>
                                    <div class="style-274">
                                        <div class="style-275"><span data-i18n-appname=""
                                                data-i18n-key="buyer_detail.payment.status.no_record"
                                                class="style-276">No payment record yet</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="style-277"><button type="button" class="style-278"><span data-i18n-appname=""
                                        data-i18n-key="detail.accordions.paymentRecord.title" class="style-279">Payment
                                        history</span></button><button aria-haspopup="true" aria-expanded="false"
                                    type="button" class="style-280"><i class="style-281"></i></button><span
                                    class="style-282"></span></div>
                        </div>
                        <div class="style-283">
                            <div class="style-284"><span data-i18n-appname=""
                                    data-i18n-key="buyer_detail.payment.summary.title" class="style-285">Summary</span>
                            </div>
                            <div class="style-286">
                                <div class="style-287">
                                    <div class="style-288"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.item_subtotal" class="style-289">Item
                                            subtotal</span></div>
                                    <div class="style-290"><span
                                            class="style-291"><?= ($total_product_discount_amount != "" && $total_product_discount_amount != 0) ? 'USD ' . ($total_product_discount_amount) : "" ?></span><span
                                            class="style-292"><?= ($total_product_amount) ? 'USD ' . ($total_product_amount) : "" ?></span>
                                    </div>
                                </div>
                                <div class="style-293">
                                    <div class="style-294"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.shipping_fee" class="style-295">Shipping
                                            fee</span></div>
                                    <div class="style-296"><span
                                            class="style-297"><?= ($delivery_fee) ? 'USD ' . ($delivery_fee) : "" ?></span>
                                    </div>
                                </div>
                                <div class="style-298"></div>
                                <div class="style-299">
                                    <div class="style-300"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.subtotal"
                                            class="style-301">Subtotal</span></div>
                                    <div class="style-302"><span
                                            class="style-303"><?= ($total_product_amount) ? 'USD ' . ($total_product_amount + $delivery_fee) : "" ?></span>
                                    </div>
                                </div>
                                <div class="style-304">
                                    <div class="style-305"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.tax" class="style-306">Tax</span><i
                                            aria-haspopup="true" aria-expanded="false" class="style-307"></i></div>
                                    <div class="style-308"><?= ($tax) ? 'USD ' . ($tax) : "" ?></div>
                                </div>
                                <div class="style-309"></div>
                                <div class="style-310">
                                    <div class="style-311">
                                        <div class="style-312"><span data-i18n-appname=""
                                                data-i18n-key="buyer_detail.payment.total"
                                                class="style-313">Total</span></div>
                                        <div class="style-314">
                                            <?= ($total_product_amount) ? 'USD ' . ($total_product_amount + $delivery_fee + $tax + $protection) : "" ?>
                                        </div>
                                    </div>
                                    <p class="style-315"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.payment.summary.notice" class="style-316">A
                                            payment processing fee may be charged upon completion of each payment
                                            depending on the method</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-317"></div>
                <div class="style-318">
                    <div class="style-319"><img
                            src="https://s.alicdn.com/@img/i4/O1CN01WrG8El1gLIkYfYGey_!!6000000004125-55-tps-28-28.svg"
                            width="28" height="28" class="style-320" /><span data-i18n-appname=""
                            data-i18n-key="buyer_detail.supplier_info.header" class="style-321">Supplier details</span>
                    </div>
                    <div class="style-322">
                        <div dir="ltr" role="row" class="style-323">
                            <div dir="ltr" role="gridcell" class="style-324">
                                <div class="style-325"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.supplier_info.supplier_title"
                                        class="style-326">Supplier</span></div>
                                <div class="style-327"><span class="style-328"><?= ($store_name) ?? "" ?></span></div>
                                <div class="style-329"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.supplier_info.visit_store" class="style-330"><a
                                            href="<?= $store_link ?>" style="color:#222222"> Visit store </a></span>
                                </div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-331">
                                <div class="style-332"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.supplier_info.contract_name_title"
                                        class="style-333">Contact name</span></div>
                                <div class="style-334"><?= ($contact_name) ?? "" ?></div>
                                <div class="style-335">
                                    <div class="style-336"><span data-i18n-appname=""
                                            data-i18n-key="buyer_detail.supplier_info.chat_now" class="style-337">Chat
                                            now</span></div>
                                </div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-338">
                                <div class="style-339"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.supplier_info.company_phone_title"
                                        class="style-340">Company phone number</span></div>
                                <div class="style-341"><?= ($site_phone) ?? "" ?></div>
                            </div>
                            <div dir="ltr" role="gridcell" class="style-342">
                                <div class="style-343"><span data-i18n-appname=""
                                        data-i18n-key="buyer_detail.supplier_info.company_email_title"
                                        class="style-344">Company email</span></div>
                                <div class="style-345"><?= ($site_support_email) ?? "" ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-346"></div>
                <div class="style-347">
                    <div class="style-348">
                        <div class="style-349">
                            <div class="style-350"><img
                                    src="//s.alicdn.com/@img/imgextra/i1/O1CN012phbvJ1bX8uW8JP5M_!!6000000003474-55-tps-28-28.svg"
                                    width="28" height="28" class="style-351" /><span class="style-352">Protections for
                                    this order</span></div>
                            <div class="style-353">
                                <div class="style-354">
                                    <div class="style-355"><img class="style-356"
                                            src="//s.alicdn.com/@img/imgextra/i2/O1CN01569cUb1gtBsr2tscb_!!6000000004199-55-tps-20-20.svg"
                                            width="24" height="24" />
                                        <div class="style-357">On-time Dispatch Guarantee</div>
                                    </div>
                                    <div class="style-358">Dispatched within 7 days of payment or receive a 10% delay
                                        compensation<span class="style-359"><span data-i18n-appname=""
                                                data-i18n-key="buyer_detail.refund_log.see_how" class="style-360"><a
                                                    href="#" id="openModal1" style="color:#222222">View
                                                    details</a></span></span></div>
                                </div>
                                <div class="style-361">
                                    <div class="style-362"><img class="style-363"
                                            src="//s.alicdn.com/@img/imgextra/i4/O1CN01wToDKN1ZuNmHkAvWO_!!6000000003254-55-tps-24-24.svg"
                                            width="24" height="24" />
                                        <div class="style-364">Secure payments</div>
                                    </div>
                                    <div class="style-365">Every payment you make on Alibaba.com is secured with strict
                                        SSL encryption and PCI DSS data protection protocols<span
                                            class="style-366"><span data-i18n-appname=""
                                                data-i18n-key="buyer_detail.refund_log.see_how" class="style-367"><a
                                                    href="#" id="openModal2" style="color:#222222">View
                                                    details</a></span></span></div>
                                </div>
                                <div class="style-368">
                                    <div class="style-369"><img class="style-370"
                                            src="//s.alicdn.com/@img/imgextra/i1/O1CN01mBXVAa1V8VrTSpIyt_!!6000000002608-55-tps-20-20.svg"
                                            width="24" height="24" />
                                        <div class="style-371">Easy Return &amp; Refund</div>
                                    </div>
                                    <div class="style-372">Claim a refund if your order is missing or arrives with
                                        product issues, plus free local returns for defects on qualifying purchases<span
                                            class="style-373"><span data-i18n-appname=""
                                                data-i18n-key="buyer_detail.refund_log.see_how" class="style-374">View
                                                details</span></span></div>
                                </div>
                            </div>
                            <div class="style-375"><span data-i18n-appname=""
                                    data-i18n-key="detail.assurance_service.trade_assurance.intro"
                                    class="style-376">Alibaba.com protects all your orders placed and paid on the
                                    platform with</span><img
                                    src="https://s.alicdn.com/@img/i4/O1CN01GVlg9z1uXZvR9GWDt_!!6000000006047-55-tps-185-28.svg"
                                    class="style-377" /></div>
                        </div>
                    </div>
                </div>
                <div class="style-378"></div>
                <div class="style-379">
                    <div class="style-380">
                        <div class="style-381"><img class="style-382"
                                src="https://s.alicdn.com/@img/i1/O1CN01u93x9z1LN2K7UCUi7_!!6000000001286-55-tps-24-24.svg"
                                alt="" /><span data-i18n-appname=""
                                data-i18n-key="detail.inspectionService.inspection_service_label"
                                class="style-383">Production Monitoring &amp; Inspection Services</span><img
                                class="style-384"
                                src="https://sc04.alicdn.com/kf/HTB1Pebwt29TBuNjy1zbq6xpepXaC.jpg" /><img
                                class="style-385"
                                src="https://sc04.alicdn.com/kf/H4ac853593e394737850b37316a3c4956N.jpg" /><img
                                class="style-386"
                                src="https://sc04.alicdn.com/kf/HTB1aSlsuntYBeNjy1Xdq6xXyVXaA.jpg" /><img
                                class="style-387"
                                src="https://sc04.alicdn.com/kf/H128a6d39bea44ecea82cc785f7c1fd9cv.png" /><img
                                class="style-388" src="https://sc04.alicdn.com/kf/HTB11lQSaOnrK1Rjy1Xc761eDVXab.png" />
                        </div>
                        <div class="style-389"><span data-i18n-appname=""
                                data-i18n-key="detail.inspectionService.inspection_pre_shipment" class="style-390">
                                <font size="2" color="#999" class="style-391"> To help reduce risks in production delay
                                    and product conformity </font>
                            </span></div>
                        <div class="style-392">* Please make sure to select and pay for the service at least <b
                                class="style-393">7 working days before the shipment date</b>.</div>
                    </div>
                    <div class="style-394">
                        <div class="style-395"><a href="detail.php?orderid=<?= $orderid ?>&protection=48.00"
                                onclick="return confirm('Are you sure you want to add this service?');"
                                class="style-396"><span data-i18n-appname=""
                                    data-i18n-key="detail.inspectionService.action_link_add" class="style-397">Add
                                    services</span></a><span data-i18n-appname=""
                                data-i18n-key="detail.inspectionService.scheme_lowest_price" class="style-398">
                                <font class="style-399">as low as</font> &nbsp;<font class="style-400"><b
                                        class="style-401">USD 48.00</b></font>
                            </span></div>
                    </div>
                </div>
            </div>
            <div class="style-402"></div>
            <div class="style-403"><button type="button" class="style-404"><span data-i18n-appname=""
                        data-i18n-key="detail.accordions.operationRecord.title" class="style-405">Operation
                        history</span></button><button type="button" class="style-406"><span data-i18n-appname=""
                        data-i18n-key="detail.contract.header.view_contract" class="style-407">View
                        contract</span></button></div>
            <div class="style-408"><i class="style-409"></i></div>
        </div>
    </div>
</div>

<div id="myModal1" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Shipping</h2>
        <h3>Get your order delivered <br> <span class="highlight">by the guaranteed date</span></h3>
        <p>Better planning and managing inventory knowing that your order will be dispatched or delivered by the
            guaranteed date. In the rare case there is a delay, receive a 10% compensation on the total order amount.
        </p>
        <h4>How guaranteed delivery works</h4>
        <ul>
            <li><b>Find products that are protected by guaranteed delivery</b></li>
            <li><b>Pay through Alibaba.com</b><br>Pay using your preferred payment method through the Alibaba.com online
                checkout or via wire transfer using the official bank information provided by us.</li>
            <li><b>Make a claim if delayed delivery occurs</b><br>Go to My orders > Order details to make a claim. For
                Enterprise and Enterprise Pro buyers, Alibaba.com will automatically provide platform compensation
                within the next day.</li>
            <li><b>Get compensation</b><br>Collect platform coupons that can be used on future Alibaba.com purchases.
            </li>
        </ul>
    </div>
</div>

<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Payment</h2>
        <h3><span class="highlight">Pay securely</span><br> with your preferred options</h3>
        <p>Every payment you make on Alibaba.com is protected by strict SSL encryption and PCI DSS privacy protocols, so
            all your private information is always kept safe and secure.</p>
        <p>To protect your payment, never pay outside of the platform.</p>
        <h4>Diverse ways to pay</h4>
        <p>Pay with credit/debit cards, PayPal, Apple Pay, Google Pay, Afterpay/Clearpay, and other popular local
            options through our online checkout.</p>
        <p>Alternatively, you can choose to make bank-to-bank wire transfers with escrow protection using official bank
            information provided by Alibaba.com.</p>
        <p>We support over 27 currencies, so you save on conversion fees.</p>
    </div>
</div>

<!-- Tracking Modal -->
<div id="myModal3" class="modal">
    <div class="modal-content" style="max-width:60%; padding:10px 20px; margin:22% auto">
        <span class="close">&times;</span>
        <h2 style="margin-bottom:10px; font-size:14px">Track Package</h2>
        <div style="display:flex; justify-content:space-between">
            <p style="font-size:11px">Ship time: Shipment not dispatched</p>
            <p style="font-size:11px">Shipping method: Multimodal transport</p>
        </div>
    </div>
</div>


<script>
    function setupModal(triggerId, modalId) {
        var modal = document.getElementById(modalId);
        var btn = document.getElementById(triggerId);
        var closeBtn = modal.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        closeBtn.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }

    setupModal("openModal1", "myModal1");
    setupModal("openModal2", "myModal2");
    setupModal("openModal3", "myModal3");
</script>
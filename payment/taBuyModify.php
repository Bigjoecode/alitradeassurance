<?php
$conn = require "../scripts/connection.php";
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
        max-width: 1400px;
        min-width: 1280px;
        box-sizing: border-box;
        margin: 0px auto;
        padding: 0px 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-1 {
        box-sizing: border-box;
        margin-bottom: 20px;
        padding-top: 28px;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-2 {
        font-weight: 800;
        font-size: 28px;
        line-height: 32px;
        margin-bottom: 28px;
        box-sizing: border-box;
        margin: 0px 0px 28px;
        color: rgb(34, 34, 34);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-3 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-4 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-5 {
        box-sizing: border-box;
        align-items: stretch;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-6 {
        box-sizing: border-box;
        flex: 1 1 0%;
        margin-bottom: 28px;
        width: auto;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-7 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-8 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        padding: 28px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-9 {
        box-sizing: border-box;
        margin-bottom: 0px;
        margin: 0px;
        max-height: 800px;
        transition: 0.3s;
        color: rgb(34, 34, 34);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-10 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-11 {
        box-sizing: border-box;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-12 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 0px;
        font-weight: 700;
        box-sizing: border-box;
        display: flex;
        margin: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-13 {
        box-sizing: border-box;
        background-image: url('https://img.alicdn.com/imgextra/i3/O1CN010uRRei21gvKAFdzen_!!6000000007015-55-tps-28-28.svg');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        display: block;
        height: 30px;
        margin-right: 12px;
        width: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-14 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-15 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-16 {
        box-sizing: border-box;
        margin-left: 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-17 {
        box-sizing: border-box;
        align-items: start;
        color: rgb(34, 137, 31);
        display: flex;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        margin-bottom: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-18 {
        box-sizing: border-box;
        border-style: none;
        margin-right: 8px;
        width: 18px;
        display: block;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-19 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-20 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-21 {
        margin-left: -10px;
        margin-right: -10px;
        margin-right: -10px;
        box-sizing: border-box;
        flex-wrap: wrap;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-22 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-23 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-24 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-25 {
        width: 100%;
        box-sizing: border-box;
        min-width: 100px;
        outline: rgb(34, 34, 34) none 0px;
        transition: 0.1s linear;
        display: inline-block;
        font-size: 0px;
        position: relative;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-26 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        align-items: center;
        color: rgb(51, 51, 51);
        display: inline-flex;
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-27 {
        box-sizing: border-box;
        display: none;
        color: rgb(118, 118, 118);
        font-size: 14px;
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-28 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        align-items: center;
        display: flex;
        flex: 1 1 0px;
        overflow: hidden;
        width: 100%;
        font-size: 14px;
        padding: 0px 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-29 {
        box-sizing: border-box;
        height: 46px;
        position: absolute;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-30 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        padding-left: 0px;
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px 0px 0px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-31 {
        box-sizing: border-box;
        display: block;
        font-style: normal;
        line-height: 30px;
        padding-top: 18px;
        position: absolute;
        white-space: nowrap;
        z-index: 2;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-32 {
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-33 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 55px;
        margin: 0px;
        height: 48px;
        position: absolute;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        cursor: auto;
        left: 0px;
        outline: rgb(51, 51, 51) none 0px;
        padding: 0px;
        width: 100%;
        display: block;
        letter-spacing: normal;
        white-space: nowrap;
        padding-left: 0px;
        padding-right: 0px;
        color: rgb(51, 51, 51);
        font-weight: 400;
        vertical-align: middle;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-34 {
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
        border: 0px solid rgb(229, 231, 235);
    }

    .style-35 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-36 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-37 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: auto;
        background-color: rgba(0, 0, 0, 0);
        display: block;
        line-height: 0px;
        vertical-align: middle;
        white-space: nowrap;
        border-radius: 0px 4px 4px 0px;
        padding-right: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-38 {
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        transition: 0.1s linear;
        width: auto !important;
        padding-right: 0px;
        display: inline-block;
        top: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-39 {
        box-sizing: border-box;
        color: rgb(153, 153, 153);
        transition: 0.1s linear;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-40 {
        box-sizing: border-box;
        clip: rect(0px, 0px, 0px, 0px);
        border: 0px none rgb(34, 34, 34);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0px;
        position: absolute;
        top: 0px;
        white-space: nowrap;
        width: 1px;
    }

    .style-41 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        line-height: 18px;
        margin-top: 8px;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-42 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-43 {
        display: none;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-44 {
        position: absolute;
        left: 80px;
        top: 325px;
        left: 80px;
        top: 325px;
        box-sizing: border-box;
        padding: 0px;
        z-index: 1001;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-45 {
        position: relative;
        min-width: 817px;
        min-width: 817px;
        box-sizing: border-box;
        border: 0px solid rgba(0, 0, 0, 0);
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 14px 0px;
        max-height: 260px;
        overflow: auto;
    }

    .style-46 {
        position: relative;
        height: 8964px;
        height: auto;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-47 {
        transform: translate(0px, 0px);
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-48 {
        list-style: outside none none;
        margin: 0px;
        padding: 12px 0px;
        box-sizing: border-box;
        max-height: none;
        overflow: auto;
        border: 0px none rgb(34, 34, 34);
        animation-duration: 0.3s;
        animation-timing-function: ease;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 14px 0px;
        font-size: 14px;
        line-height: 36px;
        min-width: 100px;
        position: relative;
    }

    .style-49 {
        margin-left: 0px;
        box-sizing: border-box;
        background-color: rgb(250, 250, 250);
        color: rgb(51, 51, 51);
        cursor: pointer;
        position: relative;
        transition: background 0.1s linear;
        padding: 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-50 {
        box-sizing: border-box;
        overflow-wrap: normal;
        font-size: 14px;
        height: 36px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-51 {
        box-sizing: border-box;
        margin-left: -16px;
        position: absolute;
        top: 0px;
        color: rgb(255, 102, 0);
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-52 {
        box-sizing: border-box;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-53 {
        margin-left: 0px;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        cursor: pointer;
        position: relative;
        transition: background 0.1s linear;
        padding: 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-54 {
        box-sizing: border-box;
        overflow-wrap: normal;
        font-size: 14px;
        height: 36px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-55 {
        box-sizing: border-box;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-56 {
        margin-left: 0px;
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        cursor: pointer;
        position: relative;
        transition: background 0.1s linear;
        padding: 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-57 {
        box-sizing: border-box;
        overflow-wrap: normal;
        font-size: 14px;
        height: 36px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-58 {
        box-sizing: border-box;
        vertical-align: middle;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-59 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        flex: 0 0 50%;
        max-width: 50%;
        width: 50%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-60 {
        box-sizing: border-box;
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-61 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-62 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-63 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-64 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-65 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        padding-top: 18px;
        height: 48px;
        position: absolute;
        z-index: 2;
        padding: 18px 12px 0px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-66 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        flex: 0 0 50%;
        max-width: 50%;
        width: 50%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-67 {
        box-sizing: border-box;
        flex: 1 1 0%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-68 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-69 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-70 {
        width: 100%;
        box-sizing: border-box;
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        line-height: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-71 {
        box-sizing: border-box;
        border-radius: 8px 0px 0px 8px;
        font-size: 14px;
        border-right-width: 0px;
        background-color: rgb(250, 250, 250);
        border: 1px solid rgb(216, 216, 216);
        color: rgb(153, 153, 153);
        padding: 0px 8px;
        text-align: center;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        display: table-cell;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
    }

    .style-72 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-bottom-right-radius: 8px;
        border-top-right-radius: 8px;
        border-radius: 0px 8px 8px 0px;
        overflow: hidden;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-73 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-74 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        padding-top: 18px;
        height: 48px;
        position: absolute;
        z-index: 2;
        padding: 18px 12px 0px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-75 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: table-cell;
        line-height: 14px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        font-size: 14px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-76 {
        box-sizing: border-box;
        align-items: center;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        display: flex;
        height: 41.3906px;
        padding-left: 3px;
        padding-right: 12px;
        position: relative;
        z-index: 3;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-77 {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        color: rgb(34, 34, 34);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-78 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        line-height: 18px;
        margin-top: 8px;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-79 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-80 {
        box-sizing: border-box;
        margin-bottom: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-81 {
        box-sizing: border-box;
        margin-bottom: 12px;
        margin: 0px 0px 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-82 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-83 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-84 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-85 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        padding-top: 18px;
        height: 48px;
        position: absolute;
        z-index: 2;
        padding: 18px 12px 0px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-86 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: table-cell;
        line-height: 14px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        font-size: 14px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-87 {
        box-sizing: border-box;
        align-items: center;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        display: flex;
        height: 41.3906px;
        padding-left: 3px;
        padding-right: 12px;
        position: relative;
        z-index: 3;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-88 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 14px;
        margin: 0px;
        cursor: pointer;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(0, 0, 0);
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        border-radius: 0px;
        border-width: 0px;
        height: 20px;
        padding: 0px;
        box-shadow: none;
        user-select: text;
        border-style: solid;
        display: block;
        position: relative;
        text-align: center;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-weight: 400;
        border: 0px solid rgb(0, 0, 0);
    }

    .style-89 {
        display: inline-block;
        width: 17px;
        margin-right: 3px;
        width: 17px;
        margin-right: 3px;
        box-sizing: border-box;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-90 {
        width: 16px;
        box-sizing: border-box;
        border-style: none;
        display: inline;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-91 {
        box-sizing: border-box;
        text-decoration-line: underline;
        display: inline-block;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-92 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-93 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-94 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-95 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-96 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-97 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        padding-top: 18px;
        height: 48px;
        position: absolute;
        z-index: 2;
        padding: 18px 12px 0px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-98 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        flex: 0 0 29.1667%;
        max-width: 29.1667%;
        width: 29.1667%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-99 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-100 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-101 {
        width: 100%;
        box-sizing: border-box;
        min-width: 100px;
        outline: rgb(34, 34, 34) none 0px;
        transition: 0.1s linear;
        display: inline-block;
        font-size: 0px;
        position: relative;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-102 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        align-items: center;
        color: rgb(51, 51, 51);
        display: inline-flex;
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-103 {
        box-sizing: border-box;
        display: none;
        color: rgb(118, 118, 118);
        font-size: 14px;
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-104 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        align-items: center;
        display: flex;
        flex: 1 1 0px;
        overflow: hidden;
        width: 100%;
        font-size: 14px;
        padding: 0px 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-105 {
        box-sizing: border-box;
        height: 46px;
        position: absolute;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-106 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        padding-left: 0px;
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px 0px 0px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-107 {
        box-sizing: border-box;
        display: block;
        font-style: normal;
        line-height: 30px;
        padding-top: 18px;
        position: absolute;
        white-space: nowrap;
        z-index: 2;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-108 {
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-109 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        height: 48px;
        position: absolute;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        cursor: auto;
        left: 0px;
        outline: rgb(51, 51, 51) none 0px;
        padding: 0px;
        width: 100%;
        display: block;
        letter-spacing: normal;
        white-space: nowrap;
        padding-left: 0px;
        padding-right: 0px;
        color: rgb(51, 51, 51);
        font-weight: 400;
        vertical-align: middle;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-110 {
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
        border: 0px solid rgb(229, 231, 235);
    }

    .style-111 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-112 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-113 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: auto;
        background-color: rgba(0, 0, 0, 0);
        display: block;
        line-height: 0px;
        vertical-align: middle;
        white-space: nowrap;
        border-radius: 0px 4px 4px 0px;
        padding-right: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-114 {
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        transition: 0.1s linear;
        width: auto !important;
        padding-right: 0px;
        display: inline-block;
        top: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-115 {
        box-sizing: border-box;
        color: rgb(153, 153, 153);
        transition: 0.1s linear;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-116 {
        box-sizing: border-box;
        clip: rect(0px, 0px, 0px, 0px);
        border: 0px none rgb(34, 34, 34);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0px;
        position: absolute;
        top: 0px;
        white-space: nowrap;
        width: 1px;
    }

    .style-117 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        flex: 0 0 29.1667%;
        max-width: 29.1667%;
        width: 29.1667%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-118 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-119 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-120 {
        width: 100%;
        box-sizing: border-box;
        min-width: 100px;
        outline: rgb(34, 34, 34) none 0px;
        transition: 0.1s linear;
        display: inline-block;
        font-size: 0px;
        position: relative;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-121 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        align-items: center;
        color: rgb(51, 51, 51);
        display: inline-flex;
        min-width: 100px;
        outline: rgb(51, 51, 51) none 0px;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-122 {
        box-sizing: border-box;
        display: none;
        color: rgb(118, 118, 118);
        font-size: 14px;
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-123 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        align-items: center;
        display: flex;
        flex: 1 1 0px;
        overflow: hidden;
        width: 100%;
        font-size: 14px;
        padding: 0px 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-124 {
        box-sizing: border-box;
        height: 46px;
        position: absolute;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-125 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        padding-left: 0px;
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px 0px 0px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-126 {
        box-sizing: border-box;
        display: block;
        font-style: normal;
        line-height: 30px;
        padding-top: 18px;
        position: absolute;
        white-space: nowrap;
        z-index: 2;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-127 {
        box-sizing: border-box;
        display: block;
        max-width: 100%;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-128 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        height: 48px;
        position: absolute;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        cursor: auto;
        left: 0px;
        outline: rgb(51, 51, 51) none 0px;
        padding: 0px;
        width: 100%;
        display: block;
        letter-spacing: normal;
        white-space: nowrap;
        padding-left: 0px;
        padding-right: 0px;
        color: rgb(51, 51, 51);
        font-weight: 400;
        vertical-align: middle;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-129 {
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
        border: 0px solid rgb(229, 231, 235);
    }

    .style-130 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-131 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-132 {
        box-sizing: border-box;
        flex: 0 0 auto;
        width: auto;
        background-color: rgba(0, 0, 0, 0);
        display: block;
        line-height: 0px;
        vertical-align: middle;
        white-space: nowrap;
        border-radius: 0px 4px 4px 0px;
        padding-right: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-133 {
        box-sizing: border-box;
        cursor: pointer;
        text-align: center;
        transition: 0.1s linear;
        width: auto !important;
        padding-right: 0px;
        display: inline-block;
        top: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-134 {
        box-sizing: border-box;
        color: rgb(153, 153, 153);
        transition: 0.1s linear;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-135 {
        box-sizing: border-box;
        clip: rect(0px, 0px, 0px, 0px);
        border: 0px none rgb(34, 34, 34);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0px;
        position: absolute;
        top: 0px;
        white-space: nowrap;
        width: 1px;
    }

    .style-136 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        flex: 0 0 41.6667%;
        max-width: 41.6667%;
        width: 41.6667%;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-137 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-138 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-139 {
        box-sizing: border-box;
        height: 48px;
        line-height: 48px;
        --font-size: 14px;
        --color: #222;
        --placeholder-color: #767676;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(216, 216, 216);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-140 {
        box-sizing: border-box;
        font-size: 12px;
        height: 48px;
        line-height: 48px;
        transform: matrix(1, 0, 0, 1, 0, -9.5);
        color: rgb(118, 118, 118);
        overflow: hidden;
        padding: 0px 12px;
        position: absolute;
        text-overflow: ellipsis;
        transition: font-size 0.3s, transform 0.3s, -webkit-transform 0.3s;
        white-space: nowrap;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-141 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 48px;
        margin: 0px;
        padding-top: 18px;
        height: 48px;
        position: absolute;
        z-index: 2;
        padding: 18px 12px 0px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(51, 51, 51);
        color: rgb(51, 51, 51);
        font-weight: 400;
        outline: rgb(51, 51, 51) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-142 {
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        display: table-cell;
        line-height: 14px;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        font-size: 14px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-143 {
        box-sizing: border-box;
        align-items: center;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        display: flex;
        height: 41.3906px;
        padding-left: 3px;
        padding-right: 12px;
        position: relative;
        z-index: 3;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-144 {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        color: rgb(34, 34, 34);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-145 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        line-height: 18px;
        margin-top: 8px;
        margin-left: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-146 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-147 {
        box-sizing: border-box;
        margin-bottom: 12px;
        margin: 0px 0px 12px;
        align-items: baseline;
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-148 {
        box-sizing: border-box;
        color: rgb(51, 51, 51);
        display: none;
        padding-right: 12px;
        text-align: right;
        vertical-align: top;
        margin-bottom: 2px;
        font-size: 14px;
        line-height: 36px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-149 {
        box-sizing: border-box;
        display: inline-block;
        line-height: 21px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-150 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        display: block;
        font-size: 14px;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-151 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-152 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-153 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-154 {
        box-sizing: border-box;
        border-radius: 40px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        padding: 0px;
        border-style: solid;
        border-width: 1px;
        box-shadow: none;
        display: inline-block;
        max-width: 100%;
        outline: rgb(34, 34, 34) none 0px;
        overflow: hidden;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        margin-bottom: 8px;
        margin-right: 8px;
        background-color: rgb(255, 255, 255);
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        border: 1px solid rgb(221, 221, 221);
    }

    .style-154:focus,
    .style-156:focus,
    .style-158:focus,
    .style-160:focus {
        background: #ff6600;
    }

    .style-155 {
        box-sizing: border-box;
        vertical-align: baseline;
        font-size: 14px;
        min-width: 48px;
        padding: 0px 16px;
        cursor: pointer;
        display: inline-block;
        height: 42px;
        max-width: 100%;
        position: relative;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-156 {
        box-sizing: border-box;
        border-radius: 40px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        padding: 0px;
        border-style: solid;
        border-width: 1px;
        box-shadow: none;
        display: inline-block;
        max-width: 100%;
        outline: rgb(34, 34, 34) none 0px;
        overflow: hidden;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        margin-bottom: 8px;
        margin-right: 8px;
        background-color: rgb(255, 255, 255);
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        border: 1px solid rgb(221, 221, 221);
    }

    .style-157 {
        box-sizing: border-box;
        vertical-align: baseline;
        font-size: 14px;
        min-width: 48px;
        padding: 0px 16px;
        cursor: pointer;
        display: inline-block;
        height: 42px;
        max-width: 100%;
        position: relative;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-158 {
        box-sizing: border-box;
        border-radius: 40px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        padding: 0px;
        border-style: solid;
        border-width: 1px;
        box-shadow: none;
        display: inline-block;
        max-width: 100%;
        outline: rgb(34, 34, 34) none 0px;
        overflow: hidden;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        margin-bottom: 8px;
        margin-right: 8px;
        background-color: rgb(255, 255, 255);
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        border: 1px solid rgb(221, 221, 221);
    }

    .style-159 {
        box-sizing: border-box;
        vertical-align: baseline;
        font-size: 14px;
        min-width: 48px;
        padding: 0px 16px;
        cursor: pointer;
        display: inline-block;
        height: 42px;
        max-width: 100%;
        position: relative;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-160 {
        box-sizing: border-box;
        border-radius: 40px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        padding: 0px;
        border-style: solid;
        border-width: 1px;
        box-shadow: none;
        display: inline-block;
        max-width: 100%;
        outline: rgb(34, 34, 34) none 0px;
        overflow: hidden;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        margin-bottom: 8px;
        margin-right: 8px;
        background-color: rgb(255, 255, 255);
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        border: 1px solid rgb(221, 221, 221);
    }

    .style-161 {
        box-sizing: border-box;
        vertical-align: baseline;
        font-size: 14px;
        min-width: 48px;
        padding: 0px 16px;
        cursor: pointer;
        display: inline-block;
        height: 42px;
        max-width: 100%;
        position: relative;
        text-align: center;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-162 {
        padding-left: 10px;
        padding-right: 10px;
        padding-right: 10px;
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-163 {
        box-sizing: border-box;
        margin-bottom: 20px;
        margin: 0px 0px 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-164 {
        box-sizing: border-box;
        line-height: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-165 {
        box-sizing: border-box;
        line-height: 35px;
        display: inline-block;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-166 {
        box-sizing: border-box;
        display: inline-block;
        line-height: 14px;
        position: relative;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-167 {
        box-sizing: border-box;
        height: 20px;
        width: 20px !important;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border: 1px solid rgb(216, 216, 216);
        border-radius: 4px;
        box-shadow: none;
        display: block;
        text-align: left;
        transition: 0.1s linear;
    }

    .style-168 {
        margin-left: -5px;
        margin-right: -4px;
        transform: matrix(0.5, 0, 0, 0.5, 0, 0);
        box-sizing: border-box;
        line-height: 20px;
        color: rgb(255, 255, 255);
        left: 4px;
        opacity: 0;
        position: absolute;
        top: 0px;
        transition: 0.1s linear;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    /* .style-169 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        padding: 0px;
        overflow: visible;
        font-size: 14px;
        line-height: 16.1px;
        margin: 0px;
        height: 20px;
        width: 20px !important;
        cursor: pointer;
        left: 0px;
        opacity: 0;
        position: absolute;
        top: 0px;
        font-feature-settings: normal;
        color: rgb(34, 34, 34);
        font-variation-settings: normal;
        font-weight: 400;
        border: 0px none rgb(34, 34, 34);
    } */

    .style-169 {
        box-sizing: border-box;
        padding: 0px;
        font-size: 14px;
        background: #ff6600;
        margin: 0px;
        height: 20px;
        width: 20px !important;
        cursor: pointer;
        color: rgb(34, 34, 34);
        border: 0px none rgb(34, 34, 34);
    }

    input[type="checkbox"]:checked {
        accent-color: #ff6600;
        /* Change to any color */
    }

    .style-170 {
        box-sizing: border-box;
        font-size: 14px;
        line-height: 18px;
        margin-left: 12px;
        color: rgb(51, 51, 51);
        margin: 0px 4px 0px 12px;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-171 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-172 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 14px;
        margin: 0px;
        cursor: pointer;
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(255, 102, 0);
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        height: 46px;
        padding: 0px 28px;
        box-shadow: none;
        display: inline-flex;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(255, 255, 255);
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(255, 255, 255) none 0px;
        align-items: center;
        font-weight: 700;
        background-color: rgb(255, 102, 0);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        border: 1px solid rgb(255, 102, 0);
    }

    .style-173 {
        box-sizing: border-box;
        display: block;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-174 {
        box-sizing: border-box;
        margin-top: 28px;
        border-top: 1px solid rgb(221, 221, 221);
        padding: 28px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-175 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 0px;
        font-weight: 700;
        box-sizing: border-box;
        display: flex;
        margin: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-176 {
        box-sizing: border-box;
        background-image: url('https://img.alicdn.com/imgextra/i4/O1CN019BARi31wpYiUoOJ5g_!!6000000006357-55-tps-23-24.svg');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        display: block;
        height: 30px;
        margin-right: 12px;
        width: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-177 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-178 {
        box-sizing: border-box;
        border-top: 1px solid rgb(221, 221, 221);
        padding: 28px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-179 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 0px;
        font-weight: 700;
        box-sizing: border-box;
        display: flex;
        margin: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-180 {
        box-sizing: border-box;
        background-image: url('https://img.alicdn.com/imgextra/i4/O1CN01DaGUTh1DHWZc783vC_!!6000000000191-55-tps-28-28.svg');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        display: block;
        height: 30px;
        margin-right: 12px;
        width: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-181 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-182 {
        min-height: 236px;
        box-sizing: border-box;
        display: none;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-183 {
        border-top: 1px solid rgb(221, 221, 221);
        grid-template-rows: 1fr;
        display: grid;
        padding: 28px 0px;
        position: relative;
        transition: none;
        width: auto;
        box-sizing: border-box;
    }

    .style-184 {
        display: flex;
        font-size: 20px;
        font-weight: 700;
        justify-content: space-between;
        line-height: 26px;
        margin-bottom: 24px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-185 {
        align-items: center;
        display: flex;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-186 {
        margin-right: 12px;
        box-sizing: border-box;
        border-style: none;
        display: block;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-187 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-188 {
        margin-left: 40px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-189 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-190 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-191 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-192 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-193 {
        box-sizing: border-box;
        align-items: center;
        cursor: pointer;
        display: flex;
        height: 64px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-194 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        padding-left: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-195 {
        box-sizing: border-box;
        overflow: hidden;
        color: rgb(102, 102, 102);
        font-size: 20px;
        margin-right: 20px;
        display: block;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-196 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-197 {
        box-sizing: border-box;
        overflow: hidden;
        border: 1px solid rgb(234, 234, 234);
        border-radius: 4px;
        height: 32px;
        margin-right: 16px;
        position: relative;
        width: 48px;
        display: block;
        vertical-align: middle;
    }

    .style-198 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-199 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-200 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-201 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-202 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-203 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-204 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-205 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-right: 20px;
        text-align: left;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-206 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-207 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-208 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-209 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-210 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-211 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-212 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-213 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-214 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 8px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-215 {
        box-sizing: border-box;
        padding-left: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-216 {
        box-sizing: border-box;
        height: auto;
        margin-left: -20px;
        min-height: 64px;
        padding: 16px 0px;
        align-items: center;
        cursor: pointer;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-217 {
        box-sizing: border-box;
        --icon-size: 16px;
        margin: 0px 20px;
        --font-size: 17px;
        --gap: 8px;
        align-items: center;
        cursor: pointer;
        display: flex;
        justify-content: flex-start;
        vertical-align: text-bottom;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-218 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        padding: 0px;
        overflow: visible;
        font-size: 14px;
        line-height: 16.1px;
        margin: 0px;
        display: none;
        font-feature-settings: normal;
        color: rgb(51, 51, 51);
        font-variation-settings: normal;
        font-weight: 400;
        border: 0px none rgb(51, 51, 51);
    }

    .style-219 {
        box-sizing: content-box;
        border: 2px solid rgb(221, 221, 221);
        border-radius: 20px;
        color: rgb(255, 255, 255);
        flex: 0 0 auto;
        height: 16px;
        position: relative;
        width: 16px;
    }

    .style-220 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-221 {
        box-sizing: border-box;
        overflow: hidden;
        vertical-align: bottom;
        border: 1px solid rgb(234, 234, 234);
        border-radius: 4px;
        height: 32px;
        margin-right: 16px;
        position: relative;
        width: 48px;
        display: block;
    }

    .style-222 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-223 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-224 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-225 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-226 {
        box-sizing: border-box;
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
        border: 0px solid rgb(229, 231, 235);
    }

    .style-230 {
        box-sizing: border-box;
        display: flex;
        flex-wrap: wrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-231 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        margin-right: 20px;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-232 {
        box-sizing: border-box;
        height: 20px;
        margin-bottom: 4px;
        padding: 1px 0px;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-233 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-234 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-235 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-236 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-237 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-238 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-239 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-240 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-241 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-242 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-243 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-244 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-245 {
        box-sizing: border-box;
        border: 0px none rgb(51, 51, 51);
        display: inline-block;
        height: 20px;
    }

    .style-246 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        margin-right: 4px;
        max-width: 70px;
        display: inline;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-247 {
        box-sizing: border-box;
        display: none;
        border-top: 1px solid rgb(221, 221, 221);
        padding: 28px 0px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-248 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-249 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 0px;
        font-weight: 700;
        box-sizing: border-box;
        display: flex;
        margin: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-250 {
        box-sizing: border-box;
        background-image: url('https://img.alicdn.com/imgextra/i4/O1CN01DaGUTh1DHWZc783vC_!!6000000000191-55-tps-28-28.svg');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        display: block;
        height: 30px;
        margin-right: 12px;
        width: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-251 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-252 {
        box-sizing: border-box;
        align-items: center;
        color: rgb(34, 34, 34);
        display: flex;
        margin: 24px 0px 28px 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-253 {
        font-weight: 700;
        line-height: 24px;
        font-size: 18px;
        margin-bottom: 0px;
        box-sizing: border-box;
        align-items: center;
        display: flex;
        margin: 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-254 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        display: flow-root;
        margin-right: 0px;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-255 {
        box-sizing: border-box;
        margin: 24px 0px 0px 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-256 {
        box-sizing: border-box;
        align-items: center;
        border: 1px solid rgb(221, 221, 221);
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        padding: 18px 24px;
    }

    .style-257 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-258 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        font-size: 16px;
        line-height: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-259 {
        box-sizing: border-box;
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        margin-right: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-260 {
        color: #22891F;
        box-sizing: border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-261 {
        box-sizing: border-box;
        border-left: 1px solid rgb(221, 221, 221);
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        padding-left: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-262 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-263 {
        box-sizing: border-box;
        display: inline-block;
        font-weight: 600;
        margin-left: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-264 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 16px;
        line-height: 20px;
        margin: 0px;
        cursor: pointer;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(0, 0, 0);
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        border-radius: 0px;
        border-width: 0px;
        height: 20px;
        padding: 0px;
        box-shadow: none;
        user-select: text;
        border-style: solid;
        display: block;
        position: relative;
        text-align: center;
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        font-weight: 600;
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        border: 0px solid rgb(0, 0, 0);
    }

    .style-265 {
        box-sizing: border-box;
        text-decoration-line: underline;
        display: inline-block;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-266 {
        box-sizing: border-box;
        margin-left: 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-267 {
        box-sizing: border-box;
        margin-top: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-268 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        margin-bottom: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-269 {
        color: rgb(0, 127, 252);
        text-decoration: none solid rgb(0, 127, 252);
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        transition: opacity 0.2s ease-in-out;
        cursor: pointer;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        margin-right: 20px;
        min-height: 100px;
        min-width: 100px;
        position: relative;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-270 {
        box-sizing: border-box;
        border-style: none;
        border-radius: 8px;
        max-height: 100px;
        max-width: 100px;
        display: block;
        height: auto;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-271 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-272 {
        box-sizing: border-box;
        padding: 4px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-273 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-274 {
        box-sizing: border-box;
        border-style: none;
        height: 14px;
        z-index: 1;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-275 {
        box-sizing: border-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        color: rgb(34, 34, 34);
        display: flow-root;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        margin-bottom: 4px;
        overflow: hidden;
        text-overflow: ellipsis;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-276 {
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        box-sizing: border-box;
        background-color: rgba(0, 0, 0, 0);
        transition: opacity 0.2s ease-in-out;
        cursor: pointer;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-277 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        margin-top: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-278 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-279 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-280 {
        box-sizing: border-box;
        margin: 12px 0px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-281 {
        box-sizing: border-box;
        align-items: center;
        background-color: rgb(244, 244, 244);
        border-radius: 8px;
        display: flex;
        padding: 16px 24px;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-282 {
        box-sizing: border-box;
        background-color: rgb(244, 244, 244);
        border-radius: 4px;
        display: flex;
        flex-wrap: wrap;
        font-size: 12px;
        flex: 1 1 100%;
        flex-direction: column;
        margin-right: 20px;
        min-width: 340px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-283 {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-284 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-285 {
        box-sizing: border-box;
        align-items: center;
        border-radius: 4px;
        display: flex;
        height: 44px;
        justify-content: center;
        margin-right: 16px;
        width: 44px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-286 {
        box-sizing: border-box;
        border-style: none;
        border-radius: 4px;
        max-height: 100%;
        max-width: 100%;
        display: block;
        height: auto;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-287 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        display: flex;
        flex-direction: column;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-288 {
        box-sizing: border-box;
        margin-bottom: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-289 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 500;
        height: 18px;
        line-height: 18px;
        max-width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-290 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-291 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-292 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-293 {
        box-sizing: border-box;
        justify-content: center;
        margin-right: 5px;
        align-items: center;
        display: flex;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-294 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 600;
        line-height: 18px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-295 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        display: block;
        font-size: 14px;
        line-height: 18px;
        margin-left: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-296 {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        display: block;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        color: rgb(34, 34, 34);
        cursor: pointer;
        margin-left: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-297 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-298 {
        box-sizing: border-box;
        flex: 0 0 25%;
        margin-right: 20px;
        text-align: right;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-299 {
        box-sizing: border-box;
        min-width: 84px;
        width: 100px;
        display: inline-block;
        background-color: rgb(255, 255, 255);
        border-bottom: 1px solid rgb(221, 221, 221);
        border-radius: 100px;
        border-top: 1px solid rgb(221, 221, 221);
        border: 0px solid rgb(229, 231, 235);
    }

    .style-300 {
        box-sizing: border-box;
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        line-height: 0px;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-301 {
        box-sizing: border-box;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
        display: table-cell;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-302 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 0px;
        margin: 0px 2px 0px 0px;
        cursor: pointer;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        width: 28px;
        border-bottom-left-radius: 50%;
        border-top-left-radius: 50%;
        margin-right: 2px;
        height: 40px;
        box-shadow: none;
        padding: 0px;
        border-bottom-right-radius: 50%;
        border-top-right-radius: 50%;
        border-style: solid;
        border-radius: 50%;
        border-width: 1px;
        display: inline-block;
        position: relative;
        text-align: center;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        border: 1px solid rgb(221, 221, 221);
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-weight: 400;
    }

    .style-303 {
        box-sizing: border-box;
        transform: none;
        display: inline-block;
        font-size: 0px;
        vertical-align: middle;
        -webkit-font-smoothing: antialiased;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-304 {
        box-sizing: border-box;
        border-radius: 0px;
        width: 100%;
        height: 40px;
        background-color: rgb(255, 255, 255);
        border: 0px none rgb(51, 51, 51);
        border-collapse: separate;
        border-spacing: 0px 0px;
        display: inline-table;
        font-size: 0px;
        line-height: 0px;
        transition: 0.1s linear;
        vertical-align: middle;
    }

    .style-305 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        overflow: clip;
        font-size: 14px;
        line-height: 40px;
        margin: 0px;
        padding: 0px;
        text-align: center;
        height: 40px;
        background-color: rgba(0, 0, 0, 0);
        border: 0px none rgb(34, 34, 34);
        color: rgb(34, 34, 34);
        font-weight: 600;
        outline: rgb(34, 34, 34) none 0px;
        vertical-align: middle;
        width: 100%;
        font-feature-settings: normal;
        font-variation-settings: normal;
    }

    .style-306 {
        box-sizing: border-box;
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        display: table-cell;
        vertical-align: middle;
        white-space: nowrap;
        width: 1px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-307 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 0px;
        margin: 0px 0px 0px 2px;
        cursor: pointer;
        background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(221, 221, 221);
        color: rgb(34, 34, 34);
        text-decoration: none solid rgb(34, 34, 34);
        width: 28px;
        border-bottom-right-radius: 50%;
        border-top-right-radius: 50%;
        margin-left: 2px;
        height: 40px;
        box-shadow: none;
        padding: 0px;
        border-bottom-left-radius: 50%;
        border-top-left-radius: 50%;
        border-style: solid;
        border-radius: 50%;
        border-width: 1px;
        display: inline-block;
        position: relative;
        text-align: center;
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        border: 1px solid rgb(221, 221, 221);
        background-color: rgb(255, 255, 255);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-weight: 400;
    }

    .style-308 {
        box-sizing: border-box;
        transform: none;
        display: inline-block;
        font-size: 0px;
        vertical-align: middle;
        -webkit-font-smoothing: antialiased;
        font-family: NextIcon;
        font-style: normal;
        font-weight: 700;
        text-transform: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-309 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        flex: 0 0 12%;
        font-size: 16px;
        font-weight: 700;
        line-height: 28px;
        margin-right: 20px;
        max-width: 180px;
        text-align: right;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-310 {
        box-sizing: border-box;
        background-color: rgb(244, 244, 244);
        border-radius: 0px 0px 8px 8px;
        margin-top: -8px;
        padding: 16px 24px;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-311 {
        box-sizing: border-box;
        align-items: center;
        border-top: 1px solid rgb(221, 221, 221);
        display: flex;
        padding-top: 12px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-312 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        margin-right: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-313 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-314 {
        color: #22891F;
        box-sizing: border-box;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-315 {
        box-sizing: border-box;
        margin-left: 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-316 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-317 {
        box-sizing: border-box;
        margin: 28px 40px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-318 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 14px;
        margin: 0px;
        cursor: pointer;
        color: rgb(34, 34, 34);
        border-radius: 0px;
        border-width: 0px;
        height: 20px;
        padding: 0px;
        background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgba(0, 0, 0, 0);
        box-shadow: none;
        user-select: text;
        border-style: solid;
        display: inline-block;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(34, 34, 34);
        transition: 0.1s linear;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(34, 34, 34) none 0px;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-weight: 400;
        border: 0px solid rgba(0, 0, 0, 0);
    }

    .style-319 {
        box-sizing: border-box;
        text-decoration-line: underline;
        display: inline-block;
        text-decoration: underline solid rgb(34, 34, 34);
        vertical-align: middle;
        font-size: 16px;
        font-weight: 400;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-320 {
        margin-left: 32px;
        width: 380px;
        box-sizing: border-box;
        flex: 1 1 0%;
        max-width: 380px;
        min-width: 380px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-321 {
        max-height: 551px;
        box-sizing: border-box;
        background-color: rgb(255, 255, 255);
        border-radius: 8px;
        bottom: 28px;
        box-shadow: rgba(0, 0, 0, 0.06) 0px -4px 20px 0px;
        overflow-y: auto;
        position: sticky;
        top: 28px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-322 {
        box-sizing: border-box;
        margin: 0px 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-323 {
        font-size: 20px;
        line-height: 24px;
        margin-bottom: 24px;
        font-weight: 700;
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        margin: 32px 0px 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-324 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-325 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        font-size: 14px;
        justify-content: space-between;
        padding: 6px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-326 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        margin-right: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-327 {
        box-sizing: border-box;
        font-weight: 500;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-328 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-329 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        font-size: 14px;
        justify-content: space-between;
        padding: 6px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-330 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-331 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        margin-right: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-332 {
        box-sizing: border-box;
        font-weight: 500;
        white-space: nowrap;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-333 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-334 {
        box-sizing: border-box;
        min-height: 31px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-335 {
        margin: 0px;
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-336 {
        box-sizing: border-box;
        border-bottom: 1px solid rgb(217, 217, 217);
        border-top: 1px solid rgb(217, 217, 217);
        margin: 10px 0px;
        padding: 10px 0px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-337 {
        box-sizing: border-box;
        margin: 0px;
        padding: 6px 0px;
        align-items: center;
        display: flex;
        font-size: 12px;
        justify-content: space-between;
        margin-bottom: 0px;
        min-width: 320px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-338 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-339 {
        box-sizing: border-box;
        align-items: center;
        display: flex;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-340 {
        box-sizing: border-box;
        flex: 0 1 auto;
        max-width: 340px;
        padding-right: 3px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-341 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px;
        word-break: break-word;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-342 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-343 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-344 {
        box-sizing: border-box;
        font-weight: 600;
        color: rgb(34, 34, 34);
        font-size: 14px;
        line-height: 18px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-345 {
        box-sizing: border-box;
        display: none;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-346 {
        box-sizing: border-box;
        background-color: rgb(255, 255, 255);
        padding: 16px 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-347 {
        font-family: Inter, 'SF Pro Text', Roboto, 'Helvetica Neue', Helvetica, Tahoma, Arial, 'PingFang SC', 'Microsoft YaHei';
        box-sizing: border-box;
        appearance: button;
        text-transform: none;
        overflow: visible;
        font-size: 14px;
        line-height: 14px;
        margin: 0px;
        cursor: pointer;
        color: rgb(255, 255, 255);
        background: rgb(255, 102, 0) none repeat scroll 0% 0% / auto padding-box border-box;
        border-color: rgb(255, 102, 0);
        border-style: solid;
        border-radius: 100px;
        border-width: 1px;
        height: 48px;
        padding: 0px 28px;
        box-shadow: none;
        display: inline-block;
        position: relative;
        text-align: center;
        text-decoration: none solid rgb(255, 255, 255);
        transition: 0.1s linear;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
        outline: rgb(255, 255, 255) none 0px;
        width: 100%;
        background-color: rgb(255, 102, 0);
        background-image: none;
        font-feature-settings: normal;
        font-variation-settings: normal;
        font-weight: 400;
        border: 1px solid rgb(255, 102, 0);
    }

    .style-348 {
        box-sizing: border-box;
        display: inline-block;
        vertical-align: middle;
        background-image: url('https://img.alicdn.com/imgextra/i4/O1CN01MS0kpi1PgVZK5Qlgr_!!6000000001870-55-tps-24-24.svg');
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        margin-right: 8px;
        width: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-349 {
        box-sizing: border-box;
        display: inline-block;
        vertical-align: middle;
        font-size: 18px;
        font-weight: 700;
        line-height: 24px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-350 {
        box-sizing: border-box;
        margin: 16px 32px 32px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-351 {
        box-sizing: border-box;
        width: 100%;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-352 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-353 {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 12px;
        word-break: break-word;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-354 {
        box-sizing: border-box;
        align-items: baseline;
        color: rgb(51, 51, 51);
        display: flex;
        font-size: 16px;
        font-weight: 700;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-355 {
        box-sizing: border-box;
        border-style: none;
        height: 14px;
        display: block;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-356 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-357 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-358 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        overflow: hidden;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-359 {
        box-sizing: border-box;
        height: 20px;
        margin-top: 1px;
        min-width: 20px;
        width: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-360 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        width: 20px;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-361 {
        box-sizing: border-box;
        margin-left: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-362 {
        color: #22891F;
        box-sizing: border-box;
        box-sizing: border-box;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-363 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 12px;
        line-height: 20px;
        margin-top: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-364 {
        box-sizing: border-box;
        cursor: pointer;
        text-decoration-line: underline;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-365 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-366 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-367 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        overflow: hidden;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-368 {
        box-sizing: border-box;
        height: 20px;
        margin-top: 1px;
        min-width: 20px;
        width: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-369 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        width: 20px;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-370 {
        box-sizing: border-box;
        margin-left: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-371 {
        color: #22891F;
        box-sizing: border-box;
        box-sizing: border-box;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-372 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 12px;
        line-height: 20px;
        margin-top: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-373 {
        box-sizing: border-box;
        cursor: pointer;
        text-decoration-line: underline;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-374 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-375 {
        box-sizing: border-box;
        margin-bottom: 0px;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-376 {
        box-sizing: border-box;
        align-items: flex-start;
        display: flex;
        flex-direction: row;
        overflow: hidden;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-377 {
        box-sizing: border-box;
        height: 20px;
        margin-top: 1px;
        min-width: 20px;
        width: 20px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-378 {
        box-sizing: border-box;
        border-style: none;
        height: 20px;
        width: 20px;
        display: inline;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none rgb(229, 231, 235);
    }

    .style-379 {
        box-sizing: border-box;
        margin-left: 8px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-380 {
        color: #22891F;
        box-sizing: border-box;
        box-sizing: border-box;
        align-items: center;
        font-size: 14px;
        font-weight: 600;
        line-height: 22px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-381 {
        box-sizing: border-box;
        color: rgb(34, 34, 34);
        font-size: 12px;
        line-height: 20px;
        margin-top: 4px;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-382 {
        box-sizing: border-box;
        cursor: pointer;
        text-decoration-line: underline;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-383 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-384 {
        box-sizing: border-box;
        color: rgb(118, 118, 118);
        font-size: 12px;
        font-weight: 400;
        line-height: 16px;
        margin-top: 12px;
        min-height: 18px;
        vertical-align: middle;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-385 {
        box-sizing: border-box;
        border: 0px solid rgb(229, 231, 235);
    }

    .style-386 {
        box-sizing: border-box;
        border-style: none;
        height: 14px;
        margin-bottom: 2px;
        vertical-align: middle;
        display: inline;
        max-width: 100%;
        border: 0px none rgb(229, 231, 235);
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

        /* Main container */
        .style-0 {
            min-width: unset !important;
            max-width: 100% !important;
            padding: 16px !important;
            overflow-x: hidden !important;
        }

        .style-1 {
            padding: 16px !important;
            overflow-x: hidden !important;
        }

        /* Page title */
        .style-2 {
            font-size: 22px !important;
            line-height: 28px !important;
        }

        /* Form sections stack */
        .style-5,
        .style-6 {
            flex-direction: column !important;
        }

        /* Form field rows to full width */
        .style-21,
        .style-22,
        .style-59,
        .style-60,
        .style-66,
        .style-67 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
            padding: 0 !important;
            margin-bottom: 16px !important;
        }

        /* Input fields full width */
        .style-25,
        .style-26,
        .style-63,
        .style-65,
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        select {
            width: 100% !important;
            min-width: unset !important;
            font-size: 16px !important;
            /* Prevent zoom on iOS */
        }

        /* Floating labels */
        .style-30,
        .style-64 {
            font-size: 12px !important;
        }

        /* Input inner content */
        .style-28,
        .style-32,
        .style-33 {
            width: 100% !important;
        }

        /* Dropdown menus */
        .style-44,
        .style-45 {
            width: 100% !important;
            left: 0 !important;
        }

        .style-45,
        .style-46 {
            min-width: unset !important;
            width: 100% !important;
        }

        /* Dropdown list items */
        .style-48,
        .style-49,
        .style-53,
        .style-56 {
            padding: 8px 16px !important;
        }

        /* Country/region selector */
        .style-38,
        .style-39 {
            width: auto !important;
        }

        /* Protection message */
        .style-17 {
            font-size: 13px !important;
            flex-wrap: wrap !important;
        }

        .style-18 {
            width: 16px !important;
        }

        /* Buttons full width */
        button[type="submit"],
        .style-107,
        .style-109,
        .next-btn,
        .next-btn-large {
            width: 100% !important;
            min-width: unset !important;
            margin: 8px 0 !important;
            height: 48px !important;
        }

        /* Touch-friendly sizing */
        a,
        button {
            min-height: 44px !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        /* Form sections */
        .style-8,
        .style-9 {
            padding: 16px 0 !important;
        }

        /* Section headers */
        .style-11,
        .style-12 {
            font-size: 18px !important;
        }

        /* Icon sizing */
        .style-13 {
            width: 24px !important;
            height: 24px !important;
            margin-right: 8px !important;
        }

        /* Font sizes */
        body {
            font-size: 14px !important;
        }

        .style-24,
        .style-62 {
            font-size: 14px !important;
        }

        /* Modal responsive */
        .modal-content {
            width: 95% !important;
            margin: 10% auto !important;
            padding: 16px !important;
        }

        /* Compact spacing */
        .style-16 {
            margin-left: 0 !important;
        }

        /* Help text */
        .style-41 {
            font-size: 12px !important;
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

        .style-0 {
            min-width: unset !important;
            padding: 24px !important;
        }

        /* Two-column layout for form fields */
        .style-21,
        .style-22,
        .style-59,
        .style-60,
        .style-66,
        .style-67 {
            flex: 0 0 48% !important;
            max-width: 48% !important;
        }

        /* Keep some fields full width */
        .style-22:first-child,
        .style-60:first-child {
            flex: 0 0 100% !important;
            max-width: 100% !important;
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

        /* Compact title */
        .style-2 {
            font-size: 20px !important;
            line-height: 26px !important;
            margin-bottom: 16px !important;
        }

        /* Compact sections */
        .style-8,
        .style-9 {
            padding: 12px 0 !important;
        }

        .style-11,
        .style-12 {
            font-size: 16px !important;
        }

        /* Compact inputs */
        .style-25,
        .style-26,
        .style-63,
        .style-65 {
            height: 44px !important;
            line-height: 44px !important;
        }

        /* Smaller icons */
        .style-13 {
            width: 20px !important;
            height: 20px !important;
        }

        .style-18 {
            width: 14px !important;
        }

        /* Compact buttons */
        button[type="submit"] {
            font-size: 14px !important;
            height: 44px !important;
            padding: 0 16px !important;
        }

        /* Compact dropdown */
        .style-45 {
            max-height: 200px !important;
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

<div class="style-0" data-spm-anchor-id="a2756.trade-order-standard.0.i9.e08265aaZ8qKeC">
    <div class="style-1">
        <h1 class="style-2"><span data-i18n-appname="" data-i18n-key="ta.order.com.start-order.title"
                class="style-3">Start order</span></h1>
        <!-- <form role="grid" bizdata="[object Object]" rules="[object Object]" uidata="[object Object]" invaliddetail="[object Object]" type="biz" tag="form" class="style-4"> -->
        <div dir="ltr" role="row" class="style-5">
            <div dir="ltr" role="gridcell" class="style-6">
                <div class="style-7"></div>
                <div class="style-8">
                    <div class="style-9">
                        <div class="style-10">
                            <div class="style-11" data-spm-anchor-id="a2756.trade-order-standard.0.i4.e08265aaZ8qKeC">
                                <h2 class="style-12"><span class="style-13"></span><span data-i18n-appname=""
                                        data-i18n-key="ta.order.com.shippingaddress.title" class="style-14">Shipping
                                        address</span></h2><span class="style-15"></span>
                            </div>
                            <div class="style-16">
                                <div class="style-17"><img class="style-18"
                                        src="https://s.alicdn.com/@img/i2/O1CN01CsqPv31a7Cu7kEgic_!!6000000003282-55-tps-20-20.svg"
                                        alt="" /><span data-i18n-appname=""
                                        data-i18n-key="ta.order.com.shippingaddress.title.tips" class="style-19">Your
                                        personal information is encrypted and will only be used for delivery
                                        purposes.</span></div>
                                <form method="post" action="detail.php" class="style-20">
                                    <div dir="ltr" role="row" class="style-21">
                                        <div dir="ltr" role="gridcell" class="style-22">
                                            <div class="style-23">
                                                <div class="style-24"><span data-meta="Field" class="style-63">
                                                        <div class="style-29">
                                                            <div class="style-64">Country / region</div>
                                                            <input placeholder="<?= ($country) ?? "" ?>" height="100%"
                                                                type="text" autocomplete="one-time-code"
                                                                value="<?= ($country) ?? "" ?>" name="country"
                                                                data-spm-anchor-id="a2756.trade-order-standard.0.i3.e08265aaZ8qKeC"
                                                                class="style-65" />
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-59">
                                            <div dir="ltr" role="gridcell" class="style-60">
                                                <div class="style-61">
                                                    <div class="style-62"><span data-meta="Field" class="style-63">
                                                            <div class="style-64">First name and Last name</div>
                                                            <input placeholder="<?= ($name) ?? "" ?>" height="100%"
                                                                type="text" autocomplete="one-time-code"
                                                                value="<?= ($name) ?? "" ?>" name="name"
                                                                data-spm-anchor-id="a2756.trade-order-standard.0.i5.e08265aaZ8qKeC"
                                                                class="style-65" />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-66">
                                            <div dir="ltr" role="gridcell" class="style-67">
                                                <div class="style-68">
                                                    <div class="style-69"><span data-meta="Field" class="style-70"><span
                                                                class="style-71">+1</span><span data-meta="Field"
                                                                class="style-72">
                                                                <div class="style-73">Phone number</div><input
                                                                    placeholder="<?= ($phone) ?? "" ?>" height="100%"
                                                                    type="text" autocomplete="one-time-code"
                                                                    value="<?= ($phone) ?? "" ?>" name="phone"
                                                                    data-spm-anchor-id="a2756.trade-order-standard.0.i6.e08265aaZ8qKeC"
                                                                    class="style-74" /><span class="style-75">
                                                                    <div class="style-76" aria-haspopup="true"
                                                                        aria-expanded="false"><i class="style-77"></i>
                                                                    </div>
                                                                </span>
                                                            </span></span>
                                                        <div class="style-78">Only used to contact you for delivery
                                                            updates</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-79">
                                            <div class="style-80">
                                                <div aria-haspopup="true" aria-expanded="false" class="style-81">
                                                    <div class="style-82"><span data-meta="Field" class="style-83">
                                                            <div class="style-84">Street address or P.O. box</div><input
                                                                placeholder="<?= ($address_1) ?? "" ?>" height="100%"
                                                                type="text" autocomplete="one-time-code"
                                                                value="<?= ($address_1) ?? "" ?>" name="address_1"
                                                                data-spm-anchor-id="a2756.trade-order-standard.0.i7.e08265aaZ8qKeC"
                                                                class="style-85" /><span class="style-86">
                                                                <div class="style-87"><button type="button"
                                                                        class="style-88">
                                                                        <div class="style-89"><img
                                                                                src="//s.alicdn.com/@img/i3/O1CN01blgNsg1WkogoNhSHy_!!6000000002827-55-tps-24-24.svg"
                                                                                alt="" class="style-90" /></div><span
                                                                            data-i18n-appname=""
                                                                            data-i18n-key="ta.order.com.geoLocation.use_current_location"
                                                                            class="style-91">Use my current
                                                                            location</span>
                                                                    </button></div>
                                                            </span>
                                                        </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-92">
                                            <div class="style-93">
                                                <div class="style-94"><span data-meta="Field" class="style-95">
                                                        <div class="style-96">Apartment, suite, unit, building, floor
                                                            (optional)</div><input
                                                            placeholder="<?= ($address_2) ?? "" ?>" height="100%"
                                                            type="text" autocomplete="one-time-code"
                                                            value="<?= ($country) ?? "" ?>" name="address_2"
                                                            class="style-97" />
                                                    </span> </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-98">
                                            <div class="style-99">
                                                <div class="style-100"><span data-meta="Field" class="style-139">
                                                        <div class="style-140">State</div>
                                                        <input placeholder="<?= ($state) ?? "" ?>" height="100%"
                                                            type="text" autocomplete="one-time-code"
                                                            value="<?= ($state) ?? "" ?>" name="state"
                                                            class="style-141" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-117">
                                            <div class="style-118">
                                                <div class="style-119"><span data-meta="Field" class="style-139">
                                                        <div class="style-140">City</div>
                                                        <input placeholder="<?= ($city) ?? "" ?>" height="100%"
                                                            type="text" autocomplete="one-time-code"
                                                            value="<?= ($city) ?? "" ?>" name="city"
                                                            class="style-141" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div dir="ltr" role="gridcell" class="style-136">
                                            <div aria-haspopup="true" aria-expanded="false" class="style-137">
                                                <div class="style-138"><span data-meta="Field" class="style-139">
                                                        <div class="style-140">ZIP code</div><input
                                                            placeholder="<?= ($postcode) ?? "" ?>" height="100%"
                                                            type="text" autocomplete="one-time-code" name="postcode"
                                                            value="<?= ($postcode) ?? "" ?>" class="style-141" /><span
                                                            class="style-142">
                                                            <div class="style-143" aria-haspopup="true"
                                                                aria-expanded="false"><i class="style-144"></i></div>
                                                        </span>
                                                    </span>
                                                    <div class="style-145">Examples: "10011" or "10011-0043"</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-146">
                                            <div class="style-147">
                                                <div class="style-148"><label for="tags" class="style-149">
                                                        <div class="style-150"><span data-i18n-appname=""
                                                                data-i18n-key="ta.order.com.shippingAddressForm.label_tag"
                                                                class="style-151">Tag</span></div>
                                                    </label></div>
                                                <div class="style-152">
                                                    <div class="style-153">
                                                        <a href="##" class="style-154" tabindex="0" role="checkbox"
                                                            aria-disabled="false" data-meta="Field"
                                                            aria-checked="false"><span
                                                                class="style-155">Business</span></a>
                                                        <a href="##" class="style-156" tabindex="0" role="checkbox"
                                                            aria-disabled="false" data-meta="Field"
                                                            aria-checked="false"><span
                                                                class="style-157">Factory</span></a>
                                                        <a href="##" class="style-158" tabindex="0" role="checkbox"
                                                            aria-disabled="false" data-meta="Field"
                                                            aria-checked="false"><span
                                                                class="style-159">Warehouse</span></a>
                                                        <a href="##" class="style-160" tabindex="0" role="checkbox"
                                                            aria-disabled="false" data-meta="Field"
                                                            aria-checked="false"><span
                                                                class="style-161">Residential</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr" role="gridcell" class="style-162">
                                            <div class="style-163">
                                                <div class="style-164">
                                                    <label data-meta="Field" class="style-165">
                                                        <!-- <span class="style-166"> -->
                                                        <!-- <span class="style-167">
                                                                    <i class="style-168"></i>
                                                                </span> -->
                                                        <!-- <input  type="checkbox" class="style-169" value="" /> -->
                                                        <input type="checkbox" value="" class="style-169" />
                                                        <!-- </span> -->
                                                        <span class="style-170">
                                                            <span data-i18n-appname=""
                                                                data-i18n-key="ta.order.com.shippingAddressCommon.set_default_label"
                                                                class="style-171">Set as default shipping
                                                                address</span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="orderid" value="<?= ($orderid) ?? '' ?>">
                                    <input type="hidden" name="protection" value="<?= ($protection) ?? 0 ?>">
                                    <button type="submit" name="update_address" value="yes" class="style-172"><span
                                            data-i18n-appname=""
                                            data-i18n-key="ta.order.com.shippingAddressCommon.continue_to_payment"
                                            class="style-173">Continue to payment</span></button>
                                </form>
                            </div> <!-- -->
                        </div>
                    </div>
                    <div class="style-174">
                        <h2 class="style-175"><span class="style-176"></span><span data-i18n-appname=""
                                data-i18n-key="ta.order.com.payment.method.title" class="style-177">Payment
                                method</span></h2>
                    </div>
                    <div class="style-178">
                        <h2 class="style-179"><span class="style-180"></span><span data-i18n-appname=""
                                data-i18n-key="ta.order.com.supplier-lite.product-blokc-title" class="style-181">Items
                                and delivery options</span></h2>
                    </div>
                </div>
                <div class="style-182">
                    <div class="style-183">
                        <div class="style-184"><span class="style-185"><img width="28"
                                    src="//s.alicdn.com/@img/imgextra/i4/O1CN01wPgXZG1zxkeCEE2GS_!!6000000006781-2-tps-117-112.png"
                                    alt="" class="style-186" /><span data-i18n-appname="" data-i18n-ns=""
                                    data-i18n-key="checkout.components.main-title" class="style-187">Payment
                                    method</span></span></div>
                        <div class="style-188">
                            <div class="style-189">
                                <div class="style-190">
                                    <div class="style-191"></div>
                                    <div class="style-192">
                                        <div class="style-193">
                                            <div class="style-194"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="style-195" viewBox="0 0 1024 1024" width="1em" height="1em">
                                                    <path fill="currentColor"
                                                        d="M553.152 128l-0.021333 342.848H896v82.304l-342.869333-0.021333V896h-82.282667V553.130667H128v-82.282667h342.848V128h82.304z"
                                                        class="style-196"></path>
                                                </svg><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" class="style-197">
                                                    <g clip-path="url(#clip0_491_170)" class="style-198">
                                                        <path d="M6.70833 9.91667H21.2917V11.5208H6.70833V9.91667Z"
                                                            fill="#222222" class="style-199"></path>
                                                        <path d="M10.2083 17.9375H6.70833V19.5417H10.2083V17.9375Z"
                                                            fill="#222222" class="style-200"></path>
                                                        <path
                                                            d="M4.375 5.25C3.89175 5.25 3.5 5.64175 3.5 6.125V21.875C3.5 22.3582 3.89175 22.75 4.375 22.75H23.625C24.1082 22.75 24.5 22.3582 24.5 21.875V6.125C24.5 5.64175 24.1082 5.25 23.625 5.25H4.375ZM5.10417 6.85417H22.8958V21.1458H5.10417V6.85417Z"
                                                            fill="#222222" class="style-201"></path>
                                                    </g>
                                                    <defs class="style-202">
                                                        <clipPath class="style-203">
                                                            <rect width="28" height="28" fill="white" class="style-204">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg><span data-i18n-appname="" data-i18n-ns=""
                                                    data-i18n-key="checkout.standard.add-card-title"
                                                    class="style-205">Add a new card</span>
                                                <div class="style-206"><img class="style-207"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01JPAU5d1KPxAhLj9r2_!!6000000001157-2-tps-205-112.png"
                                                        alt="" /><img class="style-208"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01fR63ZW1hTNIDZ7Dnr_!!6000000004278-2-tps-148-112.png"
                                                        alt="" /><img class="style-209"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01OJVeqA1jt8o3WJKGp_!!6000000004605-2-tps-113-112.png"
                                                        alt="" /><img class="style-210"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01sTO9hK1ioGypbKbj6_!!6000000004459-2-tps-125-112.png"
                                                        alt="" /><img class="style-211"
                                                        src="https://s.alicdn.com/@img/imgextra/i4/O1CN01Il47qT1NatTmYp9k8_!!6000000001587-2-tps-158-112.png"
                                                        alt="" /><img class="style-212"
                                                        src="https://s.alicdn.com/@img/imgextra/i3/O1CN01WSdCaP1ZOJzwVNIbP_!!6000000003184-2-tps-137-112.png"
                                                        alt="" /><img class="style-213"
                                                        src="https://s.alicdn.com/@img/imgextra/i1/O1CN01mt8gsy1purzsRuyua_!!6000000005421-2-tps-169-112.png"
                                                        alt="" /><img class="style-214"
                                                        src="https://s.alicdn.com/@img/imgextra/i1/O1CN01bRLem91pTOEVq3p9e_!!6000000005361-2-tps-149-112.png"
                                                        alt="" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="style-215">
                                        <div class="style-216"><label class="style-217"><input type="radio"
                                                    class="style-218" />
                                                <div class="style-219">
                                                    <div class="style-220"></div>
                                                </div>
                                            </label><svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="style-221">
                                                <g clip-path="url(#clip0_491_311)" class="style-222">
                                                    <path
                                                        d="M11.8619 10.91C11.8619 11.4367 12.0389 11.8958 12.3938 12.2798C12.618 12.535 13.0478 12.7875 13.6191 13.0419L13.62 13.0423C13.9178 13.1739 14.1984 13.2994 14.4613 13.4524C14.6845 13.5824 14.8464 13.702 14.9543 13.8391C15.0547 13.9667 15.1191 14.1233 15.1191 14.3543C15.1191 14.6576 15.0169 14.8919 14.8196 15.0747C14.6163 15.2617 14.3637 15.3591 14.0448 15.3591C13.7057 15.3591 13.4613 15.2702 13.2801 15.1124C13.1239 14.9599 12.9684 14.6946 12.8309 14.2868L12.7356 14.004L11.2753 14.297L11.3689 14.6462C11.5338 15.2615 11.7822 15.7532 12.133 16.0902C12.523 16.4649 13.0201 16.6393 13.4866 16.7396V17.8151H14.8799L14.8803 16.6865C15.3439 16.528 15.7728 16.2636 16.1007 15.8602C16.4651 15.4144 16.6481 14.8966 16.6481 14.3165C16.6481 13.7217 16.4442 13.2079 16.0353 12.7834C15.8854 12.6212 15.6712 12.4626 15.4079 12.3063L15.4072 12.3059C15.1666 12.1638 14.87 12.0145 14.517 11.8563L14.2281 11.728C13.8535 11.5567 13.6367 11.4221 13.5344 11.3239C13.4198 11.2137 13.3604 11.0766 13.3604 10.9002C13.3604 10.8442 13.3664 10.7914 13.3788 10.7414C13.4086 10.6214 13.4748 10.5177 13.5808 10.4259C13.7285 10.2981 13.9207 10.2266 14.1728 10.2266C14.5205 10.2266 14.8205 10.3917 15.0757 10.786L15.2454 11.0481L16.5489 10.348L16.356 10.0406C16.1511 9.71415 15.9285 9.45152 15.6847 9.26684C15.4337 9.07674 15.152 8.9728 14.88 8.90773V7.85173H13.4866L13.4865 8.92256C13.3 8.98125 13.1127 9.05583 12.9326 9.15602L12.9301 9.15744C12.7064 9.28463 12.5124 9.4356 12.3544 9.61031L12.3524 9.61259C12.1955 9.78953 12.0743 9.98584 11.9891 10.2021L11.988 10.2048C11.903 10.4265 11.8619 10.662 11.8619 10.91Z"
                                                        fill="#222222" class="style-223"></path>
                                                    <path
                                                        d="M3.79166 4.66675C3.30841 4.66675 2.91666 5.0585 2.91666 5.54175V20.1251C2.91666 20.6083 3.30841 21.0001 3.79166 21.0001H24.2083C24.6916 21.0001 25.0833 20.6083 25.0833 20.1251V5.54175C25.0833 5.0585 24.6916 4.66675 24.2083 4.66675H3.79166ZM4.52082 6.27091H23.4792V19.3959H4.52082V6.27091Z"
                                                        fill="#222222" class="style-224"></path>
                                                    <path d="M9.33332 22.6042H18.6667V24.2084H9.33332V22.6042Z"
                                                        fill="#222222" class="style-225"></path>
                                                </g>
                                                <defs class="style-226">
                                                    <clipPath class="style-227">
                                                        <rect width="28" height="28" fill="white" class="style-228">
                                                        </rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <div class="style-229">
                                                <div class="style-230"><span data-i18n-appname="" data-i18n-ns=""
                                                        data-i18n-key="checkout.components.pay-method-info.otherPayment"
                                                        class="style-231">Other payment methods</span>
                                                    <div class="style-232">
                                                        <div class="style-233"><img class="style-234"
                                                                src="https://s.alicdn.com/@img/imgextra/i1/O1CN011hp3iM1jVKD9VhaJj_!!6000000004553-2-tps-165-112.png"
                                                                alt="" /></div>
                                                        <div class="style-235"><img class="style-236"
                                                                src="https://s.alicdn.com/@img/imgextra/i2/O1CN01ea7xAW1ZvkuPNytw6_!!6000000003257-2-tps-171-112.png"
                                                                alt="" /></div>
                                                        <div class="style-237"><img class="style-238"
                                                                src="https://s.alicdn.com/@img/imgextra/i3/O1CN01XvKk2y1Leti9lVVey_!!6000000001325-2-tps-260-112.png"
                                                                alt="" /></div>
                                                        <div class="style-239"><img class="style-240"
                                                                src="https://s.alicdn.com/@img/imgextra/i1/O1CN01ymDpl91x6xlWI0TTe_!!6000000006395-2-tps-324-112.png"
                                                                alt="" /></div>
                                                        <div class="style-241"><img class="style-242"
                                                                src="https://s.alicdn.com/@img/imgextra/i4/O1CN01PP3jwY1sx6mQ1pNPu_!!6000000005832-2-tps-263-112.png"
                                                                alt="" /></div>
                                                        <div class="style-243"><img class="style-244"
                                                                src="https://s.alicdn.com/@img/imgextra/i3/O1CN01f32GzE1HP5clHqh3w_!!6000000000749-2-tps-153-112.png"
                                                                alt="" /></div>
                                                        <div class="style-245"><img class="style-246"
                                                                src="https://s.alicdn.com/@img/imgextra/i1/O1CN01xFzRyl1bvPqfIfNGk_!!6000000003527-2-tps-138-112.png"
                                                                alt="" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style-247">
                    <div class="style-248">
                        <h2 class="style-249"><span class="style-250"></span><span data-i18n-appname=""
                                data-i18n-key="ta.order.com.supplier-lite.product-blokc-title" class="style-251">Items
                                and delivery options</span></h2>
                        <div class="style-252">
                            <h3 class="style-253"><span class="style-254"
                                    title="Sold by: Guangzhou Xingyuan Import &amp; Export Trade Co., Ltd.">Sold by:
                                    Guangzhou Xingyuan Import &amp; Export Trade Co., Ltd.</span></h3>
                        </div>
                    </div>
                    <div class="style-255">
                        <div class="style-256">
                            <div class="style-257">
                                <div class="style-258">
                                    <div class="style-259"><span class="style-260">Delivery by Feb 27</span></div>
                                    <div class="style-261"><span data-i18n-appname=""
                                            data-i18n-key="ta.order.com.logistics_carrier.shipping_fee"
                                            class="style-262">Shipping fee:</span><span class="style-263">USD
                                            22.76</span></div>
                                </div>
                            </div><button type="button" class="style-264"><span data-i18n-appname=""
                                    data-i18n-key="ta.order.com.shippingAddressCommon.btn_change"
                                    class="style-265">Change</span></button>
                        </div>
                    </div>
                    <div class="style-266" bizdata="[object Object]" rules="[object Object]" uidata="[object Object]"
                        invaliddetail="[object Object]" type="biz">
                        <div class="style-267">
                            <div class="style-268"><a class="style-269"
                                    href="https://www.alibaba.com/product-detail/Y-35-41-medium-thick-ladies_1601168593627.html"
                                    target="_blank"><img
                                        src="//s.alicdn.com/@sc04/kf/H6a2dc1129c4c4ec1b5f4e8ed222d9c25o.jpg_140x140.jpg"
                                        class="style-270" /></a>
                                <div class="style-271">
                                    <div class="style-272"><span class="style-273"><img
                                                src="https://gw.alicdn.com/imgextra/i2/O1CN01ipMKGv1yqapwvOFCK_!!6000000006630-2-tps-329-33.png"
                                                class="style-274" /></span></div>
                                    <div class="style-275"
                                        title="Y 35-41 medium thick ladies heel shoes fish mouth sandals soft pu open toe heeled sandals">
                                        <a href="https://www.alibaba.com/product-detail/Y-35-41-medium-thick-ladies_1601168593627.html"
                                            target="_blank" class="style-276">Y 35-41 medium thick ladies heel shoes
                                            fish mouth sandals soft pu open toe heeled sandals</a>
                                    </div>
                                    <div class="style-277"><span data-i18n-appname=""
                                            data-i18n-key="ta.order.com.product-name.moq" class="style-278">Min.
                                            order:</span>&nbsp;
                                        <!-- -->
                                        <!-- -->
                                        <!-- -->
                                    </div>
                                </div>
                            </div>
                            <div class="style-279">
                                <div class="style-280">
                                    <div class="style-281">
                                        <div class="style-282">
                                            <div class="style-283">
                                                <div class="style-284">
                                                    <div class="style-285" aria-haspopup="true" aria-expanded="false">
                                                        <img src="//s.alicdn.com/@sc04/kf/H8903a4c0c4e2449f8d3a658838cb0757D.jpg_140x140.jpg"
                                                            class="style-286" />
                                                    </div>
                                                </div>
                                                <div class="style-287">
                                                    <div class="style-288">
                                                        <div class="style-289" title="Color: Black; ,EUR Size: 35">
                                                            Color: Black;
                                                            <!-- -->
                                                        </div>
                                                    </div>
                                                    <div class="style-290">
                                                        <div class="style-291" rules="[object Object]"
                                                            uidata="[object Object]" invaliddetail="[object Object]"
                                                            type="skuPrice" tag="rtsSkuPrice">
                                                            <div class="style-292">
                                                                <div class="style-293"><span class="style-294">USD
                                                                        7.90</span><span
                                                                        class="style-295">/pair</span><i
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        class="style-296"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="style-297"></div>
                                        </div>
                                        <div class="style-298"><span class="style-299"><span class="style-300"><span
                                                        class="style-301"><button tabindex="-1" type="button"
                                                            class="style-302"><i
                                                                class="style-303"></i></button></span><span
                                                        class="style-304"><input aria-valuemax="99" aria-valuemin="1"
                                                            value="2" height="100%" autocomplete="off"
                                                            class="style-305" /></span><span class="style-306"><button
                                                            tabindex="-1" type="button" class="style-307"><i
                                                                class="style-308"></i></button></span></span></span>
                                        </div>
                                        <div class="style-309">USD 15.80</div>
                                    </div>
                                    <div class="style-310">
                                        <div class="style-311">
                                            <div class="style-312"></div>
                                            <div class="style-313"><span class="style-314">Delivery by Feb 27</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="style-315">
                        <div class="style-316" bizdata="[object Object]" rules="[object Object]"
                            uidata="[object Object]" invaliddetail="[object Object]" type="block"></div>
                    </div>
                    <div class="style-317"><button type="button" class="style-318"><span class="style-319">Add note to
                                supplier</span></button></div>
                </div>
            </div>
            <div dir="ltr" role="gridcell" class="style-320">
                <div class="style-321">
                    <div class="style-322">
                        <?php
                        $subtotal = 0;
                        $total_item = 0;
                        $sql = "SELECT * FROM order_products WHERE class_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $class_id);
                        $stmt->execute();
                        $order_products = $stmt->get_result();
                        if ($order_products->num_rows > 0) {
                            while ($rows = $order_products->fetch_assoc()) {
                                $subtotal = $subtotal + ($rows['price'] * $rows['quantity']);
                                $total_item = $total_item + $rows['quantity'];
                            }
                        }
                        ?>
                        <h2 class="style-323"><span data-i18n-appname=""
                                data-i18n-key="ta.order.com.summary_amounts.order_summary_amount"
                                class="style-324">Order summary (<?= ($total_item ?? 0) ?> items)</span></h2>
                        <div class="style-325"><span data-i18n-appname=""
                                data-i18n-key="ta.order.com.summary_amounts.products_amount.label"
                                class="style-326">Item subtotal</span><span class="style-327"><span
                                    class="style-328">USD <?= ($subtotal) ?? "0.00" ?></span></span></div>
                        <div class="style-329"><span class="style-330"><span data-i18n-appname=""
                                    data-i18n-key="ta.order.com.summary_amounts.shipping_fee.label.estimate"
                                    class="style-331">Estimated shipping fee</span></span><span class="style-332"><span
                                    class="style-333">USD <?= ($delivery_fee) ?? "" ?></span></span></div>
                        <div class="style-334">
                            <div class="style-335">
                                <div class="style-336">
                                    <div class="style-337"><span class="style-338">
                                            <div class="style-339">
                                                <div class="style-340"><span class="style-341"><span
                                                            data-i18n-appname="" data-i18n-ns=""
                                                            data-i18n-key="checkout.components.order-view.subTotal"
                                                            class="style-342">Subtotal</span></span></div>
                                            </div>
                                        </span><span class="style-343"><span class="style-344"> USD
                                                <?= ($subtotal + $delivery_fee) ?? "" ?></span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="style-345">
                        <div class="style-346"><button type="button" class="style-347"><span
                                    class="style-348"></span><span data-i18n-appname=""
                                    data-i18n-key="ta.order.com.action_bar.action.processed_to_pay"
                                    class="style-349">Proceed to pay</span></button></div>
                    </div>
                    <div class="style-350">
                        <div class="style-351">
                            <div class="style-352">
                                <div class="style-353">
                                    <div class="style-354">Protections for
                                        <!-- --><img class="style-355"
                                            src="https://gw.alicdn.com/imgextra/i1/O1CN01OoFdui1bfqNZl196g_!!6000000003493-2-tps-329-33.png" />
                                    </div>
                                </div>
                                <div class="style-356">
                                    <div class="style-357">
                                        <div class="style-358">
                                            <div class="style-359"><img class="style-360"
                                                    src="//s.alicdn.com/@img/imgextra/i1/O1CN01R4NBk31oHC88zZZSs_!!6000000005199-55-tps-20-20.svg" />
                                            </div>
                                            <div class="style-361">
                                                <div class="style-362">On-time Dispatch Guarantee
                                                    <!-- -->
                                                </div>
                                                <div class="style-363">Dispatched within 5 days of payment or receive a
                                                    10% delay compensation
                                                    <!-- --><span class="style-364"><span data-i18n-appname=""
                                                            data-i18n-key="ta.order.com.service.banner.link"
                                                            class="style-365"><a href="#" id="openModal1"
                                                                style="color:#222222;"> View details </a></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="style-366">
                                        <div class="style-367">
                                            <div class="style-368"><img class="style-369"
                                                    src="//s.alicdn.com/@img/imgextra/i1/O1CN01Wn5qCf1n5SMfXCoRO_!!6000000005038-55-tps-20-20.svg" />
                                            </div>
                                            <div class="style-370">
                                                <div class="style-371">Secure payments
                                                    <!-- -->
                                                </div>
                                                <div class="style-372">Every payment you make on Alibaba.com is secured
                                                    with strict SSL encryption and PCI DSS data protection protocols
                                                    <!-- --><span class="style-373"><span data-i18n-appname=""
                                                            data-i18n-key="ta.order.com.service.banner.link"
                                                            class="style-374"><a href="#" id="openModal2"
                                                                style="color:#222222;">View details</a></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="style-375">
                                        <div class="style-376">
                                            <div class="style-377"><img class="style-378"
                                                    src="//s.alicdn.com/@img/imgextra/i2/O1CN013k8qQZ1CavncHdcrN_!!6000000000098-55-tps-20-20.svg" />
                                            </div>
                                            <div class="style-379">
                                                <div class="style-380">Standard refund policy
                                                    <!-- -->
                                                </div>
                                                <div class="style-381">Claim a refund if your order doesn't ship, is
                                                    missing, or arrives with product issues
                                                    <!-- --><span class="style-382"><span data-i18n-appname=""
                                                            data-i18n-key="ta.order.com.service.banner.link"
                                                            class="style-383">View details</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="style-384"><span data-i18n-appname=""
                                        data-i18n-key="ta.order.com.trade_assurance.intro" class="style-385">Alibaba.com
                                        protects all your orders placed and paid on the platform with</span>&nbsp;<img
                                        src="https://img.alicdn.com/imgextra/i4/O1CN01GVlg9z1uXZvR9GWDt_!!6000000006047-55-tps-185-28.svg"
                                        alt="" class="style-386" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
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
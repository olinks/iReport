<?php include_once("includes/components/head.php") ?>
<?php session_start(); ?>
<?php include_once("includes/php/connect/db.php") ?>

<body class="crm_body_bg">
    <?php include_once("includes/components/sidebar.php") ?>

    <section class="main_content dashboard_part large_header_bg">
        <?php include_once("includes/components/header.php") ?>

        <?php // include_once("includes/components/dashboard.php") 
        ?>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            include('includes/pages/' . $page . '.php');
        } else {
            include('includes/components/dashboard.php');
        }
        ?>
        <?php include_once("includes/components/footer.php") ?>
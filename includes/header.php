<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html><!-- HTML5 Declaration -->
<html>
<head>
<title>LilY.</title>
<link rel="stylesheet" href="styles/styles.css" media="all"/>
</head>
<body>
<!-- Main container starts here -->
    <div class="main_wrapper">
        <div class="header_wrapper">
            <div class="header_logo">
                <a href="index.php"><!--Back to Homepage -->
                <img id="logo" src="images/logo_LilY.png"/>
                </a>
            </div><!-- /.header_logo -->
            <div id="form">
                <form action="results.php" method="get" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Search a Product">
                <input type="submit" name="search" value="Search">
                </form>
            </div>
            <div class="cart">
                <ul>
                    <li class="dropdown_header_cart">
                        <div id="notification_total_cart" class="shopping-cart">
                            <img src="images/cart_icon.png" id="cart_image">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="register_login">
                <div class="login"><a href="index.php?action=login">Login</a></div>
                <div class="register"><a href="customer_register.php">Register</a></div>

            </div>
        </div><!-- /.header_wrapper -->
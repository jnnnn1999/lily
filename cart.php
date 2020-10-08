<!-------------Header starts----------------------->
<?php include('includes/header.php');?>
<!-------------Header ends------------------------->

<!-------------Navigation Bar starts--------------->
            <div class="menubar">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="all_products.php">All Product</a></li>
                    <li><a href="customer/my_account.php">My account</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div><!-- /.menubar -->
<!-------------Navigation Bar ends------------------>

<!-------------Content_wrapper starts--------------->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Categories</div>
                    <ul id="cats">
                        <!--<li><a href="index.php">Laptop</a></li>
                        <li><a href="index.php">Cameras</a></li>
                        <li><a href="index.php">Mobiles</a></li> -->

                        <?php
                        /*$get_cats ="select * from categories";

                        $run_cats = mysqli_query($con, $get_cats);

                        while($row_cats=mysqli_fetch_array($run_cats)){
                            $cat_id =$row_cats['cat_id'];

                            $cat_title =$row_cats['cat_title'];

                            echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
                        }*/
                        getCats();
                        ?>
                    </ul>
                    <div id="sidebar_title">Brands</div>
                    <ul id="cats">
                        <!--<li><a href="index.php">HP</a></li>
                        <li><a href="index.php">DELL</a></li>
                        <li><a href="index.php">LG</a></li> -->
                        <?php
                        /*$get_brands ="select * from brands";

                        $run_brands = mysqli_query($con, $get_brands);

                        while($row_brands=mysqli_fetch_array($run_brands)){
                            $brand_id =$row_brands['brand_id'];

                            $brand_title =$row_brands['brand_title'];

                            echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
                        }*/
                        getBrands();
                        ?>
                    </ul>
                </div><!--/#sidebar -->
                <div id="content_area">
                    <div id="shopping_cart" align="right" style="padding: 15px;">
                    <?php
                        if(isset($_SESSION['customer_email'])){

                            echo "<b> Your Email:</b>" . $_SESSION['customer_email'];
                        }else{

                            echo "";
                        }
                        
                    ?>

                    <b style="color:navy">Your Cart - </b> Total Items: <?php total_items(); ?> Total Ptice: <?php total_price(); ?>
                    </div>
                    <div id="products_box">

                    </div><!--products_box-->
                </div>
            </div><!-- /.content_wrapper -->
<?php include('includes/footer.php');?>
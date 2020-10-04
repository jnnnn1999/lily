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
                    <div id="products_box">
                        <?php
                        if(isset($_GET['search'])){
                            
                            $searh_query = $_GET['user_query'];

                            $run_query_by_pro_id = mysqli_query($con, "select * from products where product_keywords like'%$searh_query%'");

                            while($row_pro = mysqli_fetch_array($run_query_by_pro_id)){
                                $pro_id = $row_pro['product_id'];
                                $pro_cat = $row_pro['product_cat'];
                                $pro_brand = $row_pro['product_brand'];
                                $pro_title = $row_pro['product_title'];
                                $pro_price = $row_pro['product_price'];
                                $pro_image = $row_pro['product_image'];
                                
                                echo" 
                                <div id='single_product'>
                                    <h3>$pro_title</h3>
                                    <img src='admin_area/product_images/$pro_image' width='180' height='180'/>

                                    <p><b> Price: $pro_price</b></p>

                                    <a href='details.php?pro_id=$pro_id'>Detail</a>

                                    <a href='index.php?add_cart=$pro_id'>
                                        <button style='float:right'>Add to cart</button>
                                    </a>

                                </div>";
                            }
                        }
                        ?>

                        <?php
                        get_pro_by_cat_id();
                        ?>

                        <?php
                        get_pro_by_brand_id();
                        ?>
                    </div><!--products_box-->
                </div>
            </div><!-- /.content_wrapper -->
<?php include('includes/footer.php');?>
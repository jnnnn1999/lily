<?php
$con = mysqli_connect("localhost","root","","ecommerce_LilY");

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}else{ 
    echo "MySQL has successfully connected";
}
?>

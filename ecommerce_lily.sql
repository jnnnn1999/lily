
CREATE TABLE `categories` (
    `cat_id` int(100) NOT null AUTO_INCREMENT,
    `cat_title` varchar(100) NOT NULL,
    PRIMARY KEY (`cat_id`)
);

INSERT INTO `categories` (`cat_id`,`cat_title`) VALUES
(1,'Laptops'),
(2,'Cameras'),
(3,'Mobiles'),
(4,'Computers'),
(5,'iPhones');

CREATE TABLE `brands` (
    `brand_id` int(100) NOT null AUTO_INCREMENT,
    `brand_title` varchar(255) NOT NULL,
    PRIMARY KEY (`brand_id`)
);

INSERT INTO `brands` (`brand_id`,`brand_title`) VALUES
(1,'HP'),
(2,'DELL'),
(3,'LG'),
(4,'Samsung'),
(5,'Sony'),
(6,'Toshiba'),
(7,'Lenovo'),
(8,'Apple');

CREATE TABLE `products` (
    `product_id` int(100) NOT null AUTO_INCREMENT,
    `product_cat` int(100) NOT NULL,
    `product_brand` int(100) NOT NULL,
    `product_title` varchar(255) NOT NULL,
    `product_price` int(100) NOT NULL,
    `product_desc` TEXT NOT NULL,
    `product_image` TEXT NOT NULL,
    `product_keywords` varchar(255) NOT NULL,
    PRIMARY KEY (`product_id`)
);

INSERT INTO `products` (`product_id`,`product_cat`,`product_brand`,`product_title`,`product_price`,`product_desc` ,`product_image`,`product_keywords`) VALUES
(1,2,4,'Samsung Camera',100,'This is a great product','1.jpg','Samsung Camera'),
(2,4,8,'Desktop Apple',200,'This is a great product. Finding the right laptop have never been easier','2.jpg','desktop apple'),
(3,4,2,'Desktop DELL',300,'This is a great product. Finding the right laptop have never been easier','3.jpg','desktop dell'),
(4,1,8,'Laptop Apple',100,'This is a great product. Finding the right laptop have never been easier','4.jpg','apple laptop'),
(5,1,8,'Apple Tablet',100,'This is a great product. Finding the right laptop have never been easier','5.jpg','apple laptop'),
(6,2,4,'Camera Canon',100,'This is a great product. Finding the right laptop have never been easier','6.jpg','camera'),
(7,4,7,'Desktop Lenovo',100,'This is a great product. Finding the right laptop have never been easier','7.jpg','desktop lenovo'),
(8,4,1,'Desktop Pro HP',100,'This is a great product. Finding the right laptop have never been easier','8.jpg','desktop hp');

CREATE TABLE `cart` (
    `cart_id` int(11) NOT null AUTO_INCREMENT,
    `product_id` int(11) NOT NULL,
    `product_title` varchar(255) NOT NULL,
    `ip_address` varchar(255) NOT NULL,
    `quality` int(11) NOT NULL DEFAULT 1,
    PRIMARY KEY (`cart_id`)
);

/*CREATE DATABASE IF NOT EXISTS ecommerce_lily;

CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT null AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    trn_date datetime NOT NULL,
    PRIMARY KEY (id)
);*/

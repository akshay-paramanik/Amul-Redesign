<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = mysqli_connect($host,$user,$pass);
if(!$conn){
    echo "Database not connected";
    die();
}
$database = "CREATE DATABASE IF NOT EXISTS amul";
$databaseRes = mysqli_query($conn,$database);
if(!$databaseRes){
    echo "Database not exist";
    die();
}
$conn = mysqli_connect($host,$user,$pass,"amul");
if(!$conn){
    echo "Database not connected and created";
    die();
}

$userTable = "CREATE TABLE IF NOT EXISTS `amul`.`user`(
    `id` INT AUTO_INCREMENT primary key,`fname` varchar(30),`lname` varchar(30),`email` varchar(60),`password` varchar(400),`mobile` BIGINT,`pincode` INT,`state` varchar(30),`district` varchar(30),`address` varchar(70),`city` varchar(30)
);";

if($conn->query($userTable)== FALSE){
    echo "database table error: 1".$conn->error;
}

$itemCatagory = "CREATE TABLE IF NOT EXISTS `amul`.`item_catagory`(
   `id` INT AUTO_INCREMENT primary key,`catagory_name` varchar(50)

);";
if($conn->query($itemCatagory)== FALSE){
    echo "database table error: 2".$conn->error;
}
$item = "CREATE TABLE IF NOT EXISTS `amul`.`item`(
    `id` INT AUTO_INCREMENT primary key,`name` varchar(50),`imgone` varchar(100),`imgtwo` varchar(100),`imgthree` varchar(100),`price` INT,`catagory_id` INT,FOREIGN KEY(`catagory_id`) references item_catagory(`id`)
);";
if($conn->query($item)== FALSE){
    echo "database table error: 3".$conn->error;
}
$itemDetails = "CREATE TABLE IF NOT EXISTS `amul`.`item_details`(
 `id` INT AUTO_INCREMENT primary key,`ingredient` varchar(100),`energy` FLOAT,`fat` FLOAT,`carbohydrate` FLOAT,`protein` FLOAT,`sodium` FLOAT,`item_id` INT,FOREIGN KEY(`item_id`) references item(`id`)

);";
if($conn->query($itemDetails)== FALSE){
    echo "database table error: 4".$conn->error;
}
$cart = "CREATE TABLE IF NOT EXISTS `amul`.`cart`(
    `id` INT AUTO_INCREMENT primary key,`item_id` INT,`user_id` INT,FOREIGN KEY(`item_id`) references item(`id`),FOREIGN KEY(`user_id`) references user(`id`)
);";
if($conn->query($cart)== FALSE){
    echo "database table error: 5".$conn->error;
}
$catagoryItem = "insert into `item_catagory`(`catagory_name`)values('Protein'),('Organic'),('Chocolate'),('Infant Food'),('Sweets'),('Panchamrit'),('Sports Drink'),('Milk-UHT'),('Camel Milk'),('Honey'),('Mithai Mate'),('Beverages')";
$catagoryRes = mysqli_query($conn,$catagoryItem);
if(!$catagoryRes){
    die("Catagory item not inserted 505");
}

?>
<?php
require_once "connect.php";
if(isset($_POST['signup'])){
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $pin = mysqli_real_escape_string($conn,$_POST['pin']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $district = mysqli_real_escape_string($conn,$_POST['district']);
    $encpsw = password_hash($password,PASSWORD_BCRYPT);
    $sql = "insert into `user`(`fname`,`lname`,`email`,`password`,`mobile`,`pincode`,`state`,`district`,`address`,`city`)values
                                ('$fname','$lname','$email','$encpsw','$phone','$pin','$state','$district','$address','$city')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header('location:../../amul login/login.php');
    }else{
        echo "Not inserted";
    }
}else if(isset($_REQUEST['pid'])){
    $pid=$_REQUEST['pid'];
    $uid = $_REQUEST['uid'];
    $sql = "insert into `cart`(`item_id`,`user_id`)values('$pid','$uid')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../cart/cart.php");
    }else{
        echo "not add to cart";
    }
}
?>
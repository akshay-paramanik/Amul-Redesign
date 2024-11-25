<?php
session_start();
require_once "connect.php";
if(isset($_REQUEST['login'])){
    $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
    $password = mysqli_real_escape_string($conn,$_REQUEST['password']);
    $sql = "select * from `user` where email = '$email'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($count>0){
        $data = mysqli_fetch_assoc($res);
        if(password_verify($password,$data['password'])){
            $_SESSION['userid'] = $data['id'];
            header("location:../../index.php");
        }else{
            echo "unauthorize access";
        }
    }else{
        echo "user not found";
    }
}

?>
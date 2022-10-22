<?php
require "config.php";
if(isset($_POST['btn-reg'])){
   
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
     $password=$_POST['password'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $view=$_POST['viewer'];
  $sql="insert into `tbl_users` (`fullname`,`username`,`password`,`email`,`address`,`gender`,`view`) 
  values ('$fullname','$username','$password','$email','$address','$gender','$view')";
if($conn->query($sql)===true){
  header("Location: login.php");
  exit();
}
}

?>
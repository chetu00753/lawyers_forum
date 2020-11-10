<?php
  include "config.php";
  session_start();
  $tmp=$_SESSION['user'];
  $res=mysqli_query($conn,"select * from users where username='$tmp'");
  $data=mysqli_fetch_assoc($res);
  $logged_user_name=$data['name'];
  $logged_user_email=$data['email'];
  $logged_user_phone=$data['phone'];
  $logged_user_profilePic=$data['profile_pic'];

  if(!isset($_SESSION['user']))
  {
    header("location:index.html");
  }
  mysqli_close($conn);
 ?>

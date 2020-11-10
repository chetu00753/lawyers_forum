<?php
  include "../config.php";
  session_start();
  $tmp=$_SESSION['admin'];
  $res=mysqli_query($conn,"select * from admin where username='$tmp'");
  $data=mysqli_fetch_assoc($res);
  $logged_user_admin=$data['username'];
  if(!isset($_SESSION['admin']))
  {
    header("location:index.html");
  }
  mysqli_close($conn);
 ?>

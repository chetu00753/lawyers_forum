<?php
  include "config.php";
  session_start();
  $tmp=$_SESSION['lawyer'];
  $res=mysqli_query($conn,"select * from lawyers where username='$tmp'");
  $data=mysqli_fetch_assoc($res);
  $logged_lawyer_name=$data['name'];
  $logged_lawyer_email=$data['email'];
  $logged_lawyer_phone=$data['phone'];
  if(!isset($_SESSION['lawyer']))
  {
    header("location:index.html");
  }
  mysqli_close($conn);
 ?>

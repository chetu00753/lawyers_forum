<?php
  include "sessions/user_session.php";
  $new_name=$_POST['name'];
  $new_email=$_POST['email'];
  $new_phn=$_POST['phn'];
  $new_addr=$_POST['addr'];
  $uid=$_POST['id'];
  include "config.php";
  $query1=mysqli_query($conn,"UPDATE `users` SET `name` = '$new_name', `email` = '$new_email', `phone` = '$new_phn',`address`='$new_addr' WHERE `id` = '$uid'");
  if(!$query1)
  {
    echo "<script>window.alert('Unable to Update profile');window.location='edit_profile_user.php';</script>";
  }
  else{
    echo "<script>window.alert('Profile Updated');window.location='edit_profile_user.php';</script>";
  }
  mysqli_close($conn);
 ?>

<?php
  include "sessions/lawyer_session.php";
  $new_name=$_POST['name'];
  $new_email=$_POST['email'];
  $new_phn=$_POST['phn'];
  $addr=$_POST['address'];
  $uid=$_POST['id'];
  include "config.php";
  $query1=mysqli_query($conn,"UPDATE `lawyers` SET `name` = '$new_name', `email` = '$new_email', `phone` = '$new_phn',`address`='$addr' WHERE `id` = '$uid'");
  if(!$query1)
  {
   echo "<script>window.alert('Unable to Update profile');window.location='edit_profile_lawyer.php';</script>";
  }
  else{
    echo "<script>window.alert('Profile Updated');window.location='edit_profile_lawyer.php';</script>";
  }
  mysqli_close($conn);
 ?>

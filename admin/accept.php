<?php
  include "../config.php";
  $uunm1=$_GET['ref'];
  $res=mysqli_query($conn,"update lawyers_login set status='accepted' where username='$uunm1'");
  if($res)
  {
    echo "<script>window.alert('Profile Accepted');window.location='admin_panel.php';</script>";
  }
  else{
    echo "<script>window.alert('Unable to accept profile,Something is wrong..!!');</script>";
  }
 ?>

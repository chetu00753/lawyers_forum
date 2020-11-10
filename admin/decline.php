<?php
  include "../config.php";
  $uunm1=$_GET['ref'];
  $res=mysqli_query($conn,"delete from lawyers where username='$uunm1'");
  mysqli_query($conn,"delete from lawyers_login where username='$uunm1'");
  if($res)
  {
    echo "<script>window.alert('Profile Deleted...');window.location='admin_panel.php';</script>";
  }
  else{
    echo "<script>window.alert('Unable to decline profile,Something is wrong..!!');</script>";
  }
 ?>

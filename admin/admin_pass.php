<?php
  include "../config.php";
  $uname=$_POST["username"];
  $psswd=$_POST["password"];
    $query="select username,password from admin where username='$uname' and password='$psswd'";
    $res=mysqli_query($conn,$query);
    if(!$res)
    {
      die(mysqli_error($conn));
    }
    else{
      if(mysqli_num_rows($res)==1)
      {
        session_start();
        $_SESSION['admin']=$uname;
        header('location:admin_panel.php');
      }
      else{
        echo "<script>window.alert('Invalid Credentials');window.location='index.html';</script>";
      }
    }
    mysqli_close($conn);
?>

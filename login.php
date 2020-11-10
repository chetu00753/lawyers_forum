<?php
  include "config.php";
  $uname=$_POST["username"];
  $psswd=$_POST["passwd"];
  $role=$_POST["role"];
  if($role=="user")
  {
    $query="select username,password from users_login where username='$uname' and password='$psswd'";
    $res=mysqli_query($conn,$query);
    if(!$res)
    {
      die(mysqli_error($conn));
    }
    else{
      if(mysqli_num_rows($res)==1)
      {
        session_start();
        $_SESSION['user']=$uname;
        header('location:home_user.php');
      }
      else{
        echo "<script>window.alert('Invalid Credentials');window.location='index.html';</script>";
      }
    }
  }
  /////////
  if($role=="lawyer")
  {
    $query1="select username,password from lawyers_login where username='$uname' and password='$psswd'";
    $validate=mysqli_query($conn,"select status from lawyers_login where username='$uname'");
    $stat=mysqli_fetch_array($validate,MYSQLI_ASSOC);
    if($stat['status']=="pending")
    {
      echo "Your profile is not verified yet,please try to login later";
    }
    else{
      $res1=mysqli_query($conn,$query1);
      if(!$res1)
      {
        die(mysqli_error($conn));
      }
      else{
        if(mysqli_num_rows($res1)==1)
        {
          session_start();
          $_SESSION['lawyer']=$uname;
          header('location:home_lawyer.php');
        }
        else{
          echo "<script>window.alert('Invalid Credentials');window.location='index.html';</script>";
        }
      }
    }
  }
  mysqli_close($conn);
 ?>

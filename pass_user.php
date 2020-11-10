<?php
  include "config.php";
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phn=$_POST['phn'];
  $username=$_POST['username'];
  $password=$_POST['passwd'];
  $query1="insert into users(name,email,phone,username,password)values('$name','$email','$phn','$username','$password')";
  $query2="insert into users_login(username,password)values('$username','$password')";
  $result1=mysqli_query($conn,$query1);
  mysqli_query($conn,$query2);
  if(!$result1)
  {
    die(mysqli_error($conn));
  }
  else{
      echo "<script>window.alert('Registration Successfull...');window.location='index.html';</script>";
  }
  mysqli_close($conn);
 ?>

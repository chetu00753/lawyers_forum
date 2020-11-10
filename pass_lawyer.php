<?php
  include "config.php";
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phn=$_POST['phn'];
  $practice=$_POST['prct'];
  $username=$_POST['username'];
  $password=$_POST['passwd'];
  $query1="insert into lawyers(name,username,email,phone,practice_type,password)values('$name','$username','$email','$phn','$practice','$password')";
  $query2="insert into lawyers_login(username,password)values('$username','$password')";
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

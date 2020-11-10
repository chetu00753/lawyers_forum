<?php
  $db_hostname="localhost";
  $db_username="root";
  $db_password="";
  $db_name="lawyers_forum";

  $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

  if(!$conn)
  {
   die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
  }
?>

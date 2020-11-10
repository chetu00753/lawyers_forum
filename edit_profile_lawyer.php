<!doctype html>
<html>
  <meta charset="utf-8" lang="en"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
   <title>Lawyer's Home Page</title>
   <link rel="stylesheet" href="styles/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="support.css"/>
   <style>
   </style>
 </head>
 <body>
  <?php
  include "header.php";
  ?>
  <?php
    include "config.php";
    include "sessions/lawyer_session.php";
   ?>
  <h1 align="center">Profile</h1>
  <?php
    include "config.php";
    $query=mysqli_query($conn,"select * from lawyers where username='$tmp'");
    $data=mysqli_fetch_assoc($query);
    $id=$data['id'];
    $name=$data['name'];
    $email=$data['email'];
    $phn=$data['phone'];
    $addr=$data['address'];
   ?>
   <form method="post" action="profile_update_lawyer.php">
     <label>Name :</label>
     <input type="text" name="name" value="<?php echo "$name"; ?>"/></br>
     <label>Email :</label>
     <input type="email" name="email" value="<?php echo "$email"; ?>"/></br>
     <label>Phone No. :</label>
     <input type="text" name="phn" value="<?php echo "$phn"; ?>"/></br>
     <label>Address :</label>
     <input type="textarea" name="address" value="<?php echo "$addr"; ?>"/></br>
     <input type="text" name="id" hidden value="<?php echo $id; mysqli_close($conn);?>"/>
     <input type="submit" value="Update Profle"/>
   </form>
   <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

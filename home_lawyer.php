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
  <h1 align="center">Welcome Service Provider : <?php echo $logged_lawyer_name; ?></h1>
  <ul>
    <li><a href="edit_profile_lawyer.php">Edit Profile</a></li>
  </ul>
  <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

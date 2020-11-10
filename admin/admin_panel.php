<!doctype html>
<html>
  <meta charset="utf-8" lang="en"/>
 <head>
   <title>Admin control panel</title>
   <link rel="stylesheet" href="../styles/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="../support.css"/>
   <style>
      table,td,th{
        border:1px solid lightgrey;
        padding:3px;
      }
      table tr{
        text-align:center;
      }
   </style>
 </head>
 <body>
   <?php
      include "header.php";
    ?>
   <?php
      include "../config.php";
      include "../sessions/admin_session.php";
    ?>
  <h1 align="center">Admin Control Panel</h1>
  <hr>
    <?php
    include "../config.php";
    $count1=mysqli_fetch_array(mysqli_query($conn,"select count('id') from users"),MYSQLI_NUM);
    $c_users=$count1[0];
    $count2=mysqli_fetch_array(mysqli_query($conn,"select count('id') from lawyers"),MYSQLI_NUM);
    $c_lawyers=$count2[0];
    $count3=mysqli_fetch_array(mysqli_query($conn,"select count('id') from lawyers_login where status='accepted'"),MYSQLI_NUM);
    $v_profiles=$count3[0];
    $p_profiles=$c_lawyers-$v_profiles;
    mysqli_close($conn);
     ?>
    <ul>
      <li>Registered Users Count = <?php echo $c_users; ?> </li>
      <li>Registered Lawyers Count = <?php echo $c_lawyers; ?></li>
       <ul>
         <li>Verified Lawyers : <?php echo $v_profiles; ?></li>
         <li>Pending Requests : <?php echo $p_profiles; ?></li>
       </ul>
    </ul>
    <hr>
  <ul>
    <li><a href="reg_users.php"/>View Registered Users</a></li>
    <li><a href="verified_lawyers.php"/>View Registered/Verified Lawyers</a></li>
    <li><a href="lawyers_pending_req.php"/>View Pending Requests</a></li>
  </ul>
    <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

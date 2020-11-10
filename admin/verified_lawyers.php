<!doctype html>
<html>
  <meta charset="utf-8" lang="en"/>
 <head>
   <title>Registered Lawyers</title>
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
  <ul>
    <li><a href="reg_users.php"/>View Registered Users</a></li>
    <li><a href="verified_lawyers.php"/>View Registered/Verified Lawyers</a></li>
    <li><a href="lawyers_pending_req.php"/>View Pending Requests</a></li>
  </ul>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_No</th>
        <th>Practice Type</th>
        <th>Username</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "../config.php";
        $data1=mysqli_query($conn,"select * from lawyers_login where status='accepted'");
        while($fetched_data1=mysqli_fetch_assoc($data1)){
          $uunm1=$fetched_data1['username'];
          $data=mysqli_query($conn,"select * from lawyers where username='$uunm1'");
          while($fetched_data=mysqli_fetch_assoc($data)){
            $uid=$fetched_data['id'];
            $unm=$fetched_data['name'];
            $uunm=$fetched_data['username'];
            $umail=$fetched_data['email'];
            $uphn=$fetched_data['phone'];
            $upt=$fetched_data['practice_type'];
            $uaddr=$fetched_data['address'];
        }
       ?>
      <tr>
        <td><?php echo $uid; ?></td>
        <td><?php echo $unm; ?></td>
        <td><?php echo $umail; ?></td>
        <td><?php echo $uphn; ?></td>
        <td><?php echo $upt; ?></td>
        <td><?php echo $uunm; ?></td>
        <td><?php echo $uaddr; ?></td>
      </tr>
    <?php  } ?>
    </tbody>
  </table>
  <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

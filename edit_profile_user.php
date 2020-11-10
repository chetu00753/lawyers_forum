<!doctype html>
<html>
  <meta charset="utf-8" lang="en"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
   <title>Edit Profile</title>
   <link rel="stylesheet" href="styles/css/bootstrap.min.css"/>

   <style>
    html,body{
      height: 100%;
      background-color: #158;
      color:white;
      font-family: sans-serif;
    }
    #cover{
      text-align: center;
      display:flex;
      align-items: center;
    }
    #cover-caption{
      width: 100%;
    }
   </style>
 </head>
 <body>
  <?php
  include "header.php";
  ?>
  <?php
    include "config.php";
    include "sessions/user_session.php";
   ?>
  <h1 align="center">Profile</h1>
  <?php
    include "config.php";
    $query=mysqli_query($conn,"select * from users where username='$tmp'");
    $data=mysqli_fetch_assoc($query);
    $id=$data['id'];
    $name=$data['name'];
    $email=$data['email'];
    $phn=$data['phone'];
    $addr_usr=$data['address'];
   ?>
   <section id="cover">
     <div id="cover-caption">
       <div class="container">
         <div class="col-sm-12 col-sm-offset-1">
           <form method="post" action="profile_update_user.php">
               <img src="uploads/<?php echo $logged_user_profilePic;?>" width='100px' height='100px' style="border-radius:20px;"/>
            </br>

             <label>Name :</label>
             <input type="text" name="name" value="<?php echo "$name"; ?>"/></br>
             <label>Email :</label>
             <input type="email" name="email" value="<?php echo "$email"; ?>"/></br>
             <label>Phone No. :</label>
             <input type="text" name="phn" value="<?php echo "$phn"; ?>"/></br>
             <label>Address :</label>
             <input type="text" name="addr" value="<?php echo "$addr_usr"; ?>"/></br>
             <input type="text" name="id" hidden value="<?php echo $id; ?>"/>
             <input type="submit" value="Update Profle"/><br/><br/>
           </form>
           <form action="uploader_u.php" method="post" enctype="multipart/form-data">
           <h4>Update Profile Picture</h4>
           Select a image to upload:- <br/>
           <input type="file" name="fileToUpload" id="fileToUpload" />
           <br />
           <input type="submit" value="Upload File" name="submit"/>
           </form>
         </div>
       </div>
     </div>
   </section>
   <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

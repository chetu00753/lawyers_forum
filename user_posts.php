<!doctype html>
<html>
  <meta charset="utf-8" lang="en"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
   <title>User's Home Page</title>
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
    include "sessions/user_session.php";
   ?>
  <h1 align="center">Welcome Service Seeker : <?php echo $logged_user_name; ?></h1>
  <h3>Post Your questions or problems</h3>
  <form class="po" action="submit_post.php" method="post">
    <select name="category"  required>
      <option value="">--Select a Category--</option>
      <option value="civil">Civil</option>
      <option value="criminal">Criminal</option>
    </select></br>
    <label>Write Your Post</label>
    <input type="text" name="post_by_user" placeholder="write here"/>
  </form>
  <script type="text/javascript" src="styles/jquery/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="styles/js/bootstrap.min.js"></script>
 </body>
</html>

<?php
  include "config.php";
  include "sessions/user_session.php";

  if (isset($_POST['submit'])) {
    $file=$_FILES['fileToUpload'];
    $fileName=$_FILES['fileToUpload']['name'];
    $fileTmpName=$_FILES['fileToUpload']['tmp_name'];
    $fileSize=$_FILES['fileToUpload']['size'];
    $fileError=$_FILES['fileToUpload']['error'];
    $fileType=$_FILES['fileToUpload']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualName=$fileExt[0];
    $fileActualExt=strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','psd');

    if (in_array($fileActualExt,$allowed)) {
      if ($fileError===0) {
        if ($fileSize<3000000) {
          ////////giving unique name
          $fileNamenew=uniqid($fileActualName,true).".".$fileActualExt;
          /////
          $path="uploads/".$fileNamenew;
          move_uploaded_file($fileTmpName,$path);
          include "config.php";
          $upload_query=mysqli_query($conn,"update users set profile_pic='$fileNamenew' where username='$tmp'");
          if(!$upload_query)
          {
            die(mysqli_connect_error());
          }
          else{
          header("location:edit_profile_user.php?uploadsuccess");
          mysqli_close($conn);
        }
        }
        else {
          echo "<script>window.alert('File is too large to upload...limit 2MB');window.location='edit_profile_user.php?uploadfailed'</script>";
        }
      }
      else {
        echo "<script>window.alert('There was an error,Can't upload your image');window.location='edit_profile_user.php?uploadfailed'</script>";
      }
    }
    else {
      echo "<script>window.alert('You can only upload jpg,jpeg,png,psd files');window.location='edit_profile_user.php?uploadfailed'</script>";
    }
  }
 ?>

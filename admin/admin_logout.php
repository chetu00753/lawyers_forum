<?php
  session_start();
  if(session_destroy())
  {
    echo "<script>window.alert('Signing Out...');window.location='index.html';</script>";
  }
 ?>

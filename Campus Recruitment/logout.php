<?php
  session_start();
  session_unset();
  session_destroy();
  echo "<script>alert('You have been logged out');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/index.html"';
  echo "</script>";
 ?>

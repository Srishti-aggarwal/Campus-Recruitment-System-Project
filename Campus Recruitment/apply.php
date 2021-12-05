<?php
session_start();
$con=mysqli_connect('localhost','root','','campus_recruitment');
$sid=$_POST['s_Id'];
$j_id=$_POST['Id'];
$check="select * from application where sid=$sid and j_id=$j_id;";
$check_con=mysqli_query($con,$check);
$total=mysqli_num_rows($check_con);

if($total>0)
{
  echo"<script>window.alert('Already Registered for this Job Profile');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/student_dash.php"';
  echo '</script>';
}
else {
  $s="INSERT INTO `application` (`sid`, `j_id`) VALUES ($sid, $j_id);";
  mysqli_query($con,$s);
  echo"<script>window.alert('Registration Successfull');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/student_dash.php"';
  echo '</script>';
}
?>

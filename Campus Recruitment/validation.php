<?php
session_start();
$con=mysqli_connect('localhost','root','','campus_recruitment');
$user_name=$_POST['username'];
$password=$_POST['password'];
$s="select * from students where email='$user_name' && Password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num >0)
{
  session_start();
  $_SESSION['id'] = $row['s_id'];
  header("location:student_dash.php");
}
else {
  echo"Incorrect Id/Pass";
  echo"<script>window.alert('Login Failed');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/"';
  echo '</script>';
  // header("location:http://localhost/Campus%20Recruitment/");
}
?>

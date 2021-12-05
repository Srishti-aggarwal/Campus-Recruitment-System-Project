<?php
session_start();

$con=mysqli_connect('localhost','root','','campus_recruitment');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['birthday'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact_number=$_POST['contact_number'];
$address=$_POST['address'];
$sslc=$_POST['sslc'];
$hsc=$_POST['hsc'];
$cgpa=$_POST['cgpa'];
$course=$_POST['course'];
$passing_year=$_POST['passing_year'];
$s="select * from students where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num >0)
{
  // echo"Email is Already Taken";
  echo"<script>window.alert('Email is Already Taken');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/signup.php"';
  echo "</script>";
}
else {
  $reg="insert into students(fname,lname,dob,gender,email,password,mobile_no,address,sslc,hsc,cgpa,course,passing_year) values('$fname','$lname','$dob','$gender','$email','$password',$contact_number,'$address','$sslc','$hsc','$cgpa','$course','$passing_year')";
  mysqli_query($con,$reg);
  // echo"Registration Successfull";
  echo"<script>window.alert('Registration Successfull');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/login.php"';
  echo "</script>";
}
?>

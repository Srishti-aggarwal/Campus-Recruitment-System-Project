<?php
// include("includes/database.php");
$con=mysqli_connect('localhost','root','','campus_recruitment');
// mysql_select_db('campus_recruitment',$con);
session_start();
if (!isset($_SESSION['id'])){
header('location:login.php');
}
$id = $_SESSION['id'];
$s="select * from students where s_id ='$id'";
$res=mysqli_query($con,$s);
$r=mysqli_fetch_array($res);
$firstname=$r['fname'];
$lastname=$r['lname'];
$email=$r['email'];
$dob=$r['dob'];
$gender=$r['gender'];
$mobile=$r['mobile_no'];
$course=$r['course'];
$s_id=$r['s_id'];
$passing_year=$r['passing_year'];
?>

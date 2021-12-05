<?php
$con=mysqli_connect('localhost','root','','campus_recruitment');
session_start();
if (!isset($_SESSION['cid'])){
header('location:company_login.php');
}
$id = $_SESSION['cid'];
$s="select * from company where id ='$id'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
$id=$row['id'];
$company_name=$row['Company_Name'];
$company_email=$row['Email'];
$ceo=$row['Name_Of_Ceo'];
$cto=$row['Name_Of_Cto'];
$company_loc=$row['Company_loc'];
?>
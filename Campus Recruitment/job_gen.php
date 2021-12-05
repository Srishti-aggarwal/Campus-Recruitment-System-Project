<?php
session_start();

$con=mysqli_connect('localhost','root','','campus_recruitment');
$job_prof=$_POST['jname'];
$job_sal=$_POST['sal'];
$job_loc=$_POST['loc'];
$deadline=$_POST['deadline'];
$year=$_POST['year'];
$min_cgpa=$_POST['cgpa'];
$course=$_POST['course'];
$max_age=$_POST['age'];
$c_id=$_POST['Id'];

$s="select * from jobs where c_id=$c_id && job_prof = '$job_prof'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num >0)
{
  // echo"Email is Already Taken";
  echo"<script>alert('This Job Profile is already Created');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/company_dashboard.php"';
  echo '</script>';
}
else{
  $reg="INSERT INTO jobs(job_prof, job_sal, job_loc, deadline, year, min_cgpa, course, max_age, c_id) VALUES ('$job_prof', $job_sal, '$job_loc', '$deadline', '$year', $min_cgpa, '$course', $max_age, $c_id);";
  mysqli_query($con,$reg);
  // echo"Registration Successfull";
  echo"<script>alert('Job generated!');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/company_dashboard.php"';
  echo '</script>';
}

?>


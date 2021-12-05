<?php
$con=mysqli_connect('localhost','root','','campus_recruitment');
$appid=$_POST['Application_id'];
$check="select * from application where app_id='$appid' && status='Accepted'";
$check_existing=mysqli_query($con,$check);
$num=mysqli_num_rows($check_existing);
if($num>0)
{
  echo"<script>window.alert('Candidate Already Selected');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/company_dashboard.php"';
  echo '</script>';
}
else {
  $final="UPDATE `application` SET `status`= 'Accepted' WHERE `app_id`=$appid";
  mysqli_query($con,$final);
  echo"<script>window.alert('Candidate Selected');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/company_dashboard.php"';
  echo '</script>';
}

?>

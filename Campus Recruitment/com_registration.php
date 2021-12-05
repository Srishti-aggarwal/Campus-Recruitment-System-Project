<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="campus_recruitment";

//create the connection;
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}

//taking the input from the form
$Company_Name=$_POST['company'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Contact_No=$_POST['contact_number'];
$Name_Of_Ceo=$_POST['ceo'];
$Name_Of_Cto=$_POST['cto'];
$Company_loc=$_POST['address'];

//performing the insert query execution
$check_str="select * from company where Email='$Email'";
$check_connected_string=mysqli_query($conn,$check_str);
$num_rows=mysqli_num_rows($check_connected_string);
if($num_rows>0)
{
  echo"<script>window.alert('Company Already Registered');";

  echo 'window.location= "http://localhost/Campus%20Recruitment/company_login.php"';
  echo '</script>';
}
else {
  $sql="INSERT INTO company(Company_Name,Email,Password,Contact_No,Name_Of_Ceo,Name_Of_Cto,Company_loc)VALUES('$Company_Name','$Email','$Password','$Contact_No','$Name_Of_Ceo','$Name_Of_Cto','$Company_loc')";
  mysqli_query($conn,$sql);
  echo"<script>window.alert('Registration Succesfull');";
  echo 'window.location= "http://localhost/Campus%20Recruitment/company_login.php"';
  echo '</script>';
}



//close connection
mysqli_close($conn);

?>

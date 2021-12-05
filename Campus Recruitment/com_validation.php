  <?php
  session_start();
  $con=mysqli_connect('localhost','root','','campus_recruitment');
  $user_name=$_POST['username'];
  $password=$_POST['password'];
  $s="select * from company where Email='$user_name' && Password='$password'";
  $result=mysqli_query($con,$s);
  $num=mysqli_num_rows($result);
  if($num >0)
  {
      $row=mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['cid'] = $row['id'];
      header("location:company_dashboard.php");
  }
  else {
    echo"Incorrect Id/Pass";
    echo"<script>window.alert('Login Failed');";
    echo 'window.location= "http://localhost/Campus%20Recruitment/"';
    echo '</script>';
  }
  ?>

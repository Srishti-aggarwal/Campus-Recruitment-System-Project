<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Students details</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/viewCandidate.css">
</head>

<body>
  <nav>
    <div class="container">
      <div class="main-sec">
        <ul>
          <li><a href="company_dashboard.php">Company Dashboard</a></li>
          <li><a href="job.php">Create Job Vacancy</a></li>
          <li class="setWidth"><a href="logout.php">Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php $con = mysqli_connect('localhost', 'root', '', 'campus_recruitment');
  $sid = $_POST['sid'];
  session_start();
  if(!isset($_SESSION['cid']))
  {
    echo "<script>alert('Please Login to Continue');";
    echo 'window.location= "http://localhost/Campus%20Recruitment/index.html"';
    echo "</script>";
  }
  if (isset($_POST['app_id'])) {
    $app_id = $_POST['app_id'];
  }

  $student_details = "select * from students where s_id='$sid'";

  $result = mysqli_query($con, $student_details);

  $num = mysqli_num_rows($result);
  $r = mysqli_fetch_array($result); ?>
  <div class="student_details">
    <div class="container">
      <h1 class="text-center mb-5">Students Details</h1>
      <div class="row">
        <div class="col-lg-6">
          <h3>Student ID : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['s_id'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student name : </h3>
        </div>
        <div class="col-lg-6">
          <h3> <?php echo $r['fname'] . ' ' . $r['lname'] ?></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student Email : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['email'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student DOB : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['dob'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student Gender : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['gender'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student Mobile : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['mobile_no'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student Course : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['course'] ?> </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>Student Passing Year : </h3>
        </div>
        <div class="col-lg-6">
          <h3><?php echo $r['passing_year'] ?> </h3>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-6">
          <h3>Current CGPA : </h3>
        </div>
        <div class="col-lg-6">
          <h3> <?php echo $r['cgpa'] ?></h3>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-6">
          <h3>HSC : </h3>
        </div>
        <div class="col-lg-6">
          <h3> <?php echo $r['hsc'] ?></h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3>SSC : </h3>
        </div>
        <div class="col-lg-6">
          <h3> <?php echo $r['sslc'] ?></h3>
        </div>
      </div>

      <form action="selected.php" method="post" class="text-center">
        <input style="display:none" type="text" name="Application_id" value="<?php echo $app_id ?>" readonly>
        <input type="submit" value="Accept" class="btn btn-success btn-lg px-5 mt-5">
      </form>
    </div>
  </div>
  <?php include "_footer.php"?>
</body>

</html>

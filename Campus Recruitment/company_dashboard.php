<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/company_dash.css">
</head>
<body>
<?php include ('Company_job_session.php');?>
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
    <div class="company_details">
      <div class="container">
    <div class="row">
      <!-- Company Details Section -->
        <div class="col-lg-6 py-5 pr-4">
            <h1 style="text-align:center";>Company Details</h1>
            <h2 class="mb-3">Company ID : <?php echo $id ?> </h2>
            <h2 class="mb-3">Company name :  <?php echo $company_name ?></h2>
            <h2 class="mb-3">Company Email : <?php echo $company_email ?> </h2>
            <h2 class="mb-3">Company CEO : <?php echo $ceo ?> </h2>
            <h2 class="mb-3">Company CTO : <?php echo $cto ?> </h2>
            <h2 class="mb-3">Company Location : <?php echo $company_loc ?> </h2>
        </div>

        <!-- Jobs Created by you Section -->
        <div class="col-lg-6 border border-light py-5 pl-4">
             <h1 style="text-align:center" ;>Created Jobs by You 😄</h1>
             <?php

              $job_by_id="select * from jobs where c_id='$id'";
              $result_job=mysqli_query($con,$job_by_id);
              $num_job=mysqli_num_rows($result_job);
              ?>
             <?php if($num_job)
             {?>
               <div class="row">
                 <div class="col-lg-5">
                    <h4>Job ID </h4>
                 </div>
                 <div class="col-lg-5">
                   <h4>Job Profession</h4>
                 </div>
               </div>

               <hr/>
                <?php while($row_job=mysqli_fetch_array($result_job))
                {?>
                  <div class="row mb-2">


                      <div class="col-lg-5">

                        <h5><?php echo $row_job['job_id'] ?></h5>

                      </div>
                      <div class="col-lg-5">

                        <h5><?php echo $row_job['job_prof'] ?></h5>
                      </div>
                  </div>
                    <hr />
                <?php }
             }?>
             <?php if($num_job==0)
             {?>
                    <h5 style="text-align: center">Sorry 😢Job Not Created yet </h5>
             <?php } ?>
        </div>
    </div>
    </div>
    </div>
    <?php require "display_job.php"?>
    <?php include "_footer.php"?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

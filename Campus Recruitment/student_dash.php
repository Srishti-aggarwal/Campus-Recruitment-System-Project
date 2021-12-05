<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/studen_dash.css">
</head>
<body>
<?php include ('session.php');?>
<nav>
        <div class="container">
        <div class="main-sec">
            <ul>
                <li><a href="student_dash.php">Student Dashboard</a></li>
                <li><a href="#vaccancy">View Vacancy</a></li>
                <li class="setWidth"><a href="logout.php">Log out</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="student_details">
    <div class="container">
            <h1 class="text-center">Students Details</h1>
            <h2 class="mb-3">Student ID : <?php echo $s_id ?> </h2>
            <h2 class="mb-3">Student name :  <?php echo $firstname.' '.$lastname ?></h2>
            <h2 class="mb-3">Student Email : <?php echo $email ?> </h2>
            <h2 class="mb-3">Student DOB : <?php echo $dob ?> </h2>
            <h2 class="mb-3">Student Gender : <?php echo $gender ?> </h2>
            <h2 class="mb-3">Student Mobile : <?php echo $mobile ?> </h2>
            <h2 class="mb-3">Student Course : <?php echo $course ?> </h2>
            <h2 class="mb-3">Student Passing Year : <?php echo $passing_year ?> </h2>

    </div>
    </div>
    <div class="container" id="vaccancy">
      <?php require "view_vacancy.php"?>
    </div>
    <?php include "_footer.php"?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>

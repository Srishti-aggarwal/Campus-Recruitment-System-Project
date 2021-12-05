<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View vacancy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/company_dash.css">
  </head>
  <body>
    <?php $con=mysqli_connect('localhost','root','','campus_recruitment');
    $job_query="select * from application join jobs on jobs.job_id=application.j_id where jobs.c_id='$id'";
    $result_job=mysqli_query($con,$job_query);
    $num_job=mysqli_num_rows($result_job);?>
    <div class="students_applide">
      <div class="container">
    <?php if($num_job)
    {?>
        <h2 class="mb-5 text-center">Students Applied</h2>
        <div class="app_Students">
       <?php while($row_jobs=mysqli_fetch_array($result_job))
       {?>
         <p class="mb-2">
         <form style="display:inline" action="selected.php" method="post">
          Job Id <input type="text" name="job_Id" value="<?php echo $row_jobs['j_id'] ?>" readonly >
              Student ID  <input type="text" name="Student_Id" value="<?php echo $row_jobs['sid'] ?>" readonly>
             Application ID <input type="text" name="Application_id" value="<?php echo $row_jobs['app_id'] ?>" readonly>
           <input type="submit" value="Accept" class="btn btn-success">
         </form>
         <form style="display:inline" action="view_candidates.php" method="post">
            <input style="display:none" type="text" name="app_id" value="<?php echo $row_jobs['app_id'] ?>" readonly>
             <input style="display:none" type="text" name="sid" value="<?php echo $row_jobs['sid'] ?>" readonly>
             <input type="submit" class="btn btn-primary" value="View candidate" />
         </form>
         <hr/>
          </p>
       <?php }?>
       </div>
    <?php }?>
    </div>
    </div>
  </body>
</html>

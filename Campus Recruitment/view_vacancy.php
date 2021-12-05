  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>View vacancy</title>
    </head>
    <body>
      <?php $con=mysqli_connect('localhost','root','','campus_recruitment');
      
      $s="select * from jobs where deadline>=curdate()";
      $result=mysqli_query($con,$s);

      $num=mysqli_num_rows($result);?>

      <div class="check_jobs">
      <div class="container">

      <?php if($num)
      {?>
      <h2 class="mb-5 text-center"> View Vacancy</h2>
        <div class="job_for_student">
      <?php   while($row=mysqli_fetch_array($result))
         {?>
           <form action="apply.php" method="post">
            <p style="display:none"> Your Student Id <input type="text" name="s_Id" value="<?php echo $s_id ?>" readonly> </p>
            <p class="text-center">Job Id <input type="text" name="Id" value="<?php echo $row['job_id'] ?>" readonly>
             <input style="display:none" type="text" name="c_Id" value="<?php echo $row['c_id'] ?>" readonly>
               <?php
                  $val=$row['c_id'];
                  $company_name="select * from company where id='$val'";
                  $res_comp=mysqli_query($con,$company_name);
                  $crow=mysqli_fetch_assoc($res_comp);
                ?>
                Company Name <input type="text" name="c_name" value="<?php echo $crow['Company_Name'] ?>" readonly>
               Job prof  <input type="text" name="job_prof" value="<?php echo $row['job_prof'] ?>" readonly>

             <input class="btn btn-primary" type="submit" value="Apply for Job"></p>
             <hr />
           </form>


         <?php }?>
       </div>
    <?php }?>
      </div>
    </div>
    </body>
  </html>

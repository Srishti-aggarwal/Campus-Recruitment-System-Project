
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job generation</title>
    <link rel="stylesheet" href="css/candidate_login.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
<?php include ('Company_job_session.php');?>
<nav>
        <div class="container">
        <div class="main-sec">
            <ul>

                <li><a href="company_dashboard.php">Company Dashboard</a></li>
                <li><a href="job.php">Create Job Vacancy</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container">
    <div class="form-box">
        <h1 class="main_header">
            Job generation

        </h1>
        <hr>
        <form action="job_gen.php" method="post">
            <p> Job Profile <input type="text" name="jname" placeholder="Job Name" required></p>
            <p> Your Company Id <input type="number" name="Id" placeholder="012452" value="<?php echo $id ?>" readonly required></p>
            <p> Salary <input type="number" name="sal" placeholder="650000" required></p>
            <p> Deadline <input type="date" name="deadline" placeholder="22/02/2021" required></p>
            <p> Job location <input type="text" name="loc" placeholder="Banglore" required></p>
            <fieldset>
                <legend>Minimum Requirements</legend>
                <span> Min CGPA <input type="number" name="cgpa" placeholder="8" min="0" max="10" style="width:15%;" required></span>
                <span> Course <input type="text" name="course" placeholder="MCA" style="width:15%;" required></span>
                <span> Year <input type="date" name="year" placeholder="1" style="width:15%;" required></span>
                <span> Max Age <input type="number" name="age" placeholder="18" min="17" max="30" style="width:15%;" required></span>
            </fieldset>
            <input type="submit">
        </form>
    </div>
</div>
</body>

</html>

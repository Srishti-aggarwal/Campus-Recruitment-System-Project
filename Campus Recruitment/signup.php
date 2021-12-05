<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/candidate_login.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
    <?php require "_partials.php"  ?>
    <div class="container">
    <div class="form-box">
        <h1 class="main_header">
            Candidate Registration

        </h1>
        <hr>
        <form action="registration.php" method="post">
            <p> First Name<input type="text" name="fname" placeholder="First Name" required></p>
            <p> Last Name <input type="text" name="lname" placeholder="Last name"></p>
            <p>DOB <input type="date" name="birthday" required></p>
            <fieldset>
                <legend>Gender</legend>
                Male<input type="radio" name="gender" value="Male"> Female
                <input type="radio" name="gender" value="Female">
            </fieldset>
            <p>Email <input type="email" name="email" placeholder="abc@xyz.com" required></p>
            <p>Password <input type="password" name="password" placeholder="Enter Password" required></p> 
            <p>
                Contact No *<input type="number" name="contact_number"  placeholder="1234567890" required>
            </p>
            <p>Address <textarea name="address" cols="100" rows="8" placeholder="Address"></textarea></p>
            <p>SSLC % <input type="text" name="sslc" maxlength="3" placeholder="Enter your Percentage as 99 instead of 99% " required></p>
            <p>HSC % <input type="text" name="hsc" maxlength="3" placeholder="Enter your Percentage as 99 instead of 99%" required></p>
            <p>Current CGPA <input type="text" name="cgpa" maxlength="2" placeholder="Current CGPA as 9.96 " required></p>
            <p>Course <input type="text" name="course" placeholder="MCA,B.tech..." required></p>
            <p>Passing Year <input type="number" name="passing_year" maxlength="4" placeholder="2023" required></p>
            <input type="submit">

        </form>
    </div>
    <hr>
</div>
    
    <div class="container">
    <div class="form-box">
        <h3 class="login">Already have an Account <a href="login.php">Log In</a></h3>
    </div>
</div>
</body>

</html>

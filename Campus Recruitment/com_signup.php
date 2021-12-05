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
            Company Registration

        </h1>
        <hr>
        <form action="com_registration.php" method="post">
            <p> Name of the company<input type="text" name="company" placeholder=" Company Name" ></p>
            <!-- <fieldset>
                <legend>Category</legend>
               <input type="radio" name="Category" value="Regular Company">Regular Company
                <input type="radio" name="Category" value="Dream Company">Dream Company
                <input type="radio" name="Category" value="Super Dream Company">Super Dream Company
            </fieldset> -->
            <p>Email <input type="email" name="email" placeholder="abc@gmail.com" required></p>
            <p>Password <input type="password" name="password" placeholder="Enter Password" required></p>
            <p>
                Contact No *<input type="number" name="contact_number"  placeholder="1234567890" required>
            </p>
            <p>Name Of the CEO <input type="text" name="ceo" placeholder="name of CEO" required></p>
            <p>Name Of the CTO <input type="text" name="cto" placeholder="name of CTO" required></p>
            <p>Address
            <p><textarea name="address" cols="100" rows="8" placeholder="Address"></textarea></p>
            </p>
            <!-- <p>PinCode <input type="number" name="pincode" placeholder="247002"></p>
             <p> Name of the Founder<input type="text" name="founder" placeholder=" Founder Name" ></p>
            <p>Founded on:</p>
            <label for="birthday"></label><input type="date" id="birthday" name="birthday"> -->
            <input type="submit">

        </form>
    </div>
    <hr>
    <div class="form-box">
        <h3 class="login">Already have an Account <a href="company_login.php">Log In</a></h3>
    </div>
</div>
</body>

</html>

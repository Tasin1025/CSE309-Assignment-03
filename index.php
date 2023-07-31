<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Tasin_favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter First Name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter Last Name" name="lname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter Email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter Number" name="phoneNumber" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter Password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm Password" name="Cpassword" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit">
        </div>
      </form>
    </div>
  </div>
  <?php
   if (isset($_POST['submit'])) {
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $pass = $_POST['password'];
    $Cpass = $_POST['Cpassword'];
    $formQuery="INSERT INTO reg_form (First_name,Last_name, Email, 
    PhoneNumber, Password, ConfirmPassword) VALUES 
    ('$fName','$lName', '$email', '$phone', '$pass', '$Cpass')";
    $formTable = mysqli_query($conn, $formQuery);}
    ?>
</body>
</html>
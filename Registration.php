<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="stylesheet" href="Reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <!-- <img class="bg" src="bg2.jpg" alt="IIT Kanpur" srcset=""> -->
    <div class="container">
        <h1>Registration  Form</h1>
        <p>Enter your details and submit this form to confirm yhour participation in the trip</p>
        <!-- <p class="submitMsg">Thanks for submitting  your form. W are happy to see you joining us for the US Trip</p> -->

        <form action="#" method="POST">
            <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" required>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" required>
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            <input type="password" name="conpassword" id="email" placeholder="Enter your Confirm password" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender"  required>
            <input type="text" name="email" id="email" placeholder="Enter your Email" required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone number" required>
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter any other information here" required></textarea>
            <label>HOBBIES</label>
            <div>
            
            <input type="radio" name="r1" id="phone" value="Singing" required><label>Singing</label>
            <input type="radio" name="r1" id="phone" value="Cricket" required><label>Cricket</label>
            <input type="radio" name="r1" id="phone" value="Football" required><label>Football</label>
            </div>
            <button class="btn" value="register" type="submit" name="register">Submit</button>
        </form>
</div>
    
</body>
</html>

<?php

if($_POST['register'])
{
    $fname    = $_POST['firstname'];
    $lname    = $_POST['lastname'];
    $pwd      = $_POST['password'];
    $conpwd   = $_POST['conpassword'];
    $gender   = $_POST['gender'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $hobbies  = $_POST['r1'];

    // if($fname !="" && $lname !="" && $pwd !="" && $conpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    // {   for server side validation
   
    $query = "INSERT INTO form (fname, lname, password, cpassword, gender, email, phone, address, hobbies) 
    values('$fname','$lname','$pwd','$conpwd','$gender','$email','$phone','$address','$hobbies')";

    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "Data inserted in to database";
    }
    else
    {
        echo "Failed";
    }
    }
//     else
//     {
//         echo "<script>alert('Fill the form first');</script>";
//     }     

// }   for server side validation

?>
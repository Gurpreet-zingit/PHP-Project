<?php 
include("connection.php");
// $email = $_GET['email'];

// $query  = "SELECT * FROM form2 where email= '$email'";
// $data = mysqli_query($conn, $query);

// $result = mysqli_fetch_assoc($data);

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
  <img class="bg" src="bg2.jpg" alt="IIT Kanpur" srcset="">
    <div class="container">
        <h1>Registration  Form</h1>
        <p>Enter your details and submit this form to confirm yhour participation in the trip</p>
        <!-- <p class="submitMsg">Thanks for submitting  your form. W are happy to see you joining us for the US Trip</p> -->

        <form action="#" method="POST">
            <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" required>
            <input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" required>
            <input type="password" name="password" id="password" placeholder="Enter your Password">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender"  required>
            <input type="text" name="email" id="email" placeholder="Enter your Email" required>
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone number" required>
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter any other information here" required></textarea>
            <button class="btn" value="update" type="submit" name="update">Submit</button>
        </form>
</div>
    
</body>
</html>

<?php

if($_POST['update'])
{
    $fname    = $_POST['firstname'];
    $lname    = $_POST['lastname'];
    $pwd      = $_POST['password'];
    $gender   = $_POST['gender'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];

    // if($fname !="" && $lname !="" && $pwd !="" && $conpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    // {   for server side validation
        $query  = "SELECT * FROM form2 where email= '$email'";

        $query=mysqli_query($conn,"SELECT * from form2 where email='$email'");

if(mysqli_num_rows($query)>0)
{

    // echo "values already exists";
    $query = "UPDATE form2 SET fname='$fname', lname = '$lname', password = '$pwd', 
    gender = '$gender', phone = '$phone', address = '$address' where email='$email'";

}

else {

    $query = "INSERT INTO form2 (fname, lname, password, gender, email, phone, address) 
    values('$fname','$lname ','$pwd','$gender','$email','$phone','$address')";
}
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
   
    // $query = "INSERT INTO form2 (fname, lname, password, gender, email, phone, address) values('$fname','$lname','$pwd','$gender','$email','$phone','$address')";

    // $data = mysqli_query($conn, $query);
    // if($data)
    // {
    //     echo "Data inserted in to database";
    // }
    // else
    // {
    //     echo "Failed";
    // }
    // }
//     else
//     {
//         echo "<script>alert('Fill the form first');</script>";
//     }     

// }   for server side validation

?>
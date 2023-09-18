<?php 
include("connection.php");

$id = $_GET['id'];

$query  = "SELECT * FROM form where id= '$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

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
        <h1>Update student  Details</h1>

        <form action="#" method="POST">
            <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" required  value="<?php echo $result['fname']; ?>">
            <input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" required value="<?php echo $result['lname']; ?>">
            <input type="password" name="password" id="password" placeholder="Enter your Password" value="<?php echo $result['password']; ?>">
            <input type="password" name="conpassword" id="cpassword" placeholder="Enter your Confirm password" required value="<?php echo $result['cpassword']; ?>">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender"  required value="<?php echo $result['gender']; ?>">
            <input type="text" name="email" id="email" placeholder="Enter your Email" required value="<?php echo $result['email']; ?>">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone number" required value="<?php echo $result['phone']; ?>">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter any other information here" required ><?php  echo $result['address'];  ?>
            </textarea>
            <!-- <label>
                <input type="checkbox" required>
                <span class="checkmark">
            </label>
            <p>Agree to terms and conditions</p> -->
            <button class="btn" value="update" type="submit" name="update">Update Details</button>
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
    $conpwd   = $_POST['conpassword'];
    $gender   = $_POST['gender'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];

    // if($fname !="" && $lname !="" && $pwd !="" && $conpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
    // {   for server side validation

    $query = "UPDATE form SET fname='$fname', lname = '$lname', password = '$pwd', cpassword = '$conpwd', 
    gender = '$gender', email = '$email', phone = '$phone', address = '$address' where id='$id'";

    $data = mysqli_query($conn, $query);
    if($data)
    {
         
    }
    else
    {
        echo "<script>alert('Record updated')</script>";
       ?> 
       <meta http-equiv = "refresh" content = "0; url = http://localhost/Reg_page/display.php" /> 

       <?php
    }
    }
    else{
        echo "Failed to updated";
    }
    // else
    // {
    //     echo "<script>alert('Fill the form first');</script>";
    // }     

// }   for server side validation

?>
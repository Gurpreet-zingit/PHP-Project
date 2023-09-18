<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    // echo "connection successfull";
}
else{
    echo "connection failed".mysqli_connect_error();
    
}

?>
<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background-color: #d071f9;
            }
            table{
                background-color: white;
            }
            .update, .delete{
                background-color: green;
                color: white;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 25px;
                width: 115px;
                font-weight: bold;
                cursor: pointer;
            }
            .delete{
                background-color: red;
            
            }
        </style>
    </head>
</html>

<?php 
include("connection.php");
error_reporting(0);

$query  = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

// echo $total;

if($result !=0)
{
    ?>

    <h2 align="center"><mark>Displaying All Records</mark></h2>

    <table border="1" align="center" cellspacing="7" width="100%">
        <tr>
            <th witth="5%">ID</th>
            <th witth="10%">First Name</th>
            <th witth="10%">Last Name</th>
            <th witth="10%">Gender Name</th>
            <th witth="20%">Email</th>
            <th witth="10%">Phone</th>
            <th witth="25%">Address</th>
            <th witth="5%">Operation</th>
        </tr>


    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo   "
                <tr>
                  <th>".$result[id]."</th>
                  <th>".$result[fname]."</th>
                  <th>".$result[lname]."</th>
                  <th>".$result[gender]."</th>
                  <th>".$result[email]."</th>
                  <th>".$result[phone]."</th>
                  <th>".$result[address]."</th>
                  <td><a href='update_design.php ?id=$result[id]'><input type='Submit' value='Update' class='update'></a>
                  <a href='delete.php ?id=$result[id]'><input type='Submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a>
                  </td>
                </tr>
               
               ";
    }
}

else
{
    echo "no records found";
}


?>
</table>

<script>

    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>

        
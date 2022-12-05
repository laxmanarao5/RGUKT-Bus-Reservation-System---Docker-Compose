<?php 
    include("../includes/config.php");
    session_start();
    $username=$_SESSION['id'];
    $query="SELECT * FROM bookings WHERE id='$username'";
    $result=mysqli_query($con,$query);
    $row=$result->fetch_assoc();
    $query1="SELECT * FROM login WHERE uid='$username'";
    $result1=mysqli_query($con,$query1);
    $row1=$result1->fetch_assoc();
?>
<html>
    <head>
    <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <h1>Already booked</h1>
        <h1>Happy Journey</h1>
        <br><br>
        

          <a href="receipt.php"><button >Download Receipt</button></a>
        <br><br>
        <a href="change_pass.php">Change Password</a>
    </body>
</html>
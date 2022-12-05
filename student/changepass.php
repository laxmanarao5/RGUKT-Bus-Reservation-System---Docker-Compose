<?php
include("../includes/config.php");
session_start();
$id=$_SESSION['id'];
$cpass=$_POST['cpass'];
$pass=$_POST['pass'];
$npass=$_POST['npass']; 
$cpass1=password_hash($pass,PASSWORD_DEFAULT);
$query="SELECT * FROM login WHERE uid='$id'";
$result=mysqli_query($con,$query);
$row=$result->fetch_assoc();
$test=password_verify($cpass,$row['pass']);
if($pass==$npass)
{
    if($test)
    {
        $query1="UPDATE `login` SET `pass`='$Cpass1' WHERE uid='$id'";
        $result1=mysqli_query($con,$query1);
        echo "<h2>Password Updated Sucessfully</h2>";
        header("Refresh: 2; URL=student_page.php"); 
    }
    else
    {
        echo "<h2>Incorrect Credentials</h2>";
        header("Refresh: 2; URL=student_page.php"); 
    }
}
else
{
    echo "<h2>Password Doesnt Match</h2>";
    header("Refresh: 2; URL=student_page.php"); 
}
?>
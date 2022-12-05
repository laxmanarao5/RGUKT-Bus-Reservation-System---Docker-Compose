<?php
include("../includes/config.php");
$cpass=$_POST['cpass'];
$pass=$_POST['pass'];
$npass=$_POST['npass']; 
$pass2=password_hash($pass,PASSWORD_DEFAULT);
$query="SELECT * FROM login WHERE uid='admin'";
$result=mysqli_query($con,$query);
$row=$result->fetch_assoc();
$test=password_verify($cpass,$row['pass']);
if($pass==$npass)
{
    if($test)
    {
        $query1="UPDATE `login` SET `pass`='$pass2' WHERE uid='admin'";
        $result1=mysqli_query($con,$query1);
        echo "<h2>Password Updated Sucessfully</h2>";
        header("Refresh: 2; URL=../index.php"); 
    }
    else
    {
        echo "<h2>Incorrect Credentials</h2>";
        header("Refresh: 2; URL=dash1.php"); 
    }
}
else
{
    echo "<h2>Password Doesnt Match</h2>";
    header("Refresh: 2; URL=dash1.php"); 
}
?>
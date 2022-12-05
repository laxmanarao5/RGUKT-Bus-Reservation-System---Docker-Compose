<?php
include("../includes/config.php");
$id=$_GET['id'];
$pass2=password_hash('rguktsklm',PASSWORD_DEFAULT);
$query1="UPDATE `login` SET `pass`='$pass2' WHERE uid='$id'";
$result1=mysqli_query($con,$query1);
header("Location:users.php");
        
?>
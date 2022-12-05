<?php
include("../includes/config.php");
$dpass='admin';
$pass=password_hash($dpass,PASSWORD_DEFAULT);
$query1="UPDATE `login` SET `pass`='$pass' WHERE uid='admin'";
$result1=mysqli_query($con,$query1);
echo "Password updated for admin";
?>
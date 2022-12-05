<?php
include("../includes/config.php");
$pname=$_POST["pname"];
$pname = str_replace(' ', '_', $pname);
$amount=$_POST["amount"];
$query="INSERT INTO places(pname,amount) VALUES('$pname','$amount');";
$result=mysqli_query($con,$query);
header("Location: open_bookings.php");
?>
<?php
include("../includes/config.php");
$pname=$_POST["pname"];
$query="DELETE FROM places WHERE pname='$pname'";
$result=mysqli_query($con,$query);
header("Location: open_bookings.php");
?>
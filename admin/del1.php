<?php
include("../includes/config.php");
$pname=$_GET["id"];
$query="DELETE FROM login WHERE uid='$pname'";
$result=mysqli_query($con,$query);
header("Location: users.php");
?>
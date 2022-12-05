<?php
include("../includes/config.php");
$query="UPDATE login SET`location`='0' WHERE uid='admin';";
$result=mysqli_query($con,$query);
header("Location: dash1.php");
?>
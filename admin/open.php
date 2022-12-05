<?php
include("../includes/config.php");
$name=$_POST['occasion'];
$query="UPDATE login SET `location`='1',`name`='$name' WHERE uid='admin';";
$result=mysqli_query($con,$query);
header("Location: dash1.php");
?>
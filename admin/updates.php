<?php
    include("../includes/config.php");
    $id=$_POST['std_id'];
    $des=$_POST['loc'];
    $query1="UPDATE `login` SET `location`='$des' WHERE uid='$id'";
    $result1=mysqli_query($con,$query1);
    echo "<h2>Location Updated Sucessfully</h2>";
    header("Refresh: 2; URL=users.php"); 
?>
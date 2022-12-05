<?php
include("../includes/config.php");
$dpass=$_POST['dpass'];
$pass=password_hash($dpass,PASSWORD_DEFAULT);
$filename=$_FILES['files']['tmp_name'];
$handle = fopen("$filename","r");
while($row=fgetcsv($handle))
{
    $uid=$row[0];
    $name=$row[1];
    $loc=$row[2];
    $query="INSERT INTO `login`(`uid`, `name`, `pass`, `location`, `type`) VALUES ('$uid','$name','$pass','$loc','student');";
    $result=mysqli_query($con,$query);
}
fclose($handle);
echo "<h1 style='text-align: center;'>Data Added Sucessfully</h1>";
echo "<h2 style='text-align: center;'>Redirecting to Bookings page in 4 secs</h1>";
header("Refresh: 5; URL=users.php"); 
?>
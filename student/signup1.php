<?php
include("../includes/config.php");
$username=$_POST["id"];
$name=$_POST["name"];
$pass=$_POST["psw"];
$pass1=$_POST["psw2"];
$pass2=password_hash($pass1,PASSWORD_DEFAULT);
$loc=$_POST["location"];
$query="SELECT * FROM login WHERE uid='$username';";
$result=mysqli_query($con,$query);
$query1="SELECT uid FROM login WHERE uid='$username';";
$result1=mysqli_query($con,$query1);
if($result1)
{
        echo "<h1>User Already exists</h1><h2>Redirecting to SignUp page in 3 sec</h2>";
        header('Refresh: 3; URL=signup.php');
}
else
{
if($pass==$pass1)
{
	$query="INSERT INTO login VALUES('$username','$name','$pass2','$loc','student');";
    $result=mysqli_query($con,$query);
    echo '<h1 style="color:green">Registration Sucessfull<h1>';
    echo "<h2>Redirecting to HomePage</h2?";
    //header("Location: ../index.php");
    header('Refresh: 2; URL=../index.php');
}
else
{
	//header('Refresh: 5; URL=../index.php');
    echo "Error";
}
}
?>
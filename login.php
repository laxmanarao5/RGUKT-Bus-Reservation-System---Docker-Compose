<?php
include("includes/config.php");
$username=$_POST["id"];
$pass=$_POST["password"];
$query="SELECT * FROM login WHERE uid='$username';";
$result=mysqli_query($con,$query);
$test=0;
if(mysqli_num_rows($result)>0)
{
$row = $result->fetch_assoc();
$dbpass=$row["pass"];
$type=$row["type"];
$test=password_verify($pass,$dbpass);
}

if($test)
{
	session_start();
	if($type=="admin")
	{
	$_SESSION['lux123']="admin";
	header("Location: admin/dash1.php");
	exit();
	}
	else
	{
		$query1="SELECT * FROM login WHERE uid='admin';";
		$result1=mysqli_query($con,$query1);
		$row1= $result1->fetch_assoc();
		$occ=$row1['name'];
		$query2="SELECT * FROM bookings WHERE Occasion='$occ';";
		$result2=mysqli_query($con,$query2);
		$i=0;
		while($temp= $result2->fetch_assoc())
		{
			if($temp['id']==$username)
			{
				$i++;
			}
		}
		if($row1['location']=='1' && $i==0)
		{
			$_SESSION['id']=$username;
			header("Location: student/student_page.php");
		}
		else if($row1['location']=='1')
		{
			$_SESSION['id']=$username;
			header("Location: student/already_booked.php");
		}
		else
		{
			header("Location: student/booking_not_yet_opened.html");
		}
	}
}
else
{
	header("Location: index1.php");
}
?>
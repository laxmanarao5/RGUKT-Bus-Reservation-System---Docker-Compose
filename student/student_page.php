<?php
include("../includes/config.php");
session_start();
$username=$_SESSION['id'];
$query="SELECT * FROM login WHERE uid='$username'";
$result=mysqli_query($con,$query);
$row=$result->fetch_assoc();
$loc=$row['location'];
$query1="SELECT * FROM places WHERE pname='$loc';";
$result1=mysqli_query($con,$query1);
$row1=$result1->fetch_assoc();
$ordid="ORD" .rand(100000000,999999999);

?>
<html>
    <head>
    <link rel="stylesheet" href="student_pay.css">
    </head>
    <body>
    <form action="../PaytmKit/pgRedirect.php" method="POST">
  <div class="container">
    <h1>Book your Ticket</h1>
    <hr>
    <input style="visibility:hidden;display:flex;" class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                            name="ORDER_ID" autocomplete="off"
                            value="<?php echo  $ordid?>">
    <input style="visibility:hidden;display:flex;" class="form-control"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
    <input style="visibility:hidden;display:flex;" class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
                            size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
    <label for="psw"><b>Sudent Id</b></label>
    <input type="text" name="CUST_ID" value="<?php echo $row['uid'];?>" id="psw" required readonly>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" value="<?php echo $row['uid'].'@rguktsklm.ac.in'; ?>" name="email" id="email" required readonly>

    <label for="psw"><b>Destination</b></label>
    <input type="text" value="<?php echo $row['location'];?>" name="location1" id="psw" required readonly>

    <label for="psw-repeat"><b>Amount</b></label>
    <input type="text" value="<?php echo $row1['amount'];?>" name="TXN_AMOUNT" id="psw-repeat" required readonly>
    <hr>

    <button type="submit" class="registerbtn">Checkout</button>

  </div>

</form> 
  <a href="change_pass.php">Change Password</a>
    </body>
</html>
<?php 
    include("../includes/config.php");
    session_start();
    $username=$_SESSION['id'];
    $query="SELECT * FROM bookings WHERE id='$username'";
    $result=mysqli_query($con,$query);
    $row=$result->fetch_assoc();
    $query1="SELECT * FROM login WHERE uid='$username'";
    $result1=mysqli_query($con,$query1);
    $row1=$result1->fetch_assoc();
?>
<html>
    <head>
    <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <h1>Rajiv Gandhi university of knowledge Technologies Srikakulam</h1>
        <h2>PAYMENT RECIPT</h2>
        <br><br>
        <div class="rec">
        <table>
            <tr>
                <th>Order Id</th>
                <td><?php echo $row['ordid']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $row1['name']; ?></php></td>
            </tr>
            <tr>
                <th>Student Id</th>
                <td><?php echo $username; ?></php></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?php echo $row['location']; ?></td>
            </tr>
            <tr>
                <th>Amount paid</th>
                <td><?php echo $row['amount']; ?></td>
            </tr>
          </table>
        </div>
        <br><br>
          <button onclick="window.print()">Print Receipt</button>

    </body>
</html>
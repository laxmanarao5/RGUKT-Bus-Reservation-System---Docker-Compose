<?php
    include("../includes/config.php");
    session_start();
    $date1=date("Y-m-d");
if(isset($_SESSION['lux123']))
{
?>
<html>
    <head>
        <link rel="stylesheet" href="dash1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
   <!-- <div class="logo">
      <h1 class="heading">Bus Reservation System</h1>
      
    </div>-->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RGUKT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="open_bookings.php">Open Bookings</a></li>
        <li><a href="add_students.php">Add students</a></li>
        <li><a href="users.php">Participants</a></li>
        <li><a href="change_info.php">Change_Location</a></li>
        <li><a href="get_info.php">Bookings_Data</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Statistics <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php">Change Password</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="not_book" style="visibility:hidden;"><h1>Bookings not at opened </h1></div>
<div class="content">
          <h1>Booking Done Today<h1>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Student Id</th>
            <th scope="col">Amount</th>
            <th scope="col">Location</th>
            <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $count=0;
            $query="SELECT * FROM bookings WHERE Date='$date1';";
            $result=mysqli_query($con,$query);
            while($temp=$result->fetch_assoc())
            {
                $count++;
              ?>
              <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $temp['id'];?></td>
                <td><?php echo $temp['amount'];?></td>
                <td><?php echo $temp['location'];?></td>
                <td><?php echo $temp['Time'];?></td>
                
              </tr>
            <?php
            }
          ?>
          </tbody>
            </table>
            <div style="height:40px;">
              
            </div>
            <h1>All Bookings<h1>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Student Id</th>
            <th scope="col">Amount</th>
            <th scope="col">Location</th>
            <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $count=0;
            $query1="SELECT * FROM login WHERE uid='admin';";
		        $result1=mysqli_query($con,$query1);
		        $row1= $result1->fetch_assoc();
		        $occ=$row1['name'];
            $query="SELECT * FROM bookings WHERE Occasion='$occ';";
            $result=mysqli_query($con,$query);
            while($temp=$result->fetch_assoc())
            {
              $id1=$temp['id'];
              $query1="SELECT * FROM login WHERE uid='$id1';";
              $result1=mysqli_query($con,$query1);
              $temp1=$result1->fetch_assoc();
                $count++;
              ?>
              <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $temp['id'];?></td>
                <td><?php echo $temp['amount'];?></td>
                <td><?php echo $temp1['location'];?></td>
                <td><?php echo $temp['Time'];?></td>
              </tr>
            <?php
            }
          ?>
          </tbody>
            </table>
        </div>
    </div>
    <script>
      if(<?php 
              $result=mysqli_query($con,"SELECT * FROM login WHERE uid='admin'");
              $row=$result->fetch_assoc();
                echo $row['location']; ?>=='0')
        {
          document.querySelector(".content").style.visibility="hidden";
          document.querySelector(".not_book").style.visibility="visible";
        }
      </script>
    </body>
</html>
<?php
}
else{
  echo "<h1>Session Expired Redirecting to Home page</h1>";
  echo "<h1>Login again to continue</h1>";
}
?>

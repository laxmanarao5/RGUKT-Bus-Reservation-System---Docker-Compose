<?php
    include("../includes/config.php");
    $query="SELECT DISTINCT(Occasion) FROM `bookings`;";
    $result=mysqli_query($con,$query);
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
        <li><a href="dash1.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="open_bookings.php">Open Bookings</a></li>
        <li><a href="add_students.php">Add students</a></li>
        <li><a href="users.php">Participants</a></li>
        <li><a href="change_info.php">Change_Location</a></li>
        <li class="active"><a href="get_info.php">Bookings_Data</a></li>
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
        <div class="form_data" style="position: relative;left:300px;">
         <form action="get_info.php" method="POST">
         <br>
          <select class="opt" name="occ" style="width:300px;height:30px;">
            <?php
                while($row1=$result->fetch_assoc())
                {?>
                  <option value=<?php echo $row1['Occasion']; ?>> <b style="font-size:30px;"><?php echo $row1['Occasion'];?> </b></option>
                <?php
                    }
                ?>
            </select>
            <br>
            <br>
            <button>Get Data</button>
         </form>
        </div>
            <div style="height:40px;">
              
            </div>
            <?php 
            if(isset($_POST['occ']))
            {
            $occ=$_POST['occ'];
            $query="SELECT * FROM bookings WHERE Occasion='$occ'";
            $result=mysqli_query($con,$query);
            $row=$result->fetch_assoc();

                ?>
            <h1>Bookings of <?php echo $occ;?><h1>
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
        <?php
        }
        ?>
        </div>
    </div>
    </body>
</html>
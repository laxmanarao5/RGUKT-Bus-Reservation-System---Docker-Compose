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
        <li ><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="open_bookings.php">Open Bookings</a></li>
        <li><a href="add_students.php">Add students</a></li>
        <li><a href="users.php">Participants</a></li>
        <li class="active"><a href="change_info.php">Change_Location</a></li>
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
<div class="content" >
    <div class="form_data" style="position: relative;left:300px;">
         <form action="change_info.php" method="POST">
          <br><br>
            <input type="text" name="id" placeholder="Enter Student Id">
            <br>
            <br>
            <button>Search</button>
         </form>
        </div>
    </div>
    <div>
        <?php 
            if(isset($_POST['id']))
            {
            $id=$_POST['id'];
            $query="SELECT * FROM login WHERE uid='$id'";
            $result=mysqli_query($con,$query);
            $row=$result->fetch_assoc();

                ?>

        <div style="position: relative;left:300px;">
        <br><br>
        <h3 style="text-align:centre">Student Details</h3>
        <br><br>
            <form action="updates.php" method="POST">
            <label for="psw"><b>Sudent Id</b></label>
            <input type="text" name="std_id" value="<?php echo $row['uid'];?>" id="psw" required readonly>
            <br><br>
            <label for="email"><b>Email</b></label>
            <input type="text" value="<?php echo $row['uid'].'@rguktsklm.ac.in'; ?>" name="email" id="email" required readonly>
            <br><br>
            <label for="psw"><b>Destination</b></label>
            <input type="text" value="<?php echo $row['location']; ?>" name="location1" id="email" required readonly>
            <br><br>
            <label for="psw"><b>Select Location</b></label>
            <select class="opt" name="loc" >
            <?php
                $query1="SELECT * FROM places;";
                $result1=mysqli_query($con,$query1);
                while($row1=$result1->fetch_assoc())
                {?>
                  <option value=<?php echo $row1['pname']; ?>> <b style="font-size:30px;"><?php echo $row1['pname'];?> </b></option>
                <?php
                    }
                ?>
            </select>
            <br><br>
            <button>Update Info</button>
            </form>
        </div>  
        <?php
            }
        ?>
    </div>
</div>
    </body>
</html>
<?php
}
else{
  echo "<h1>Session Expired Redirecting to Home page</h1>";
  echo "<h1>Login again to continue</h1>";
}
?>
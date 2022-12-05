<?php
    include("../includes/config.php");
    session_start();
    $date1=date("Y-m-d");
    if(isset($_SESSION['lux123']))
{
?>
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
        <li><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="open_bookings.php">Open Bookings</a></li>
        <li class="active"><a href="add_students.php">Add students</a></li>
        <li><a href="users.php">Participants</a></li>
        <li><a href="change_info.php">Change_Location</a></li>
        <li><a href="get_info.php">Bookings_Data</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php">Change Password</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../index.php">Logout</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>-->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="content">
        <div class="page-header">
            <h1>Add Students to Log In Database </h1>
        </div>
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post" action="add_stud.php" enctype="multipart/form-data">
                    <input id="text_field" type="text" name="dpass" placeholder="Enter Default Password">
                    <br><br>  
                <input id="file_choose" type="file" id="files" name="files" multiple="multiple" />
                    <br>
                    <br>
                    <p id="sub_btn">
                        <input type="submit" value="Upload File" class="btn btn-lg btn-primary" />
                    </p>
                </form>
            </div>
            <div class="col-md-4"></div>
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
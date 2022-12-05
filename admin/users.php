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
        <li><a href="dash1.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="open_bookings.php">Open Bookings</a></li>
        <li><a href="add_students.php">Add students</a></li>
        <li  class="active"><a href="users.php">Participants</a></li>
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
<div class="content">
          <h1>Students List<h1>
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Student Id</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
            $count=0;
            $query="SELECT * FROM login WHERE type='student';";
            $result=mysqli_query($con,$query);
            while($temp=$result->fetch_assoc())
            {
                $count++;
              ?>
              <tr>
                <th scope="row"><?php echo $count;?></th>
                <td><?php echo $temp['uid'];?></td>
                <td><?php echo $temp['name'];?></td>
                <td><?php echo $temp['location'];?></td>
                <td>
                <a href="reset.php?id=<?php echo $temp['uid'];?>"><button style="background:green"><i class="fa fa-edit" style="color:black">Reset Password</i></button></a>

                <a href="del1.php?id=<?php echo $temp['uid'];?>"><button type="submit" class="delete_button">
              
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>  Delete
          </button></a>
                </td>
              </tr>
            <?php
            }
          ?>
          </tbody>
            </table>
            <div style="height:40px;">
              
            </div>
        </div>
    </div>
   <!-- <script>
      if(<?php 
              $result=mysqli_query($con,"SELECT * FROM login WHERE uid='admin'");
              while($row=$result->fetch_assoc())
              {
                echo $row['location'];
              }
            ?>=='1')
            {
              document.querySelector(".content:not(.close)").style.visibility="hidden";
        document.querySelector(".close").style.visibility="visible";
            }
          else
          {
            document.querySelector(".close").style.visibility="hidden";
          }
      let x= document.getElementById("add1");
      let y=document.querySelector("body:not(.adding)");
      function openpopup()
      {
        //y.style.visibility="collapse";
        y.style.visibility="hidden";
        x.style.visibility="visible";
        x.style.opacity="0.9";
      }
      function edit()
      {
        document.getElementByClasss("inp1").style.visibility="visible";
        document.getElementByClass("edit_form").style.visibility="visible";
        document.querySelector(":not(.edit_form)").style.visibility="hidden";
      }
      function opened()
      {
        
      }
    </script>-->
    </body>
</html>
<?php
}
else{
  echo "<h1>Session Expired Redirecting to Home page</h1>";
  echo "<h1>Login again to continue</h1>";
}
?>
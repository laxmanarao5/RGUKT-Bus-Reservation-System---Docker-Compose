<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RGUKT Bus Reservation System</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="main">
		<div class="navbar">
			<div class="logo">
				<h2>RGUKT BUS RESERVATION SYSTEM</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#" style="color: orange;">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">CONTACT US</a></li>
				</ul>
			</div> 
			<div style="height: 400px;width:800px;" id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	<div class="item active">
        <img src="images/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="images/rgukt.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/rguktskl.jpg" alt="Chicago" style="width:100%;">
      </div>S
      <div class="item">
        <img src="images/2.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/5.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/6.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
			<div class="log_temp">
				<form action="login.php" method="POST">
					<h2 style="color:white;position:relative;left:20px;">Login Here</h2>
					<div style="width:10px;height:30px;"></div>
					<input style="color:white;" type="text" name="id" placeholder="University ID" required >
					<div style="width:10px;height:30px;"></div>
					<input style="color:white;" type="password" name="password" placeholder="Enter Password" required>
					<button class="btn" ><a>Login</a></button>
				</form>
				<br>
				<!--<a href="student/signup.php" ><b class="signup">Sign Up</b></a>-->
			</div>
		</div>
	</div>
</body>
</html>

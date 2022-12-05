<html>
<head>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="signup">
    <form action="signup1.php" style="border:1px solid #ccc" method="POST">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="id"><b>College Id</b></label>
        <input type="text" placeholder="Enter your ID " name="id" required>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter your Name " name="name" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw2" required>

        <label for="location"><b>Destination</b></label>
        <br><br>
        <select class="opt" name="location" >
        <?php
        include("../includes/config.php");
        $query="SELECT * FROM places;";
        $result=mysqli_query($con,$query);
        while($row=$result->fetch_assoc())
        {?>
            <option value=<?php echo $row['pname']?>> <b style="font-size:30px;"><?php echo $row['pname']?> </b></option>
        <?php
        }
        ?>
        </select>
        <br>

        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </form>
    </div> 
</body>
</html>
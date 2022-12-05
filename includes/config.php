<?php
define('DB_SERVER','db');
define('DB_USER','root');
define('DB_PASS' ,'laxman');
define('DB_NAME', 'bus');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "There is a problem at our end Please try after some time: " . mysqli_connect_error();
 }

?>
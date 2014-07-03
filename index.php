<?php
require 'connect.php';
require 'core.php';
require 'register.php';
if(isset($_SESSION['user_id']))
{
echo '<center>You\'re logged in <a href="upload.php">Upload your image</a> <br><button type="button"><a href="logout.php">Log out</a></button></center>';
}
else
{
include 'loginform.php';
}


?>
<link rel="stylesheet" href="design.css">


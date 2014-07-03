<?php
require 'core.php';
require 'connect.php';
if(!isset($_SESSION['user_id']))  {

if(isset($_POST['name'])&&isset($_POST['rollno'])&&isset($_POST['dept'])&&isset($_POST['sex'])&&isset($_POST['pass'])&&isset($_POST['repass'])&&isset($_POST['regsubmit']))
{
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$dept = $_POST['dept'];
$sex = $_POST['sex'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

if(!empty($name)&&!empty($rollno)&&!empty($dept)&&!empty($sex)&&!empty($pass)&&!empty($repass))
{
	if ($pass!=$repass)
	{echo'Passwords do not match';}
	else
	{
	$query = "INSERT INTO `register` VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($rollno)."','".mysql_real_escape_string($dept)."','".mysql_real_escape_string($sex)."','".mysql_real_escape_string($pass)."','".mysql_real_escape_string($repass)."');";
	if ($query_run = mysql_query($query)){
	header('Location: regsuccess.php');
	}
	else {
	echo 'Sorry, we could not register you at this time. Try again later..';
	}
}
}
else 
{
echo 'All fields are required.';
}
}



?>
<body>
<div id="reg">
<h2>CREATE AN ACCOUNT</h2>
<fieldset>
<legend>Register</legend>
<form action="register.php" method="POST">
<label>Name : </label><input type = "text" name = "name" placeholder = "Name">
			<br>
			<label>Roll no. : </label><input type = "text" name="rollno" placeholder = "9 digit roll no." >
			<br>
			<label>Department : </label>
			<select name="dept" value="<?php echo $dept;?>">
			  
			  <option value="chem">CHEM</option>
			  <option value="civ">CIV</option>
			  <option value="cse">CSE</option>
			  <option value="ece">ECE</option>
			  <option value="eee">EEE</option>
			  <option value="ice">ICE</option>
			  <option value="mech">MECH</option>
			  <option value="meta">META</option>
			  <option value="prod">PROD</option>
			</select><br>
			<label>Sex : </label><input type="radio" name="sex" value="m">Male
								<input type="radio" name="sex" value="f">Female
								<br>
			<label>Password : </label><input type = "password" name = "pass" placeholder = "Password">
			<br>
			<label>Confirm Password : </label><input type = "password" name = "repass" placeholder = "Retype Password">
			<br><br>
			<label></label>
			<label></label><input type = "submit" name="regsubmit" value = "Register">

</form>
</fieldset>
</div>
</body>
<?php
}

?>
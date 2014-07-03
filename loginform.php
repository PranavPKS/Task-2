<?php

if(isset($_POST['rno'])&&isset($_POST['pass']))
{
$rollno = $_POST['rno'];
$password = $_POST['pass'];
	if(!empty($rollno)&&!empty($password))
	{
	$query = "SELECT `id` FROM `register` WHERE `roll_no` ='$rollno' AND `password` ='$password';";
	if($query_run = mysql_query($query))
	{
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0)
		{echo 'Invalid Rollno and Password combination'; 
		}
	else if($query_num_rows==1)
		{$user_id = mysql_result($query_run,0,'id');
		 
		 $_SESSION['user_id'] = $user_id;
		 $_SESSION['rollno'] = $rollno;
		 header('Location: index.php');
		
		}
	}
	
	}
}

?>
<body>
<div id="login">
<center><img src="images/logo.png" id="logo"><br><br><br><br>
<h2>LOG IN FOR FUN</h2>
<form action="<?php echo $current_file; ?>" method="POST">
<fieldset id="log" style="width: 350px;">
<legend>Sign in</legend>
<LABEL>Roll no:</LABEL>
			&nbsp;&nbsp;&nbsp;<input type = "text" name = "rno" placeholder = "Roll number">
			<br>
			<LABEL>Password:</LABEL>
			<input type = "password" name = "pass" placeholder = "Password">
			<br><br>
			
			<input type = "submit" value = "Login">
</fieldset>
</form>
</center>
</div>
</body>
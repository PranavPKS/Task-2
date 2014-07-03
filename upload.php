<?php
require 'connect.php';
session_start();
$fname = $_FILES['file']['name'];
$ext = strtolower(substr($fname, strpos($fname,'.') + 1));
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];

$tmp_name = $_FILES['file']['tmp_name'];
$max_size = 2097152;
$location = 'uploads/';
if(isset($_SESSION['user_id']))
{
if(isset($fname)&&!empty($fname))
{
if (($ext=='jpg'||$ext=='jpeg'||$ext=='png') && $type=='image/jpeg' && $size<=$max_size)
	{
		move_uploaded_file($tmp_name,$location.$_SESSION['rollno'].'.png')
			  or die('There was an Error');
		echo "File uploaded successfully";
	}
else{
	  echo 'File must be jpg/jpeg/png and must be 2mb or less..';
	}
}
	
else{
echo 'Please choose a file...';
}

}
?>
<body>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr(<?php echo $tmp_name; ?>, e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<link rel="stylesheet" href="design.css">
<center>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name ="file" onchange="readURL(this);" >
    <img id="blah" src="<?php echo $tmp_name; ?>" alt="your image" ><br><br>
	<input type="submit" value="Submit">
</form>
<br>
<button type="button"><a href="logout.php">Log out</a></button></center>
</body>
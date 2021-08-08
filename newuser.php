<table border="1" width="100%" cellpadding="10">
	<tr>
		<td rowspan="3" width="500">
		<form method="post" enctype="multipart/form-data">
		Full Name <input type="text" name="fname"/><br><br>
		Email <input type="text" name="email"/><br><br>
		Contact Number <input type="text" name="con"/><br><br>
		<input type="submit" name="sub">
		</form>
		</td>
		<td><a href="upload-file.php">File Upload</a></td>
	</tr>
	<tr>
		<td><a href="userdet.php">Users Details</a></td>
	</tr>
	<tr>
		<td><a href="newuser.php">New User</a></td>
	</tr>
</table>
<?php
include("connect.php");
if(isset($_POST['sub'])){
	$name = $_POST['fname'];
	$email = $_POST['email'];
	$contnum = $_POST['con'];
	
	mysqli_query($con,"insert into user (name,email,contnum)values('$name','$email','$contnum')");
	
	echo "<script>alert('Insert Details Successfully')</script>";
}
?>
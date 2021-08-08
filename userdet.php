<table border="1" width="100%" cellpadding="10">
	<tr>
		<td rowspan="3">
		<table border="1" width="100%">
			<tr>
				<td>
					Name
				</td>
				<td>
					Email
				</td>
				<td>
					Contact Number
				</td>
			</tr>
<?php
include("connect.php");
$query = mysqli_query($con,"select * from user");
while($row=mysqli_fetch_assoc($query)){
?>
			<tr>
				<td>
					<?php echo $row['name'] ?>
				</td>
				<td>
					<?php echo $row['email'] ?>
				</td>
				<td>
					<?php echo $row['contnum'] ?>
				</td>
			</tr>
<?php } ?>
		</table>
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
	$filename = $_FILES['files']['name'];
	$tmpname = $_FILES['files']['tmp_name'];
	if($_FILES['files']['type']=="image/jpeg" || $_FILES['files']['type']=="image/png"){
	move_uploaded_file($tmpname,"upload/$filename");
	mysqli_query($con,"insert into fileupload (upload)values('$filename')");
	echo "<script>alert('Image Upload Successully')</script>";
	}
	else{
		echo "<script>alert('Wrong Format')</script>";
	}
}
?>
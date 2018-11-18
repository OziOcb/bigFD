<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);

	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$msg = mysqli_real_escape_string($conn, $_POST['message']);

	// checking empty fields
	if(empty($firstname) || empty($lastname) || empty($email) || empty($msg)) {

		if(empty($firstname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($lastname)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($msg)) {
			echo "<font color='red'>Message field is empty.</font><br/>";
		}

	} else {
		//updating the table
		$result = mysqli_query($conn, "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',message='$msg' WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['email'];
	$msg = $res['message'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="edit.php" method="post" name="form1" >
		<table border="0">
			<tr>
				<td>Firstname</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr>
				<td>Lastname</td>
				<td><input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea type="text" name="message"><?php echo $msg;?></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><button type="submit" name="update">Update</button></td>
			</tr>
		</table>
	</form>
</body>
</html>

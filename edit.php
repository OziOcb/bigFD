<?php
	// including the database connection file
	include_once("config.php");

	if(isset($_POST['update'])) {

		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$msg = mysqli_real_escape_string($conn, $_POST['message']);

		// checking empty fields
		if(empty($firstname) || empty($lastname) || empty($email) || empty($msg)) {

			if(empty($firstname)) {
				echo "<p class='error'>Name field is empty.</p><br/>";
			}

			if(empty($lastname)) {
				echo "<p class='error'>Age field is empty.</p><br/>";
			}

			if(empty($email)) {
				echo "<p class='error'>Email field is empty.</p><br/>";
			}

			if(empty($msg)) {
				echo "<p class='error'>Message field is empty.</p><br/>";
			}

		} else {
			//updating the table
			$result = mysqli_query($conn, "UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email',message='$msg' WHERE id=$id");

			//redirectig to the display page (index.php)
			header("Location: index.php");
		}
	}
?>

<?php
	//getting id from url
	$id = $_GET['id'];

	//selecting data associated with this particular id
	$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

	while($res = mysqli_fetch_array($result)) {
		$firstname = $res['firstname'];
		$lastname = $res['lastname'];
		$email = $res['email'];
		$msg = $res['message'];
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Data</title>
	<link rel="stylesheet" href="style.css">
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

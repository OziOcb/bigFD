<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	//including the database connection file
	include_once("config.php");

		if(isset($_POST['Submit'])) {
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

				//link to the previous page
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
				exit();

			} else {
				// if all the fields are filled (not empty)

				//insert data to database
				$result = mysqli_query($conn, "INSERT INTO users(firstname,lastname,email,message) VALUES('$firstname','$lastname','$email','$msg')");

				//display success message
				echo "<font class='success'>Data added successfully.";
				echo "<br/><a href='index.php'>View Result</a>";
				exit();
			}
		}
	?>
</body>
</html>
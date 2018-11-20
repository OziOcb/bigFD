<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add Data</title>

	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container p-0 p-sm-2 bg-light text-center">

		<!-- ──── Header ───────────────────────────────────────────────────────────────────────────── -->
		<header class="header jumbotron">
			<h1 class="header__title">Junior PHP Developer Task</h1>
		</header>

		<?php
		// Include the database connection file
		include_once("includes/dbh.inc.php");

			if(isset($_POST['Submit'])) {
				$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
				$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
				$email = mysqli_real_escape_string($conn, $_POST['email']);
				$msg = mysqli_real_escape_string($conn, $_POST['message']);

				// Check empty input fields
				if(empty($firstname) || empty($lastname) || empty($email) || empty($msg)) {

					if(empty($firstname)) {
						echo "<h2 class='error'>Name field is empty.</h2><br/>";
					}

					if(empty($lastname)) {
						echo "<h2 class='error'>Age field is empty.</h2><br/>";
					}

					if(empty($email)) {
						echo "<h2 class='error'>Email field is empty.</h2><br/>";
					}

					if(empty($msg)) {
						echo "<h2 class='error'>Message field is empty.</h2><br/>";
					}

					// Link to the previous page
					echo "<br/><a class='button button--primary btn' href='javascript:self.history.back();'>Go Back</a>";
					exit();

				} else {

					// If all the input fields are filled (not empty)
					// Check if the email is valid
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

						echo "<h2 class='error'>Email address is invalid.</h2><br/>";
						// Link to the previous page
						echo "<br/><a class='button button--primary btn' href='javascript:self.history.back();'>Go Back</a>";
						exit();

					} else {

						// Insert data to database
						$result = mysqli_query($conn, "INSERT INTO users(firstname,lastname,email,message) VALUES('$firstname','$lastname','$email','$msg')");
						// Display success message
						echo "<h2 class='success'>Data added successfully.</h2>";
						echo "<br/><a class='button button--primary btn' href='index.php'>View Result</a>";
						exit();
					}
				}
			}
		?>
	</div>
</body>
</html>
<?php
//including the database connection file
include_once("includes/dbh.inc.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Homepage</title>

	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container pb-2">

		<!-- Header -->
		<header class="jumbotron text-light text-center">
			<h1 class="display-4 mb-3">Junior PHP Developer Task</h1>
			<p class="lead">MySQL Display</p>
			<p class="my-5">This page displays all submissions made to the MySQL database.</p>
			<a class="btn btn-success btn-lg" href="add.html" role="button">Add New Data</a>
		</header>

		<!-- Table -->
		<section class="table-responsive">
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Firstname</th>
						<th scope="col">Lastname</th>
						<th scope="col">Email</th>
						<th scope="col">Message</th>
						<th scope="col">Update</th>
					</tr>
				</thead>
				<tbody>

					<?php
						while($res = mysqli_fetch_array($result)) {
							echo "<tr>";
							echo "<th scope='row'>".$res['firstname']."</th>";
							echo "<td>".$res['lastname']."</td>";
							echo "<td>".$res['email']."</td>";
							echo "<td>".$res['message']."</td>";
							echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"includes/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						}
					?>
				</tbody>
			</table>
		</section>
	</div>

	<!-- Bootstrap JS & JQuery -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
</body>
</html>
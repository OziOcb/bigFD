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
	<div class="container p-0 p-sm-2 bg-light">

		<!-- ──── Header ───────────────────────────────────────────────────────────────────────────── -->
		<header class="header jumbotron">
			<h1 class="header__title">Junior PHP Developer Task</h1>
			<div class="header__desc">
				<p>MySQL Display</p>
				<p>This page displays all submissions made to the MySQL database.</p>
			</div>
			<a class="button button--primary btn" href="add.html" role="button">Add New Data</a>
		</header>

		<!-- ──── Table ───────────────────────────────────────────────────────────────────────────── -->
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

					<!-- PHP code that displays values from the databese -->
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
</body>
</html>
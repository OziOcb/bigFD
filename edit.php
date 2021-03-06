<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Data</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container p-0 p-sm-2 bg-light text-center">

		<!-- ──── Header ───────────────────────────────────────────────────────────────────────────── -->
		<header class="header jumbotron">
			<h1 class="header__title">Edit Data</h1>
			<a class="button button--danger btn" href="index.php">Cancel</a>
		</header>

		<!-- ──── Form ───────────────────────────────────────────────────────────────────────────── -->
		<!-- Display values already passed to the database -->
		<?php
			// Include the database connection file
			include_once("includes/dbh.inc.php");

			// Get id from url
			$id = $_GET['id'];

			// Select data associated with this particular id
			$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

			while($res = mysqli_fetch_array($result)) {
				$firstname = $res['firstname'];
				$lastname = $res['lastname'];
				$email = $res['email'];
				$msg = $res['message'];
			}
		?>

		<section class="wrapper">
			<form class="form" action="editCheck.php" method="post" name="form1">

				<!-- Firstname -->
				<div class="form__group form-group">
					<label class="sr-only" for="reg-form__firstname">Firstname</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input__group-text input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
						<input name="firstname" class="input__input form-control" type="text" id="reg-form__firstname" aria-describedby="user firstname" placeholder="Firstname" required="required" value="<?php echo $firstname;?>"/>
					</div>
				</div>

				<!-- Lastname -->
				<div class="form__group form-group">
					<label class="sr-only" for="reg-form__lastname">Lastname</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input__group-text input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
						<input name="lastname" class="input__input form-control" type="text" id="reg-form__lastname" aria-describedby="user lastname" placeholder="Lastname" required="required" value="<?php echo $lastname;?>"/>
					</div>
				</div>

				<!-- Email -->
				<div class="form__group form-group">
					<label class="sr-only" for="reg-form__email">Email</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input__group-text input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
						<input name="email" class="input__input form-control" type="email" id="reg-form__email" aria-describedby="user email" placeholder="Email" required="required" value="<?php echo $email;?>"/>
					</div>
				</div>

				<!-- Message -->
				<div class="form__group form-group">
					<label class="sr-only" for="reg-form__email">Message</label>
					<textarea name="message" class="input__input form-control" type="text" id="reg-form__email" aria-describedby="your message" placeholder="Your message" rows="6" required="required"/><?php echo $msg;?></textarea>
				</div>

				<!-- Submit Button -->
				<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<button name="update" class="form__btn btn" type="submit">Update</button>

			</form>
		</section>
	</div>
</body>
</html>
<?php
//including the database connection file
include("dbh.inc.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php)
header("Location: ../index.php");
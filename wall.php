<?php 
session_start();
require_once('connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>The Wall</title>
</head>
<body>
	<h1>Coding Dojo Wall</h1>
	<h2>Welcome, <?= $_SESSION['first_name']; ?>!</h2>
	<button>Log off</button>
	<div>
		<h3>Post Message:</h3>
		<form action="mess_process.php" method="post">
			<input type="textarea" name="content">
			<input type="submit" value="Post a message">
		</form>
	</div>
	<div>

	</div>	

</body>
</html>

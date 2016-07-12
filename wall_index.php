<?php
session_start();
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Wall</title>
	<style type="text/css">
		#container{
			height:400px;
			width:400px;
			text-align:center;
			margin:0px auto;
			padding:20px;
		}
		.button{
			height:20px;
			width:50px;
			border:1px solid black;
			padding:;
			background-color:#cceeff;
			margin:5px;
		}
		.button:hover{
			background-color:white;
		}
		.green{
			background-color:pink;
			border:1px solid red;
			color:red;
			padding:5px;
		}
	</style>
</head>
<body>
	<div id="container">
	<h3>Login</h3>
	<form action="login_process.php" method="post">
		<table>
				<td>E-mail:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input class="button" type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		<div id="register">
			<h3>New Users:</h3>
			<form action="registration.php" method="post">
				<input class="button" type="submit" name="register" value="Register">
			</form>
		</div>
	</form>

	</div>
</body>
</html>
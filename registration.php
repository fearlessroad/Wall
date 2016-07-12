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
			width:0px;
			border:1px solid black;
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
	<h3>Register</h3>
	<form action="reg_process.php" method="post">
		<table>
				<td>First Name:</td>
				<td><input type="text" name="first_name"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="last_name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="password_ver"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="button" type="submit" name="submit" value="Register!"></td>
			</tr>
		</table>

	</form>
		<div id="errors">
<?php
			if(isset($_SESSION['error'])){
				echo $_SESSION['error'];
				unset($_SESSION['error']);
			}
?>
		</div>
	</div>
</body>
</html>
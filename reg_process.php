<?php
session_start();
require_once('connection.php');

if (isset($_POST['email'])){

		
		 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)=== false){

			$_SESSION['error'] = "<div class='green'><p>Do you even know what an email address is?</p></div>";
			header("Location: registration.php");

		} if ($_POST['password'] != $_POST['password_ver']){
			$_SESSION['error'] = "<div class='green'><p>You $^@&, do you even know what you just typed...</p></div>";	

			header("Location: registration.php");

		}

	else{
	$query = "INSERT INTO users (first_name, last_name, email, password, updated_at, created_at) 
VALUES ('{$_POST["first_name"]}','{$_POST["last_name"]}', '{$_POST["email"]}','{$_POST["password"]}', NOW(), NOW())";
	run_mysql_query($query);


	header('Location: wall_index.php');
	}
}
?>
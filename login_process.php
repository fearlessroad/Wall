<?php
session_start();
require_once('connection.php');

$query = "SELECT * FROM users
			WHERE users.email = '{$_POST['email']}'
			AND users.password = '{$_POST['password']}'"; 
        
$users = fetch_all($query);

        if(count($users) > 0){
            $_SESSION['user_id'] = $users[0]['id'];
            $_SESSION['first_name'] = $users[0]['first_name'];
            $_SESSION['logged_in'] = true;
            header('Location: wall.php');
        } else{
            $_SESSION['errors'] = "We can't find a user with those credentials. Please enter a valid email and password.";
            header('Location: wall_index.php');
            die();
         }

//{






/*--- if (isset($_POST['email'])){

		
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
} --*/
?>
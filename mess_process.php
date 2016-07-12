	<?php
	session_start(); 
	require_once('connection.php');

	$query = "INSERT INTO messages (message_text, created_at) VALUES ('{$_POST["content"]}', NOW())";

	// $messages = fetch_all($query);

	// foreach($messages as $message){

	// }

	?>
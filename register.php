<?php
	//Connects to the SQLITE3 local database
	$database = new SQLite3('maia.db');

	if(!$database) {
		echo "Not connected to DB";
	}

	// Retrieves the input from signup.php
	$_SESSION['registerName'] = $_POST['registerName'];
	$_SESSION['registerEmail'] = $_POST['registerEmail'];
	$_SESSION['registerType'] = $_POST['registerType'];

	// Inserts the inputs above into the database in SQL query form
	$query= "INSERT INTO user(u_name, u_type, u_email) VALUES('{$_SESSION['registerName']}', '{$_SESSION['registerType']}', '{$_SESSION['registerEmail']}')";
	$statement = $database->prepare($query);
	$result = $statement->execute();
	
	// After execution of the SQL query, head to signupsuccess.php
	header("Location: signupsuccess.php");
?>
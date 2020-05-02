<?php
	// Session is a global function that uses global variables across the files for inputs
	// Look below for $_SESSION
	//Connects to the SQLITE3 local database
	$database = new SQLite3('maia.db');
	if(!$database) {
		echo "Not connected to DB";
	}

	// The $_POST variables are retrieved from adduser.php for SQL purposes
	$_SESSION['registerName'] = $_POST['registerName'];
	$_SESSION['registerEmail'] = $_POST['registerEmail'];
	$_SESSION['registerType'] = $_POST['registerType'];

	// Executes the SQL query to insert data into the database
	$query= "INSERT INTO user(u_name, u_type, u_email) VALUES('{$_SESSION['registerName']}', '{$_SESSION['registerType']}', '{$_SESSION['registerEmail']}')";
	$statement = $database->prepare($query);
	$result = $statement->execute();
	
	// After the execution of the query. Transition to addsuccess.php
	header("Location: addsuccess.php");
?>
<?php
	//Connects to the SQLITE3 local database
	$database = new SQLite3('maia.db');

	if(!$database) {
		echo "Not connected to DB";
	}

	// The $_POST variables are retrieved from deleteuser.php for SQL purposes
	$_SESSION['deleteName'] = $_POST['deleteName'];
	$_SESSION['deleteEmail'] = $_POST['deleteEmail'];

	// Executes the query that deletes the User based on the information entered from the database
	$query= "DELETE FROM user WHERE u_name = '{$_SESSION['deleteName']}' AND u_email = '{$_SESSION['deleteEmail']}'";
	$statement = $database->prepare($query);
	$result = $statement->execute();
	
	// After the execution of the query. Transition to deletesuccess.php
	header("Location: deletesuccess.php");
?>
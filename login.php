<?php
//Connects to the SQLITE3 local database
session_start();
$database = new SQLite3('maia.db');
if(!$database) {
	echo "Not connected to DB";
}

// Takes in the email entered from the log in page
$_SESSION['user_email'] = $_POST['userEmail'];

// Sets the variable to store the user type
$_SESSION['s'] = 'RESET';

//PHP form of the SQL query where we retrieve the user name submitted in log in
$query= "SELECT u_uid, u_name, u_type, u_email FROM user WHERE u_email = '{$_SESSION['user_email']}'";
$statement = $database->prepare($query);
$result = $statement->execute();
//fetches the data from the database
while($row = $result->fetchArray(SQLITE3_ASSOC)) {
	$_SESSION['s'] = $row['u_type'];
	$_SESSION['user_id'] = $row['u_uid'];
	$_SESSION['user_email'] = $row['u_email'];
	$_SESSION['user_name'] = $row['u_name'];
}

//checks what is the user type of the person loggin in and redirecting to different pages
if($_SESSION['s'] == 'ADMIN') { //page if ADMIN
	header("Location: admin.php");
}
else if($_SESSION['s'] == 'USER'){ //page if USER
	header("Location: interface.php");
}
else if($_SESSION['s'] == 'RESET'){ //page if neither
	header("Location: error.php");	
}

?>
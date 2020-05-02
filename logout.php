<?php include('header.php');
//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database

if(!$database) {
	die("Not connected to database"); // give out error that database is not connected.
}
?>

<!-- This is the image in the front cover-->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<!-- Confirmation message that the user has logged out -->
<center>
	<br><br><br><br>
	<h2>
		Thank you, you have successfully logged out.
	</h2>
	<br><br><br>
</center>

<!-- Button to relog in -->
<form action = "index.php" method = "POST">
    <center>
    	<button type="submit" class="btn btn-primary" name = "submit">Log-In Again</button>
    </center>
</form>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
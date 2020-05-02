<?php include('header.php'); ?>

<!-- This is the image in the front cover-->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<!-- Confirmation message after adding a new user -->
<center>
	<br><br><br><br>
	<h2>
		You have successfully added a new user. You may now return to the home page.
	</h2>
	<br><br><br>
</center>

<!-- Return to Home button. It transitions to admin.php -->
<form action = "admin.php">
    <center>
    	<button type="submit" class="btn btn-primary" name = "submit">Return to Home</button>
    </center>
</form>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
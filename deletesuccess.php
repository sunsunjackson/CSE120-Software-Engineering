<?php include('header.php'); ?>

<!-- This is the image in the front cover-->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<!-- Confirmation message after deleting an user -->
<center>
	<br><br><br><br>
	<h2>
		You have successfully removed the entered user. You may now return to the home page.
	</h2>
	<br><br><br>
</center>

<!-- The button transitions back to admin.php(the home page) -->
<form action = "admin.php">
    <center>
    	<button type="submit" class="btn btn-primary" name = "submit">Return to Home</button>
    </center>
</form>

<?php include('disconnect.php'); ?>
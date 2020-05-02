<?php
include('header.php');
?>

<!-- This is the image in the front cover-->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<!-- Confirmation message that the user has successfully registered -->
<center>
	<br><br><br><br>
	<h2>
		You have successfully registered your email. Please log in with your account below.
	</h2>
	<br><br><br>
</center>

<!-- Options to sign in -->
<form action = "index.php" method = "POST">
    <center>
    	<button type="submit" class="btn btn-primary" name = "submit">Log-In</button>
    </center>
</form>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
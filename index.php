<?php
include('header.php');
?>

<!-- This is for Title of the webpage-->
<title > Maia</title>

	<!-- This is the image in the front cover-->
	<div class="blueimg">
	 	<h1 class="top-left">Maia</h1>
	 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
	</div>
	
	<!-- These are for title in the webpage once we login-->
	<section class = "home">
		<br><br><br>
		  <center><h1> Maia</h1></center>
		  <center><h4>Best Practice, most efficient</h4></center>
		<br>
	</section>

<!-- This is the log in using the user email -->
	<center>
		<form action="login.php" method="POST">
		<label for="emailField">Email Address: </label>
		<input name="userEmail" placeholder="123@gmail.com" id="emailField">
		<button type="submit" class="btn btn-primary" name="submit" value="troll">Log-In</button>	
		</form>
	</center>

<!-- This is the register button for new users -->
	<center>
		<form action="signup.php" method="POST">
			<button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
		</form>
	</center>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
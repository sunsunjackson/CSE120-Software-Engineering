<?php
include('header.php');
?>

<!-- This is for Title of the webpage-->
<title > Maia</title>

	<!-- This is the image in the front cover-->
	<div class="blurbackground">
	    <h1 class="top-left" style="color: white">Maia</h1>
	    <p1 class="top-left2" style="color: white">Fertility · Growth · Abundance · Nourishment</p1>
	</div>
	
	<!-- These are for title in the webpage once we login-->
	<section class = "home">
		<br><br><br>
		  <center><h1> Maia</h1></center>
		  <center><h4>Fertility · Growth · Abundance · Nourishment</h4></center>
		<br>
	</section>

<!-- This is the log in using the user email -->
	<center>
		<form action="login.php" method="POST">
		<label for="emailField">Email Address: </label>
		<input name="userEmail" placeholder="123@gmail.com" id="emailField">
		<button type="submit" class="btn btn-outline-warning" name="submit" value="troll">Log-In</button>	
		</form>
	</center>

<!-- This is the register button for new users -->
	<center>
		<form action="signup.php" method="POST">
			<button type="submit" class="btn btn-outline-warning" name="submit">Sign Up</button>
		</form>
	</center>

<!-- Footer image -->
<div class="footer">
	<div class="blurbackground">
		<center><h4 style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</h4></center>
	</div>
</div>


<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
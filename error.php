<?php
include('header.php');
?>

<!-- This is the image in the front cover-->
<div class="blurbackground">
 	<h1 class="top-left" style="color: white">Maia</h1>
 	<p1 class="top-left2" style="color: white">Fertility · Growth · Abundance · Nourishment</p1>
</div>

<!-- Warning message when user information entered is not correct -->
<center>
	<br><br><br><br>
	<h2>
		The information you have entered is not correct. Please enter your email again.
	</h2>
	<br><br><br>
</center>

<!-- Button to relog-in -->
<form action = "index.php" method = "POST">
    <center>
    	<button type="submit" class="btn btn-outline-warning" name = "submit">Log-In Again</button>
    </center>
</form>

<div class="footer">
	<div class="blurbackground">
		<center><h4 style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</h4></center>
	</div>
</div>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
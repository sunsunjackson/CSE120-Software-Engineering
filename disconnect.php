<!-- Footer image -->
<div class="footer">
	<div class="blueimg">
		<center><h4>&copy; <?php echo date('Y'); ?> Cornucopia</h4></center>
	</div>
</div>

</body>
</html>


<!-- disconnects from the database after use to prevent memory leak -->
<?php
	$database->close();
?>
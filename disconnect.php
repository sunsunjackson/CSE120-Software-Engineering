</body>
</html>


<!-- disconnects from the database after use to prevent memory leak -->
<?php
	$database->close();
?>
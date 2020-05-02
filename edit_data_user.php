<?php
include('header.php');
?>

<!-- implementing the side bar from header.php -->
<div class="sidenav">
    <a href="interface.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="timeruser.php">Timer <i class="fa fa-clock-o" aria-hidden="true"></i></a>
    <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
    <a href="#settings">Settings <i class="fa fa-cog" aria-hidden="true"></i></a>
    <a href="calendaruser.php">Calendar <i class="fa fa-calendar-o" aria-hidden="true"></i></a>
    <a href="solution.php">Suggestion <i class="fa fa-info" aria-hidden="true"></i></a>
    <a class="bottomFix" style="padding-bottom: 40px" href="logout.php">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</div>

<!-- implementing text over image from header.php -->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>


<?php

// PHP form of the SQL query that retrieves the user name logged in
$name = $_SESSION['user_name'];
$query = "SELECT u_name, u_type, u_email FROM user WHERE u_name = '{$_SESSION['user_name']}'";
$statement = $database->prepare($query);
$result = $statement->execute();
//welcome back, "user"
echo '<br>' . '<h5 class="away-from-sidebar-welcome-msg">' . 'Welcome back, ' . $name . '. The system has granted you the ability to view the data of your farm.' . '<br>' . 'Please view your data below: ' . '</h5>' . ' <br> ';
?>

<?php include('disconnect.php'); ?>
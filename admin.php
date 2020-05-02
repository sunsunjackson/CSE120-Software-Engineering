<?php include('header.php');

//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database
if(!$database) {
	die("Not connected to database"); // give out error that database is not connected.
}
?>

<!-- implementing side bar from header.php -->
<div class="sidenav">
    <!-- i class are font-awesome icons -->
	<a href="admin.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
	<a href="timeradmin.php">Timer <i class="fa fa-clock-o" aria-hidden="true"></i></a>
	<!-- <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
	<a href="#settings">Settings <i class="fa fa-cog" aria-hidden="true"></i></a> -->
    <a href="calendaradmin.php">Calendar <i class="fa fa-calendar-o" aria-hidden="true"></i></a>
	<a class="bottomFix" style="padding-bottom: 40px" href="logout.php">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</div>

<!-- This is the image in the front cover-->
<div class="blueimg">
 	<h1 class="top-left">Maia</h1>
 	<p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>


<?php
// The $_POST variables are retrieved from login.php for SQL purposes
$name = $_SESSION['user_name'];

// Executes the SQL query that confirms the name of the person loggin in
$query = "SELECT u_name, u_type, u_email FROM user WHERE u_name = '{$_SESSION['user_name']}'";
$statement = $database->prepare($query);
$result = $statement->execute();

// Welcoming back the ADMIN with their name
echo '<br>' . '<h5 class="away-from-sidebar">' . 'Welcome back, ' . $name. '. The system has granted you the ability to view and manage all existing users because you are an administrator.' . '<br>' . 'Below are all existing users: ' . '</h5>' . ' <br> ';
?>

<!-- User table -->
<?php
// Executes the query that selects all data from the table "user"
$query = "SELECT * FROM user";
$statement = $database->prepare($query);
$result = $statement->execute();

$firstRow = true;
echo '<br><br>';
// style="overflow-x" allows the table to be scrolled horizontally
echo '<div style="overflow-x: auto;">';
// Initiates the table with table properties
echo '<div class="container mb-5 mt-3"><table class="table table-striped table-bordered" style="width: 100%" id="userTable">';

// The while loop fetches the data from the query into the table
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    if ($firstRow) {
        // column names
        echo '<thead><tr>';
        foreach ($row as $key => $value) {
            echo '<th>'.$key.'</th>';
        }
        echo '</tr></thead>';
        // table data
        echo '<tbody>';
        $firstRow = false;
    }
    // table data
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table></div>';
echo '</div>'; //end of the table function

// Add User button that transitions to adduser.php when clicked
echo '<form action="adduser.php" class="away-from-sidebar">
            <button type="submit" class="btn btn-primary" name="submit">Add User</button>
        </form>';

// Delete User button that transitions to deleteuser.php when clicked
echo '<form action="deleteuser.php" style="position:absolute; left:285px; width:100%">
            <button type="submit" class="btn btn-primary" name="submit">Delete User</button>
        </form>';

// line breaks
echo '<br><br><br><br><br><br><br><br><br>';


?>

<!-- DataTable function from Bootstrap 4. This provides the search, pagination, and filter for the table. -->
<script>
	$('#userTable').DataTable({
	});
</script>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
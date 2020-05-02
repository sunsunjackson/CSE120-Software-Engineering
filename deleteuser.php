<?php include('header.php');
//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database

if(!$database) {
	die("Not connected to database"); // give out error that database is not connected.
}
?>

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

// Welcome back, "user"
echo '<br>' . '<h5 class="away-from-sidebar">' . 'Removing user from the database.' . '</h5>';
?>

<!-- User Table -->
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
?>

<!-- Asks the ADMIN to enter the information of user they want to remove. Transitions to delete.php when click the button -->
<form action="delete.php" method="POST" class="away-from-sidebar">
    <h5>Please enter the information of the user you want to remove below in capitalized form.</h5>

    <label for="full-name"><b>Full Name</b></label>
    <input type="text" placeholder="ENTER FULL NAME" name="deleteName" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="ENTER EMAIL" name="deleteEmail" required>

    <label for="psw-repeat"><b>Repeat Email</b></label>
    <input type="text" placeholder="REPEAT EMAIL" name="repeatEmail" required>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
</form>
<br><br><br>

?>

<!-- DataTable function from Bootstrap 4. This provides the search, pagination, and filter for the table. -->
<script>
	$('#userTable').DataTable({
	});
</script>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
<?php
include('header.php');
?>

<!-- implementing text over image from header.php -->
<div class="blurbackground">
 	<h1 class="top-left" style="color: white">Maia</h1>
 	<p1 class="top-left2" style="color: white">Fertility · Growth · Abundance · Nourishment</p1>
 	<p1 class="top-right" style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</p1>
</div>


<!-- Farm data table -->
<?php
echo '<br>';

// Executes the SQL query that retreives all data from crop table in the database
$query = "SELECT * FROM crop";
$statement = $database->prepare($query);
$result = $statement->execute();

$firstRow = true;
// style="overflow-x" allows the table to be scrolled horizontally
echo '<div style="overflow-x: auto;">';
// Initiates the table with table properties
echo '<div class="container mb-5 mt-3"><table class="table table-striped table-bordered" style="width: 100%" id="almondTable">';

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
echo '</div>';
?>

<!-- Asks the USER to enter the location ID to filter out which row they want to edit. Then transition to edit_data_user2.php to edit that specific row-->
<br>
<h5 class="away-from-sidebar">Please enter the locationID number to select which row you would like to edit.</h5>
<br>
<form action="edit_data_user2.php" method="POST" class="away-from-sidebar">
	
    <label for="location"><b>LocationID</b></label>
    <input type="text" name="locationID" required>

    <button type="submit" class="btn btn-outline-warning" name="submit">Confirm</button>

</form>

<!-- Return to home page if the user change their mind -->
<form action="interface.php" style="position:absolute; left:530px; width:100%">
        <button type="submit" class="btn btn-outline-warning" name="submit">Return to Home</button>
        <br><br><br><br>
</form>

<!-- DataTable function from Bootstrap 4. This provides the search, pagination, and filter for the table. -->
<script>
	$('#almondTable').DataTable({
	});
</script>


<?php include('disconnect.php'); ?>
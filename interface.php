<?php include('header.php');
//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database

if(!$database) {
	die("Not connected to database"); // give out error that database is not connected.
}
?>

<!-- implementing the side bar from header.php -->
<div class="sidenav">
    <img src="cornlogo.png" class="logo">
    <br><br><br><br><br>
    <a href="interface.php">Home <i class="fa fa-home" aria-hidden="true"></i></a><br>
    <a href="timeruser.php">Stopwatch <i class="fa fa-clock-o" aria-hidden="true"></i></a><br>
 <!--    <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a><br>
    <a href="#settings">Settings <i class="fa fa-cog" aria-hidden="true"></i></a><br> -->
    <a href="calendaruser.php">Calendar <i class="fa fa-calendar-o" aria-hidden="true"></i></a><br>
    <a href="suggestion.php">Suggestion <i class="fa fa-info" aria-hidden="true"></i></a>
    <a class="bottomFix" style="padding-bottom: 40px" href="logout.php">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</div>

<!-- This is the image in the front cover-->
<div class="blurbackground">
 	<h1 class="top-left" style="color: white">Maia</h1>
 	<p1 class="top-left2" style="color: white">Fertility · Growth · Abundance · Nourishment</p1>
    <p1 class="top-right" style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</p1>
</div>

<script>
    function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>

<?php

// The $_POST variables are retrieved from login.php for SQL purposes
$name = $_SESSION['user_name'];

// Executes the SQL query that confirms the name of the person loggin in
$query = "SELECT u_name, u_type, u_email FROM user WHERE u_name = '{$_SESSION['user_name']}'";
$statement = $database->prepare($query);
$result = $statement->execute();

// Welcoming back the USER with their name
echo '<br>' . '<h5 class="away-from-sidebar">' . 'Welcome back, ' . $name . '. The system has granted you the ability to view the data of your farm.' . '<br>' . 'Please view your data below: ' . '</h5>' . ' <br> ';
?>

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

<!-- Edit Data button that transitions to the edit_data_user.php that allows user to edit table data -->
<form action="edit_data_user.php" class="away-from-sidebar">
            <button type="submit" class="btn btn-outline-warning" name="submit">Edit Data</button>
</form>

<!-- Allows the user to export the data into an excel sheet -->
<form style="position:absolute; left:285px; width:100%">
            <button onclick="exportTableToExcel('almondTable')" type="submit" class="btn btn-outline-warning" name="submit">Export Data as CSV</button>
</form>

<!-- Refresh the page -->
<!-- <form style="position:absolute; left:455px; width:100%">
        <button onclick="window.location.reload();" class="btn btn-outline-warning">Refresh page</button>
</form> -->

<br><br><br><br><br><br><br><br><br>

<!-- DataTable function from Bootstrap 4. This provides the search, pagination, and filter for the table. -->
<script>
	$('#almondTable').DataTable({
	});
</script>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
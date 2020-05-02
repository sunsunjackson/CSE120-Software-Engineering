<?php
// This session method allows the program to use global variables $_SESSION throughout files
session_start();

//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db');
if(!$database) {
	echo "Not connected to DB";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cornucopia
    </title>    

    <!-- bootstrap reference link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <style type="text/css">
    	.bottomFix{
    		position: fixed;
    		bottom:0px;
    		left: 0%;
    	}
    	.logoFix{
    		position: fixed;
    		left: 0%
    		top: 50px;
    	}
    
	body {
		font-family: "Lato", sans-serif;
	}
	.blueimg {
		width: 100%;
		height: 100px;
		padding: 3px;
		background-image: url(blue.jpg);
		background-size: 100% 100%;
	}
	.stopwatch {
		height: 50px;
		width: 40px;
		margin-left: 100px;
		background-image: url(stopwatch.png);
		background-repeat: no-repeat;
	}
	/*the properties of the side bar/nav bar*/
	.sidenav {
	  height: 100%;
	  width: 170px; 
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #111;
	  overflow-x: hidden;
	  padding-top: 20px;
	}

	.sidenav a {
	  padding: 6px 8px 6px 16px;
	  text-decoration: none;
	  font-size: 25px;
	  color: #818181;
	  display: block;
	}

	.sidenav a:hover {
	  color: #f1f1f1;
	}

	.main {
	  margin-left: 160px; /* Same as the width of the sidenav */
	  font-size: 28px; /* Increased text to enable scrolling */
	  padding: 0px 10px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	/*setting the margins and positions of the text over image*/
	.container {
		position: relative;
		text-align: center;
		color: black;
		background-color: white;
	}
	.top-left {
		position: absolute;
		top: 20px;
		left: 235px;
	}
	.top-left2{
		position: absolute;
		top:65px;
		left: 230px;
	}
	.trade-mark{
		position: absolute;
		text-align: center;
		top: 50%;
	  	left: 50%;
	  	transform: translate(-50%, -50%);
	}
	.away-from-sidebar {
		position: absolute;
		left: 185px;
		width: 100%;
	}
	.away-from-sidebar-welcome-msg {
		position: absolute;
		left: 230px;
	}
	.footer {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
	}


	* {
	  box-sizing: border-box;
	}
	/*input[type=text], input[type=password] {
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  display: inline-block;
	  border: none;
	  background: #f1f1f1;
	}
	input[type=text]:focus, input[type=password]:focus {
	  background-color: #ddd;
	  outline: none;
	}*/
	hr {
	  border: 1px solid #f1f1f1;
	  margin-bottom: 25px;
	}
	.registerbtn {
	  background-color: #4CAF50;
	  color: white;
	  padding: 16px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  opacity: 0.9;
	}
	.registerbtn:hover {
	  opacity: 1;
	}
	a {
	  color: dodgerblue;
	}
</style>


</head>
<body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</body>
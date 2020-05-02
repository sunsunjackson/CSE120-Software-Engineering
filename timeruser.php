<?php  include('header.php');
//session_start();
    
$database = new SQLite3('maia.db'); // connects to database

    
date_default_timezone_set('America/Los_Angeles');
$_SESSION['time']=180;
    if(!$database) {
        die("Not connected to database"); // give out error that database is not connected.
    }
?>


<div class="blueimg">
    <h1 class="top-left">Maia</h1>
    <p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<div class="sidenav">
    <a href="interface.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="timeruser.php">Timer <i class="fa fa-clock-o" aria-hidden="true"></i></a>
    <!-- <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
    <a href="#settings">Settings <i class="fa fa-cog" aria-hidden="true"></i></a> -->
    <a href="calendaruser.php">Calendar <i class="fa fa-calendar-o" aria-hidden="true"></i></a>
    <a href="suggestion.php">Suggestion <i class="fa fa-info" aria-hidden="true"></i></a>
    <a class="bottomFix" style="padding-bottom: 40px" href="logout.php">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</div>

<br>
<center><h1> STOP WATCH </h1></center>

<center>
    <input type="button" name="btn" id='btn_start' value='Start' onclick="to_start()";>
</center>

<center>
    <input type= "button" name "btn" id = 'btn_stop' value = 'Stop' onclick = "to_stop()";>
</center>

<div id=n1 style="z-index: 2; position: relative; right: 0px; text-align: center; color:black; font-size:200px; #0000cc 2px dashed; "> 
</div>



<?php
    
    date_default_timezone_set('America/Los_Angeles');
    
     $time = date('h:i:s');
    
?>

<script>
var hour=0;
var min=0;
var sec=0;
var count_h= 0;
var count_s = 0;
var cout_m = 0;
var val;


function to_start()
{
    if( 'Start' == document.getElementById('btn_start').value)
    {
        val = window.setInterval('disp()',1000);
    }
       
    if('Timer' == document.getElementById('btn_stop').value)
    {
        to_stop();

    }
    
}
function disp(){
// Format the output by adding 0 if it is single digit //
if(sec< 10)
{
     count_s = '0' + sec;
    
}
if(sec >= 10 )
{
    count_s= sec;
    
}
if(min < 10)
{
    count_m= '0' + min;
    
}
if(min >= 10)
{
     count_m = min;
    
}
if(hour < 10 )
{
    count_h='0' + hour;
    
}
if(hour >= 10)
{
    var count_h=hour;
    
}
// Display the output //
str= count_h + ':' + count_m +':' + count_s ;
document.getElementById('n1').innerHTML=str;
// Calculate the stop watch //
if(sec < 59)
{
    sec= sec + 1;
}
if(sec >= 59)
{
    sec=0;
    //clear the seconds
    min = min + 1;
    if(min ==60)
    {
        //clear the minutes
        min = 0;
        
        hour = hour + 1;
    }

}

}


function to_stop()
{
    clearInterval(val);

}
</script>
<?php include('disconnect.php'); ?>
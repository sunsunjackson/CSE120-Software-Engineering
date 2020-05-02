
<?php

    //https://codingwithsara.com/a-calendar-with-php-starting-with-monday/
    //used source code
    //Setting the timezone
    include('header.php');
    //Connects to the SQLITE3 local database
    $database = new SQLite3('maia.db'); // connects to database
    
    if(!$database) {
        die("Not connected to database"); // give out error that database is not connected.
    }
    date_default_timezone_set('America/Los_Angeles');
    //get the time
    $time = date('h:i:s');

    
    if(isset($_GET['ym']))
    {
        $ym = $_GET['ym'];
    }
    else
    {
        $ym = date('Y-m');
    }
    
    $timestamp = strtotime($ym.'-01');
    if($timestamp == false)
    {
        $ym = date('Y-m');
        $timestamp = strtotime($ym. '01');
    }
    
    //Today
    $today = date('Y-m-j',time());
    
    //For the title
    $html_title = date("M Y", $timestamp);
    
    //Create prev & the next month
    $prev = date('Y-m', mktime(0,0,0,date('m',$timestamp)-1,1,date('Y',$timestamp)));
    $next = date('Y-m', mktime(0,0,0,date('m',$timestamp)+1,1,date('Y',$timestamp)));
    
    
    //Number of Days in a Month
    $day_count = date('t', $timestamp);
    //0:Sun. 1:Mon 2:Tues ...
    $str = date('w', mktime(0,0,0,date('m',$timestamp),1,date('Y',$timestamp)));
    
    
    //Create Calendar
    $weeks = array("<th>Sunday</th> ", "<th>Monday</th> ", "<th>Tuesday</th> ", "<th>Wednesday</th> ", "<th>Thursday</th> ","<th>Friday</th> ","<th>Saturday</th> " );
    $week = '';
    //empty cell
    $week .= str_repeat('<td> </td>',$str);
    
    
    
    for( $day = 1; $day <= $day_count; $day++, $str++)
    {
        $date = $ym.'-'.$day;
        
        if($today == $date)
        {
            $week .= '<td class = "today" >'.$day;
            
        }
        if($today!= $date)
        {
           $week.= '<td>' .$day;
        }
        
        $week .= '</td>';
        
        if($str % 7 == 6 || $day == $day_count)
        {
            if($day == $day_count)
            {
                $week.= str_repeat('<td></td>',6-($str % 7) );
            }
            
            $weeks[] = '<tr>' .$week. '</tr>';
            
            $week = '';
        }
        
    }
?>


<?php
    
    //$Today = date("m/d/Y");
    
    //$myVal = $_POST['date_entered'];
    
    //print($myVal);
    
    //$newVal = strtotime($myVal);
    
    //echo date("m/d/Y", $newVal);
       
    
    
    
     
?>


<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <title>CALENDAR</title>

<!-- This is the image in the front cover-->
<div class="blueimg">
    <h1 class="top-left">Maia</h1>
    <p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>
<br>

<!-- Sets the content of the page 200pixels from the left -->
<div style="margin-left: 200px">

<!-- Displays the time created from the php section above -->
<?php
    echo 'The current time is: ' . $time;
?>

<!-- implementing side bar from header.php -->
<div class="sidenav">
    <a href="interface.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
    <a href="timeruser.php">Timer <i class="fa fa-clock-o" aria-hidden="true"></i></a>
    <!-- <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
    <a href="#settings">Settings <i class="fa fa-cog" aria-hidden="true"></i></a> -->
    <a href="calendaruser.php">Calendar <i class="fa fa-calendar-o" aria-hidden="true"></i></a>
    <a href="suggestion.php">Suggestion <i class="fa fa-info" aria-hidden="true"></i></a>
    <a class="bottomFix" style="padding-bottom: 40px" href="logout.php">Log out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        .container
        {
            font-family: 'Roboto', sans-serif;
            margin-top: 80px;
        }
        h3
        {
            margin-bottom: 30px;
        }
        th
        {
            height:30px;
            text-align: center;
        }
        td
        {
            height:100px;
        }
        .today
        {
        background:#50A8E7;
        }
        th:nth-of-type(7),td:nth-of-type(7)
        {
        color: #50A8E7;
        }
        th:nth-of-type(1),td:nth-of-type(1)
        {
            color:#50A8E7;
        }
    </style>
</head>
<body>
<div class= "container">
    <h4>
        <a href="?ym=<?php echo $prev; ?>"><input type="button" name="btn" id='btn_start' value='Previous' onclick="to_prev()";>
        </a> 
            <?php echo $html_title; ?> 
        <a href="?ym=<?php echo $next; ?>"><input type="button" name="btn" id='btn_start' value='Next' onclick="to_next()";>
        </a>
    </h4>
    <table style="font-family: arial; font-size: 20px;margin-bottom: 200px" class= "table table-bordered">
        
        <?php
        foreach ($weeks as $week)
            {
                echo $week;
                
            }
        ?>

    </table>
</div>
</body>
</html>

<!-- We will need disconnect.php to disconnect from the database -->
<?php include('disconnect.php'); ?>
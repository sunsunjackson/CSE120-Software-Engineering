<?php include('header.php');
//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database

if(!$database) {
	die("Not connected to database"); // give out error that database is not connected.
}
?>


<div class="blueimg">
    <h1 class="top-left">Maia</h1>
    <p1 class="top-left2">Best Practice, Most Efficient</p1>
</div>

<!DOCTYPE html>
<html>
<body>

	<h4> Almonds </h4>

	<p>
	January = 0
    February =1
    March = 2
    April = 3
    May = 4
    June = 5
    July = 6
    August = 7
    September = 8
    October = 9
    November = 10
    December =11
	</p>
	

<script>

var Humidity;
function HumidityCheck()
{
    if(Humidity == "high")
    {
        document.write("Not Ideal to plant because the Humidity is:" +  Humidity + "<br>");
    }
    if(Humidity == "low" || Humidity == "moderate")
    {
       document.write("Ideal to plant because the Humidity is: " + Humidity + "<br>");
    }
}



function stages()
{
	var d = new Date();
    var get_month = d.getMonth();
    var seasons = new Array();
	var growth_stage = Array();


  	document.write(" Our Current Month is " + get_month + "<br>");

  if (get_month == 0 || get_month == 1)
  {
    //we are in winter
    //Jan and Feb.
    seasons[0] = "winter";

    growth_stage[0] = "Bud first";

    Humidity = "low";

    document.write(" We are currently in " + seasons[0] + " with a " + Humidity  + " Humidity" + "<br>");
    document.write(" The Growing Stage:" + growth_stage[0] + "<br>");


  }
  if (get_month == 2)

  {
    growth_stage[1] = "Shuck Fall";
    document.write(" The Growing Stage:" + growth_stage[1] + "<br>");
  }

if (get_month == 2 || get_month == 3 || get_month == 4)
  {
    //we are in spring
    //march, April, and May
    seasons[1] = "spring";
    Humidity = "moderate";
    document.write(" We are currently in " + seasons[1] + " with a " + Humidity + " Humidity" + "<br>");


  }

if ( get_month == 3 || get_month == 4 || get_month == 5 || get_month == 6)
  {
    //we are in spring
    //march, April, and May
   growth_stage[1] = "Nut Growth";
   document.write("The Growing Stage: " + growth_stage[1] + "<br>" );

  }
if (get_month == 5 || get_month == 6 || get_month == 7)
  {
    //we are in summer
    //June , July, and August
    seasons[2] = "summer";
    Humidity = "high";
   document.write("We are currently in " + seasons[2] + " with a " + Humidity + " Humidity" + "<br>" );

  }
  if (get_month == 7|| get_month == 8)
  {
    //we are in summer
    // August and sep.
    growth_stage[3] = "Harvest";
    document.write( "The Growing Stage: " + growth_stage[3] + "<br>");


  }
  if (get_month == 9)
  {
    //septembe, october, november
    //we are in autumn
   growth_stage[4] = "Post_harvest";
   document.write("The Growing Stage: " + growth_stage[4] + "<br>");

  }
   if (get_month == 10 || get_month == 11)
  {
    //septembe, october, november
    //we are in autumn
    growth_stage[5] = "Leaf Fall";
    document.write("The Growing Stage: " + growth_stage[5] + "<br>"); 
  }
 if (get_month == 8 || get_month == 9 || get_month == 10)
  {
    //septembe, october, november
    //we are in autumn
    seasons[3] = "autumn";
    Humidity = "low";

   document.write("We are currently in " + seasons[3] + " with a " + Humidity + " Humidity" + "<br>"); 


  }



}

function temp()
{
    var temp1 = 89;
    var temp2 = 59;

    var temp = window.prompt("what is the temperature?");
    document.write("The Temperature entered is " + temp + "<br>" );
    
    if((temp  <  temp1) || (temp  > temp2))
    {
        document.write( "Not an ideal Temperature" + "<br>");
    }
    else
    {
        document.write("An ideal Temperature" + "<br>");
    }
}

temp();


stages();

HumidityCheck();


</script>
</body>
</html>
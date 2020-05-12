<?php include('header.php');
//Connects to the SQLITE3 local database
$database = new SQLite3('maia.db'); // connects to database

if(!$database) {
  die("Not connected to database"); // give out error that database is not connected.
}
?>


<div class="blurbackground">
  <h1 class="top-left" style="color: white">Maia</h1>
  <p1 class="top-left2" style="color: white">Fertility · Growth · Abundance · Nourishment</p1>
  <p1 class="top-right" style="color: white">&copy; <?php echo date('Y'); ?> Cornucopia</p1>
</div>

<!DOCTYPE html>
<html>



<body>

  <center><h4> Suggestions for Almonds and Pistachios </h4></center>

<div class="row">
  <div class="column">
    <img src="almond.jpg" alt="almonds" style="padding-left: 20px; width:100%">
  </div>
  <div class="column">
    <img src="white.png" alt="pistachio" style="width:80%">
  </div>
  <div class="column">
    <img src="p11.jpg" alt="pistachio" style=" width:70%">
  </div>
  </div>
</div>

<<!-- h6> Enter the temperature </h6>
<input type = "text" id = "userinput"> </input> -->

<style>

 *{
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.p
{
    flex: 50%;
    padding: 10px:
    height: 300px;
    text-align: right;
    font-family: san-serif;
    //background-color: #aaa;

    
}
.temp
{

    text-align : center;
    font-family: san-serif;
}
.a
{
    flex: 50%;
    padding: 10px:
    height: 300px;
    text-align : left;
    font-family: san-serif;
    width = 50%;

    
    //background-color: #bbb;

    
}


</style>
  

<script>




var Humidity;
var temp;


function temp_Pistacho()
{
    
    //temp values for Pistachos
    var Temp1 = 100;
    var Temp2 = 45;
    var Temp3 = 15;
    
    
    if(temp >= Temp1)
    {
        document.write( "<h6  class = 'temp'>An ideal Temperature to grow Pistachios" + "<br>" +  "</h6>" );
    }
    else if(Temp3 >= temp)
    {
        //can't be under 15 degrees
        document.write( "<h6 class = 'temp' >It is too cold to grow Pistachios </h6> ");
    }
    
    
    else if (temp >= 45 && temp <= 60)
    {
        //for winter it ranges from 45-60 degrees
               document.write( "<h6 class = 'temp' > It is an ideal time to grow Pistachios during winter </h6>");
    }
    
}
//check the humidtity of almonds
function HumidityCheck()
{
    if(Humidity == "high")
    {
        document.write("<h6 class = 'a' > Not Ideal to plant Almonds because the Humidity is:" +  Humidity + "</h6>");
    }
    if(Humidity == "low" || Humidity == "moderate")
    {
       document.write("<h6 class = 'a' > Ideal to plant Almonds because the Humidity is: " + Humidity + "</h6>");
    }
}



function stages()
{
  var d = new Date();
    var get_month = d.getMonth();
    var seasons = new Array();
  var growth_stage = Array();
    get_month = get_month +1;
    
    document.write("<h4 class =' a'>Summary of Almonds:" + "<br>" + "</h4>")
    document.write("<p class = 'a' >Our Current Month is " + get_month + "<br>" +  "</p>");

  if (get_month == 1 || get_month == 2)
  {
    //we are in winter
    //Jan and Feb.
    seasons[0] = "winter";

    growth_stage[0] = "Bud first";

    Humidity = "low";

    document.write("<h6 class = 'a' >We are currently in " + seasons[0] + " with a " + Humidity  + " Humidity" + "<br>"+  "</h6>");
    document.write("<h6 class = 'a' >The Growing Stage:" + growth_stage[0] + "<br>" +"</h6>");


  }
  if (get_month == 3)

  {
    growth_stage[1] = "Shuck Fall";
    document.write("<h6 class = 'a' The Growing Stage:" + growth_stage[1] +"<br>" +"</h6>");
  }

if (get_month == 3 || get_month == 4 || get_month == 5)
  {
    //we are in spring
    //march, April, and May
    seasons[1] = "spring";
    Humidity = "moderate";
    document.write("<h6 class = 'a' >We are currently in " + seasons[1] + " with a " + Humidity + " Humidity" + "<br>" +"</h6>");


  }

if ( get_month == 4 || get_month == 5 || get_month == 6 || get_month == 7)
  {
    //we are in spring
    //march, April, and May
   growth_stage[1] = "Nut Growth";
   document.write("<h6 class = 'a' >The Growing Stage: " + growth_stage[1] + "<br>" + "</h6>" );

  }
if (get_month == 6 || get_month == 7 || get_month == 8)
  {
    //we are in summer
    //June , July, and August
    seasons[2] = "summer";
    Humidity = "high";
   document.write("<h6 class = 'a' > We are currently in " + seasons[2] + " with a " + Humidity + " Humidity"+ "<br>" + "</h6>" );

  }
  if (get_month == 8|| get_month == 9)
  {
    //we are in summer
    // August and sep.
    growth_stage[3] = "Harvest";
    document.write( "<h6 class = 'a' >The Growing Stage: " + growth_stage[3] + "<br>" + "</h6>");


  }
  if (get_month == 10)
  {
    //septembe, october, november
    //we are in autumn
   growth_stage[4] = "Post_harvest";
   document.write("<h6 class = 'a' >The Growing Stage: " + growth_stage[4] +  "<br>" +"</h6>");

  }
   if (get_month == 11 || get_month == 12)
  {
    //septembe, october, november
    //we are in autumn
    growth_stage[5] = "Leaf Fall";
    document.write("<h6 class = 'a' >The Growing Stage: " + growth_stage[5] +"<br>" + "</h6>");
  }
 if (get_month == 9 || get_month == 10 || get_month == 11)
  {
    //septembe, october, november
    //we are in autumn
    seasons[3] = "autumn";
    Humidity = "low";

   document.write( " <h6 class = 'a' We are currently in " + seasons[3] + " with a " + Humidity + " Humidity" + "<br>" + "</h6>");

    var img = document.createElement('img');
    img.src = 'almonds.jpg';
    var src = document.getElementById('x');
    src.appendChild(img);

  }



}
function stages_P()
{

        var d = new Date();
        var get_month = d.getMonth();
        get_month = get_month + 1;
        var seasons = new Array();
        var crop_stage = Array();
        
        var day = d.getDay();
        var date = d.getDate();
             
        var weekOfMonth = Math.ceil((date + 6 - day)/7);

    
    if(get_month == 1 || get_month == 2 || get_month == 3|| get_month == 11 || get_month == 12)
    {
        crop_stage[0] = "Dormant";
        document.write("<h6 class = 'p'  >The crop stage is:" + crop_stage[0] + "<br>" +"</h6");
        
    }
    //March fourth week
    if((get_month == 3 && weekOfMonth == 4) )
    {
        crop_stage[1]= "Bud Swell- Bloom";
        document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[1] + "<br>" + "</h6");
    }
    //April
    if(get_month == 4)
    {
        crop_stage[1] = "Bud Swell- Bloom";
        document.write("<h6 class 'p' > The crop stage is:" + crop_stage[1] + "<br>" + "</h6>");
    }
    //April week 4
    if(get_month== 4 && weekOfMonth == 4)
    {
        crop_stage[2]= "Shout Growth";
        document.write("<h6 class ='p' >The crop stage is:" + crop_stage[2] + "<br>" + "</h6>" );
    }
    //May
    if(get_month == 5)
    {
        crop_stage[2] = "Shout Growth";
         document.write("<h6 class = 'p' > The crop stage is: " + crop_stage[2] + "<br>" +"</h6>");
    }
    //April 3rd week
    if((get_month== 4 && weekOfMonth == 3))
    {
        if(get_month == 4 && weekOfMonth == 4)
        {
            crop_stage[3] = "Hull Experience";
            document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[3] + "<br>" +"</h6>");
        }
    }
    if(get_month == 4)
    {
        crop_stage[3] = "Hull Experience";
         document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[3] + "<br>" + "</h6>");
    }
    //June
    if(get_month == 6)
    {
        crop_stage[4] = "Shell Hardening";
         document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[4] + "<br>" + "</h6>");
    }
    //June 4th week
    if(get_month == 6 && weekOfMonth == 4)
    {
         crop_stage[5]= "Nut-fill";
         document.write("<h6 class 'p' > The crop stage is:" + crop_stage[5] + "<br>" + "</h6>");
    }
    //July
    if(get_month == 7)
    {
        crop_stage[5]= "Nut-fill";
        document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[5] +  "<br>" + "</h6>");
    }
    //August 1st week
    if(get_month == 8 && weekOfMonth == 1)
    {
        crop_stage[5]= "Nut-fill";
        document.write("<h6 class = 'p'> The crop stage is:" + crop_stage[5]+ "<br>" +  "</h6>");
    }
    //July 4th week
    if(get_month == 7 && weekOfMonth == 4)
    {
        crop_stage[6]= "Nut-fill";
        document.write("<h6 class = 'p'> The crop stage is:" + crop_stage[6] + "<br>" + "</h6>");
    }
    //august
    if(get_month == 8)
    {
        crop_stage[7] = "Shell-Split";
        document.write("<h6 class = 'p' The crop stage is:" + crop_stage[6] + "<br>" +  "</h6>");
    }
    //september weeks 1 and 2
    if(get_month == 9 && weekOfMonth == 1)
    {
        crop_stage[7] = "Shell-Split";
        document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[7] +  "<br>" + "</h6>");
    }
    if(get_month == 9 && weekOfMonth == 2)
    {
        crop_stage[7] = "Shell-Split";
        document.write("<h6 class = 'p' >The crop stage is:" + crop_stage[7] +  "<br>" + "</h6>");
    }
    //Last week of August
    if(get_month == 8 && weekOfMonth == 4)
    {
        crop_stage[8] = "Nut Maturation";
        document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[8] + "<br>" +"</h6>");
    }
    //september
    if(get_month == 9)
    {
        crop_stage[8] = "Nut Maturation";
       document.write("<h6 class = 'p' > The crop stage is:" + crop_stage[8] + "<br>"+ "</h6>");
    }
    

}
function workers()
{
    var d = new Date();
    var get_month = d.getMonth();
    get_month = get_month +1;
    var workers_activites = new Array();
    //workers_activites[5] = ["irragation", "Mowing", "Harvest", "Prunning", "Knock the nuts"];
            
    var day = d.getDay();
    var date = d.getDate();
    var weekOfMonth = Math.ceil((date + 6 - day)/7);

    
    if(get_month== 2 && weekOfMonth == 4)
    {
        workers_activites[0] = "Irrigation";
        document.write("<h6 class = 'p' > The worker stage is: " + workers_activites[0] + "</h6>");
    }
    if(get_month == 3 || get_month == 4|| get_month == 5|| get_month == 6|| get_month == 7|| get_month == 8 || get_month == 9)
    {
        workers_activites[0] = "Irrigation";
        document.write("<h6 class = 'p' > The worker stage is: " + workers_activites[0] + "</h6>");
    }
    
    if(get_month = 3|| get_month == 4 || get_month ==5|| get_month == 6|| get_month == 7|| get_month == 8)
    {
        workers_activites[1] = "Mowing";
        document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[1] + "</h6>");
    }
    if(get_month== 8 && weekOfMonth == 4)
    {
        workers_activites[2] = "Harvest";
        document.write("<h6 class 'p' >The worker stage is: " + workers_activites[2] + "</h6>");
    }
    if(get_month== 9 || get_month == 10)
    {
           workers_activites[2] = "Harvest";
           document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[2] + "</h6>");
    }
    if(get_month== 1 || get_month == 2|| get_month == 12)
    {
              workers_activites[3] = "Prunning";
              document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[3] + "</h6>");
    }
    if(get_month== 3 && weekOfMonth == 1)
    {
              workers_activites[3] = "Prunning";
              document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[3] + "</h6>");
    }
    //Jan and December
    if(get_month== 1  || get_month == 12)
    {
           workers_activites[4] = "Knock the nuts";
           document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[4] + "</h6>");
    }
    //Feb week 1
    if(get_month == 2 && weekOfMonth == 1)
    {
        workers_activites[4] = "Knock the nuts";
        document.write("<h6 class = 'p' >The worker stage is: " + workers_activites[4] + "</h6>");
    }
    //Feb week 2
    if(get_month == 2 && weekOfMonth == 2)
    {
        workers_activites[4] = "Knock the nuts";
        document.write("<h6 class = 'p' > The worker stage is: " + workers_activites[4] + "</h6>");
    }
    
    

}

function seasons_P()
{
    var d = new Date();
    var get_month = d.getMonth();
    get_month = get_month +1;
    var seasons = new Array();
    document.write("<h4 class = 'p' > Summary of Pistachios:" + "<br>" + "</h4>");
    document.write("<h6 class = 'p' > Our Current Month is " + get_month + "<br>" + "</h6>");
    //Winter
    if(get_month== 12 || get_month == 1 || get_month== 2)
    {
        seasons[0] = "winter";
        Humidity = "low";
        document.write( "<h6 class = 'p' >We are currently in " + seasons[0] + " with a " + Humidity + " Humidity" + "<br>" +"</h6>");
    }
    //Spring
    if(get_month == 3 || get_month == 4 || get_month == 5)
    {
        seasons[1] = "spring";
        Humidity = "moderate";
        document.write( "<h6 class = 'p' >We are currently in " + seasons[1] + " with a " + Humidity + " Humidity" + "<br>" +"</h6>");
    }
    //summer
    if(get_month == 6 || get_month == 7 || get_month == 8)
    {
        seasons[2] = "summer";
        Humidity = "High";
        document.write( "<h6 class = 'p' > We are currently in " + seasons[2] + " with a " + Humidity + " Humidity" + "<br>" +"</h6>");
    }
    //fall
    if(get_month == 9 || get_month== 10 || get_month == 11)
    {
        seasons[3] = "autumn";
        Humidity = "low";
        document.write( "<h6 class = 'p' We are currently in " + seasons[3] + " with a " + Humidity + " Humidity" + "<br>" +"</h6>");
    }
    
}
function temp()
{
    var temp1 = 59;
    var temp2 = 89;
    
    //temp values for Pistachos
    var Temp1 = 100;
    var Temp2 = 45;
    var Temp3 = 15;
    
    

    temp = window.prompt(" What is the temperature? (Farenheit)");
    document.write("<h6 class = 'temp'> The Temperature entered: " + temp + "<br> " + "</h6>" );
    //document.write("<h1 class = 'row' <p class = 'p' > Testing </p></h1>")
    
    
    if((temp  <  temp1) || (temp  > temp2))
    {
        document.write( "<h6 class = 'temp' > Not an ideal Temperature to grow Almonds </h6>");
    }
    
    else
    {
        document.write("<h6 class = 'temp'> An ideal Temperature to grow Almonds </h6>");
    }
    
    
}


temp();
//add cases where the temperature is in Celsius
temp_Pistacho();
stages();
HumidityCheck();


//seasons Pistachios
seasons_P();
//stages Pistachios
stages_P();
//Workers Activities
workers();

</script>
</body>
</html>
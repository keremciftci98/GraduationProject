<!DOCTYPE html>
<html lang="en">
<head>
	<title>Result</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
.emails {
	width: 280px;
}
.emailDiv {
  border: 5px outset red;
  background-color: lightblue;
  text-align: center;
  position:absolute;
  top:600px;
  color: Black;
}
.emailDiv p{
  color: Black;
  font-size: 16px;
}

.btn1 {
  background-color: #00008B;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  position:absolute;
  left:80px;
  top:60px;
  font-size: 20px;
}
.btn1:hover {
  background-color: RoyalBlue;
}

#homepage {
  background-color: #00008B;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  position:absolute;
  left:80px;
  top:50px;
  font-size: 30px;
}

/* Darker background on mouse-over */
#homepage:hover {
  background-color: RoyalBlue;
}

#editpage {
  background-color: #00008B;
  border: none;
  color: white;
  padding: 12px 35px;
  font-size: 16px;
  cursor: pointer;
  position:absolute;
  left:80px;
  top:170px;
  font-size: 30px;
}

/* Darker background on mouse-over */
#editpage:hover {
  background-color: RoyalBlue;
}

</style>
</head>
<body>

	<div class="container-contact100">
		<p align="left">
			<button onclick="homePage()" class="btn" id="homepage"><i class="fa fa-home"></i> Home Page</button>
		</p>	
		
		<p align="left">
			<button onclick="editPage()" class="btn" id="editpage"><i class="fa fa-pencil-square-o"></i> Edit Page</button>
		</p>	
	
		<div class="wrap-contact100" id="myDiv">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Result Page
				</span>

			</form>
			
		</div>
		<div class="emailDiv">
			<p>Enter your email address to get details</p>			
			
			<form method="post">
				<input class="emails" id="emails" name="emails">
				<input type="submit" name="test" class="btn1" id="test" value="Send Mail" /><br/>
			</form>
		</div>
		
	</div>

	<div id="dropDownSelect1"></div>
	
	
	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>

<script>
	function homePage(){
		window.location.href = "index.html";
	
	}	
	
	
</script>

<?php

$matType= $_COOKIE['matType'];
$machineName= $_COOKIE['machineName'];
$castingType= $_COOKIE['castingType'];
//echo $matType;
$machiningCost = 0;
$filamentCost = 0;
$density = 5;
$machinePrice =0;
$machinePrice3d = 0;
$castingvalue = 0;
$isPlastic = 1;
$matTypeCounter = 0;

if ("Aliminum 6061" == $matType) 
{
	//echo "Have a good day Aliminum 6061!";
	$matType= "ALUMINUM";
	$machinePrice3d = 250000;
	$isPlastic = 0;
	$matTypeCounter = 4;
}
else if ("ABS" == $matType) 
{
	//echo "Have a good day ABS!";
	$matType= "ABS";
	$machinePrice3d = 50000;
	$isPlastic = 1;
	$matTypeCounter = 1;
}
else if ("POM" == $matType) 
{
	//echo "Have a good day POM!";
	$matType= "POM";
	$machinePrice3d = 50000;
	$isPlastic = 1;
	$matTypeCounter = 2;
}
else if ("Stainless Steel 304" == $matType) 
{
	//echo "Have a good day Stainless Steel 304!";
	$matType= "STAINLESS STEEL";
	$machinePrice3d = 250000;
	$isPlastic = 0;
	$matTypeCounter = 3;
}
///////////////////////////////////////////////////////////
if ($machineName == "Haas ST30Y") 
{
	//echo "Have a good day Aliminum 6061!";
	$machinePrice= 103000;
}
else if ($machineName == "Doosan LYNX 2100LB") 
{
	//echo "Have a good day ABS!";
	$machinePrice= 70000;
}
else if ($machineName == "Haas UMC500") 
{
	//echo "Have a good day POM!";
	$machinePrice= 150000;
}
else if ($machineName == "Mazak VC500C") 
{
	//echo "Have a good day Stainless Steel 304!";
	$machinePrice= 100000;
}
///////////////////////////////////
if ($castingType == "Investment Casting") 
{
	$castingvalue= 1.3;
}
else
{
	$castingvalue= 1.1;
}

////////////////////////////////////

$link = mysqli_connect("localhost", "root", "", "ens492_project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM matcosts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){			

			if ($row['material'] == $matType) 
			{
				$machiningCost = $row['machiningCost'];
				$filamentCost = $row['filamentCost'];
				$density = $row['density'];
			}
			else if ($row['material'] == $matType) 
			{
				$machiningCost = $row['machiningCost'];
				$filamentCost = $row['filamentCost'];
				$density = $row['density'];
			}
			else if ($row['material'] == $matType) 
			{
				$machiningCost = $row['machiningCost'];
				$filamentCost = $row['filamentCost'];
				$density = $row['density'];
			}
			else if ($row['material'] == $matType) 
			{
				$machiningCost = $row['machiningCost'];
				$filamentCost = $row['filamentCost'];
				$density = $row['density'];
			}
			
        }
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

date_default_timezone_set('Europe/Istanbul');
$timezone = date_default_timezone_get();
//echo "The current server timezone is: " . $timezone;
$date = date('d/m/Y h:i:s a', time());


echo '<script>

	console.log("Your stuff here")

	var php_var = "<?php echo $php_var; ?>";

	var url_string = window.location.href;
	var url = new URL(url_string);
	var quantity = url.searchParams.get("para1");
	console.log("quantity: " + quantity);
	
	var x = url.searchParams.get("para2");
	console.log(x);	
	
	var y = url.searchParams.get("para3");
	console.log(y);	
	
	var z = url.searchParams.get("para4");
	console.log(z);	
	
	var machiningType = url.searchParams.get("para5");
	console.log(machiningType);	
	
	var materialtype = url.searchParams.get("para6");
	console.log(materialtype);
	
	var finalv = url.searchParams.get("para7");
	console.log(finalv);
	
	var finalh = url.searchParams.get("para8");
	console.log(finalh);
	
	var mrr = url.searchParams.get("para9");
	console.log(mrr);
	
	var machinename = url.searchParams.get("para10");
	console.log(machinename);
	
	var moldChecker = false;
	var mold = url.searchParams.get("para11");
	console.log("mold ", mold);
	if(mold == "" || mold == 0)
	{
		console.log("no molddddd");
		moldChecker = false;
	}
	else
	{
		console.log("yes molddddd");
		moldChecker = true;
	}
	
	
	
	function editPage(){
		
		var queryString = "?para1=" + quantity + "&para2=" + x + "&para3=" + y + "&para4=" + z + "&para5=" + machiningType + "&para6=" + materialtype 
			+ "&para7=" + finalv + "&para8=" + finalh + "&para9=" + mrr + "&para10=" + machinename + "&para11=" + mold;
		console.log("asdasdasd asd" , machinename);
		window.location.href = "index.html"+ queryString;
	
	}
	
	var volume= x*y*z;
	console.log("volume: " + volume);
	var density = '; echo $density; echo ';
	console.log("density: " + density);
	
	var gram = density * volume/ 1000;
	console.log("m: " + gram);	
	
	var matCost = '; echo $machiningCost; echo ';
	
	var materialcost = gram / 1000 * matCost;
	console.log("material cost: " + materialcost);
	
	var volumeremoved = volume - finalv;
	console.log("removed: " + volumeremoved);
	
	var tprocessing = volumeremoved / mrr;
	console.log("tprocessing: " + tprocessing);	
	
	
	var processingTime = tprocessing / 60 / 60;	
	console.log("machining time in hour: " + processingTime);
	var totalmachiningtime = processingTime * quantity;
	
	/////////////////////////////////////////////////////////////////////////////
	
	var machineprice = '; echo $machinePrice; echo ';
	console.log("machine price: " + machineprice);
	
	var machinetoolcostperhour = machineprice / (20 * 200 * 10); //year day hour
	console.log("mtcphr: " + machinetoolcostperhour);
	var machinetoolcost = machinetoolcostperhour * processingTime;
	console.log("mtcphr total: " + machinetoolcost);
	
	var workercost = 1.71;
	var totalcost = ((workercost * processingTime) + materialcost + machinetoolcost )* quantity;
	totalcost *= 1.1;
	console.log("total: "+ totalcost);
	//machining
	
	/////////////// 3d print starts here
	
	var matCost = '; echo $filamentCost; echo ';
	var machineprice3d = '; echo $machinePrice3d; echo ';
	
	var materialcost = gram / 1000 * matCost;
	console.log("material cost 3D: " + materialcost);
	
	var isPlastic = '; echo $isPlastic; echo ';
	var total3dtime = 0;
	
	if(isPlastic == 1)
	{
		var thicknessOfLayer = 0.1;
		var numOfLayer = finalh / thicknessOfLayer;
		console.log("num of layer: " + numOfLayer);
		var printerSpeed = 400;
	
		var finalArea = finalv / finalh;
		console.log("final area: " + finalArea);
		
		var totalArea = finalArea / 1.75; //1.75 filament thickness
		console.log("total area: " + totalArea);
		
		var time1 = numOfLayer * totalArea / printerSpeed;
		time1 /= 3600;
		total3dtime = time1 * quantity;
		console.log("3d timeeeeeeeeeeeeeeeeeeeeeeeeeee in hour: " + time1);
		
		var toolcostperhour3d = machineprice3d / (20 * 200 * 10); //year day hour
		console.log("toolcostperhour3d: " + toolcostperhour3d);
		var toolcost3d = toolcostperhour3d * time1;
		console.log("3d tool cost: " + toolcost3d);
		
		var totalcost3d = toolcost3d + materialcost;
		console.log("first total 3d cost: " + totalcost3d);
		totalcost3d *= quantity;
		totalcost3d *=1.1;
		console.log("total 3d cost: " + totalcost3d);
		
	}
	else{
		var volumephr = 150000; //150cm^3 per hour;
		var time = finalv / volumephr;
		total3dtime = time * quantity;
		console.log("3d timeeeeeeeeeeeeeeeeeeeeeeeeeee in hour: " + time);
	
	
		var toolcostperhour3d = machineprice3d / (20 * 200 * 10); //year day hour
		var toolcost3d = toolcostperhour3d * time;
		console.log("3d tool cost: " + toolcost3d);
	
		var totalcost3d = toolcost3d + materialcost;
		totalcost3d = totalcost3d * quantity * 1.1;
		
		console.log("total 3d cost: " + totalcost3d);
	}
	
	/////////////////////////////casting starts here
	
	
	var matCost = '; echo $machiningCost; echo ';
	console.log("matCost value ", matCost);
	var totalmatcostcast = quantity * (gram / 1000) * matCost;
	
	console.log("gram value ", (gram / 1000));
	console.log("totalmatcostcast value ", totalmatcostcast);
	var numofdays = ((gram / 1000) * quantity) / 8000;
	numofdays += 14;
	
	console.log("totalmatcostcast value ", totalmatcostcast);
	var numofhours1 = numofdays * 24;
	
	console.log("numofhours1 value ", numofhours1);
	var totallaborcost = numofhours1 * 1.71;
	
	console.log("totallaborcost value ", totallaborcost);
	var castingvalue ='; echo $castingvalue; echo ';	
	console.log("casting value ", castingvalue);
	
	console.log("MOLDMOLD ", mold);	
	var dummy = parseInt(mold);
	console.log("dummy ", dummy);	
	var abc = (totalmatcostcast + totallaborcost);
	console.log("abc ", abc);	
	abc = abc + dummy;
	console.log("dummy ", dummy);	
	console.log("newabc ", abc);	
	var totalcostsandcasting = abc * castingvalue;	
	console.log("totalcostsandcasting value ", totalcostsandcasting);	
	
	
	
	
	totalmachiningtime = totalmachiningtime.toFixed(2);
	total3dtime = total3dtime.toFixed(2);
	totalmachiningtime = Math.floor(totalmachiningtime);
	total3dtime = Math.floor(total3dtime);
	
	numofhours = totalmachiningtime.toFixed(2);
	
	var time12 = numofhours1;
	time12 = time12.toFixed(2);
	time12 = Math.floor(time12);
	
	
	console.log("totall machining time: " + totalmachiningtime);
	console.log("totall 3d time: " + total3dtime);
	
	var day3d = Math.floor(total3dtime/24);
	console.log("totall 3d day: " + day3d);
	var hour3d = total3dtime % 24;
	console.log("totall 3d hour: " + hour3d);
	
	var daymachining = Math.floor(totalmachiningtime/24);
	console.log("totall machining day: " + daymachining);
	var hourmachining = totalmachiningtime % 24;
	console.log("totall machining hour: " + hourmachining);
	
	var daycasting = Math.floor(time12/24);
	console.log("totall daycasting: " + daycasting);
	var hourcasting = time12 % 24;
	console.log("totall hourcasting: " + hourcasting);
	
	totalcost3d = totalcost3d.toFixed(2);
	totalcost = totalcost.toFixed(2);
	totalcostsandcasting = totalcostsandcasting.toFixed(2);
	
	
	var mattype1 = '; echo $matTypeCounter; echo ';
	console.log("mattypee: ", mattype1);
	var mattype2 ="";
	if(mattype1 == 1)
	{
		mattype2 = "ABS"
	}
	else if(mattype1 == 2)
	{
		mattype2 = "POM"
	}
	else if(mattype1 == 3)
	{
		mattype2 = "Stainless Steel 304"
	}
	else if(mattype1 == 4)
	{
		mattype2 = "Aliminum 6061"
	}
	
	var div = document.getElementById("myDiv");
	div.innerHTML += "Total cost to produce " +quantity+ " parts with " + mattype2;
	div.innerHTML += "<br>";
	div.innerHTML += "<br>";
	div.innerHTML += "Cost with 3D printing: " + totalcost3d+" $";
	div.innerHTML += "<br>";
	div.innerHTML += "Estimated time: " + day3d + " days, " + hour3d + " hours";
	div.innerHTML += "<br>";
	div.innerHTML += "<br>";
	div.innerHTML += "Cost with machining: " + totalcost+" $";
	div.innerHTML += "<br>";
	div.innerHTML += "Estimated time: " + daymachining + " days, " + hourmachining + " hours";
	
	if(moldChecker)
	{
		div.innerHTML += "<br>";
		div.innerHTML += "<br>";
		div.innerHTML += "Cost with casting: " + totalcostsandcasting+" $";
		div.innerHTML += "<br>";
		div.innerHTML += "Estimated time: " + daycasting + " days, " + hourcasting + " hours";
		document.cookie = "totalcostcasting = " + totalcostsandcasting;
		document.cookie = "daycasting = " + daycasting;
		document.cookie = "hourcasting = " + hourcasting;
	}
	else
	{
		document.cookie = "totalcostcasting = " + "";
		document.cookie = "daycasting = " + "";
		document.cookie = "hourcasting = " + "";
	}
	
	document.cookie = "quantity = " + quantity;
	document.cookie = "totalcost3d = " + totalcost3d;
	document.cookie = "totalcostmachining = " + totalcost;
	document.cookie = "day3d = " + day3d;
	document.cookie = "hour3d = " + hour3d;
	document.cookie = "daymachining = " + daymachining;
	document.cookie = "hourmachining = " + hourmachining;
	
	


</script>';

if(array_key_exists('test',$_POST)){
   sendMail();
}	
function sendMail() {	

	$quantity= $_COOKIE['quantity'];
	$totalcost3d= $_COOKIE['totalcost3d'];
	$totalcostmachining= $_COOKIE['totalcostmachining'];
	$day3d= $_COOKIE['day3d'];
	$hour3d= $_COOKIE['hour3d'];
	$daymachining= $_COOKIE['daymachining'];
	$hourmachining= $_COOKIE['hourmachining'];
	
	$totalcostcasting= $_COOKIE['totalcostcasting'];
	$daycasting= $_COOKIE['daycasting'];
	$hourcasting= $_COOKIE['hourcasting'];
	
	

	$to = $_POST['emails'];
	$subject = "Part Details";
	$message = "Hello!\r\nHere are your details:\r\n\r\nTotal cost to produce ";
	$message.= $quantity;
	$message.= " parts\r\n\r\n";
	$message.= "Cost with 3D printing: ";
	$message.= $totalcost3d;
	$message.= " $\r\nEstimated time for production: ";
	$message.= $day3d;
	$message.= " days, ";
	$message.= $hour3d;
	$message.= " hours\r\n\r\n";
	$message.= "Cost with machining: ";
	$message.= $totalcostmachining;
	$message.= " $\r\nEstimated time for production: ";
	$message.= $daymachining;
	$message.= " days, ";
	$message.= $hourmachining;	
	$message.= " hours\r\n\r\n";
	if($totalcostcasting != "" )
	{
		$message.= "Cost with casting: ";
		$message.= $totalcostcasting;
		$message.= " $\r\nEstimated time for production: ";
		$message.= $daycasting;
		$message.= " days, ";
		$message.= $hourcasting;	
		$message.= " hours\r\n\r\n";
		
	}
	$message.= "Have a nice day,\r\nENS492 Team";
	
	
	$headers = "From: ens492project@gmail.com\r\n";
	
	if (mail($to, $subject, $message, $headers)) {
		echo '<script language="javascript">';
		echo 'alert("Mail successfully sent")';
		echo '</script>';
	} 
	else {
		echo '<script language="javascript">';
		echo 'alert("Please enter a valid mail address")';
		echo '</script>';
	}
	 
}

?>






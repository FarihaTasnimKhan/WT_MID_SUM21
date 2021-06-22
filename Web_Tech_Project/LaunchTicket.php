<?php
$fromcity="";
$err_fromcity="";
$tocity="";
$err_tocity="";

$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
	
	
$err=false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["fromcity"])){
			$err_fromcity="Please choose departure city.";
			$err = true;
		}
		else{
			$fromcity=$_POST["fromcity"];
		}

if(empty($_POST["tocity"])){
			$err_tocity="Please choose destination city.";
			$err = true;
		}
		else{
			$tocity=$_POST["tocity"];
		}
		if (!isset($_POST["day"])){
				$err_day="Please select a DAY,";
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="MONTH";
		}
		else{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"])){
			$err_year="and YEAR";
		}
		else{
			$year=$_POST["year"];
		}

	if(!$err){
			echo "fromcity: ".htmlspecialchars($_POST["fromcity"])."<br>";
		    echo "tocity: ".htmlspecialchars($_POST["tocity"])."<br>";
			echo "day: ".htmlspecialchars($_POST["day"])."<br>";
			echo "month: ".htmlspecialchars($_POST["month"])."<br>";
			echo "year: ".htmlspecialchars($_POST["year"])."<br>";
			
			echo "Day1: ".htmlspecialchars($_POST["day1"])."<br>";
			echo "Month1: ".htmlspecialchars($_POST["month1"])."<br>";
			echo "Year1: ".htmlspecialchars($_POST["year1"])."<br>";
		}

}


?>


<html>
	<body>
	<title>Launch Ticket</title>
	<fieldset><form action="" method="post">
	<legend><h1>Launch Ticket</h1></legend>
	<form border>
	<table align = "center">
	<tr>
		<td>
		From
		</td>
		<td>
		<input type="text" placeholder="Enter City" name="fromcity" value="<?php echo $fromcity;?>"></td><td><span><?php echo $err_fromcity;?></span>

		</td>
	</tr>
	<tr>
		<td>
		To
		</td>
		<td>
		<input type="text" placeholder="Enter City" name="tocity" value="<?php echo $tocity;?>"></td><td><span><?php echo $err_tocity;?></span>
		
		</td>
	</tr>
		<tr>
				<td>Date of Journey</td>
					<td>
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
					</td>
					<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
	<tr>
				<td>Date of Return<br>(optional)</td>
					<td>
						<select name="day1">
							<option selected disabled>Day</option>
									<?php
										for($i1=1;$i1<=31;$i1++)
										{
											echo "<option>$i1</option>";
										}
									?>
						</select>
						<select name="month1">
						<option selected disabled>Month</option>
									<?php
										$mon1= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j1=0;$j1<count($mon);$j1++)
										{
											echo "<option>$mon[$j1]</option>";
										}
									?>
						</select>
						<select name="year1">
							<option selected disabled>Year</option>
									<?php
										for($k1=1948;$k1<=2020;$k1++)
										{
											echo "<option>$k1</option>";
										}
									?>
						</select>
					</td>
					
				</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Search Launches">
		</td>
	</tr>
	</table>	
	<form>
	</fieldset>
	</body>
</html>
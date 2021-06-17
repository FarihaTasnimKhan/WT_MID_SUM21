<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$Confirmpass="";
	$err_Confirmpass="";
	$Email="";
	$err_Email="";
	$Phone="";
	$err_Phone="";
	$Address="";
	$err_Address="";
	$Birthdate=[];
	$err_Birthdate="";
	$Gender="";
	$err_Gender="";
	
	
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		
		
		
	}
	
	?>

























<html>
	<head>
	<title>Club Member Registration</title>
	</head>
	<body>
	<h1>Club Member Registration</h1>
	
	
	<fieldset>  
	<form>
		
			<table> <table align="center" >
					
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" value="<?php echo $name;?>"</td><td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" </td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="text" ></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="text" ></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" ></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><input type="text" placeholder="Code">-<input type="text" placeholder="Number"></td>
					</tr>
					<tr>
					    <td>Address:</td>
						<td rowspan=""><input type="text" placeholder="Street Address"><br> <input type="text" placeholder="City">-<input type="text" placeholder="State">
						<br><input type="text" placeholder="Postal/Zip Code"></td>
					</tr>
					<tr>
						<td>Birth Date:</td>
						<td>
							<select>
								<option>Day</option>
								<option>5-10</option>
								<option>10-20</option>
								<option>20-30</option>
								<option>30-40</option>
								
								
							</select> 
							<select>
								<option>Month</option>
								<option>Jan</option>
								<option>Feb</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>Aug</option>
								<option>Sept</option>
								<option>Oct</option>
								<option>Nov</option>
								<option>Dec</option>
							</select> 
							<select>
								<option>Year</option>
								<option>1500-1900</option>
								<option>1990-2000</option>
								<option>2000-2010</option>
								<option>2010-2020</option>
								
							</select> 
						</td>
					</tr>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" name="gender"> Male <input name="gender" type="radio"> Female</td>
					</tr>
					<tr>
						<td><br>Where did you hear<br> about us?</td>
						<td colspan="4"><input type="checkbox">A Friend or a Collegue<br><input type="checkbox">Google<br><input type="checkbox">Blog Post<br><input type="checkbox">News Article</td>
					</tr>
					<tr>
						<td>Bio:</td>
						<td><textarea></textarea></td>
					</tr>
					<tr>
						<td align="center"><input type="submit" value="Register">
						</td>
						
					
					</tr>
	
	</table>
					
	</form>
	
	</fieldset>
	
	</body>
</html>					
		
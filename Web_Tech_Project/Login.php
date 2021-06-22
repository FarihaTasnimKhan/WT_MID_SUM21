
<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["username"])){
			$err_uname="Username Required!!";
			$err = true;
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required!!";
			$err = true;
			}
	else{
			$pass = $_POST["password"];
		}
		
		if(!$err){
			echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
		    echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
		}
	}
?>


<html>
	<body><title>Login</title>
	<fieldset><form action="" method="post">
	<legend><h1>Ticket Management System</h1></legend>
	<form border>
	<table align = "Right">
	<tr>
		<td>
		Username
		</td>
		<td>
			<input type="text" placeholder="Username" name="username" value="<?php echo $uname;?>"></td><td><span><?php echo $err_uname;?></span>
			
		</td>
	</tr>
	<tr>
		<td>
		Password
		</td>
		<td>
			<input type="password" placeholder="password" name="password" value="<?php echo $pass;?>"></td>
					<td><span><?php echo $err_pass;?></span>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="Forget Pass\forgetpass.php">Forget Password</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Log In">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Create Account">
		</td>
	</tr>
	</table>	
	<form>
	</fieldset>
	</body>
</html> 
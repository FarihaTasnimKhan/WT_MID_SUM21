<html>
	<body>
	
	
	<h1><b>Problem 3</b></h1>
	<?php
	$length_of_rectange="10";
	$width_of_rectangle="10";
	
	$Perimeter=2*($length_of_rectange+$width_of_rectangle);
	$area=$length_of_rectange*$width_of_rectangle;
	
	echo "The perimeter of rectangle is: ".$Perimeter; 
	echo "<br>The area of rectangle is: ".$area;
	
	if($length_of_rectange==$width_of_rectangle)
	{
		echo"<br>The shape is a square.";
	}
	else{echo "<br>The shape is not a square";}
	
	?>
	</body>
</html>
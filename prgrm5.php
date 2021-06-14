<!DOCTYPE html>
<html>
<head>
	<title>switch</title>
    <style>
p
{
color:green;
font-size:60px;
text-align:center;

}
body
{

    background-color:pink;
}

    </style>
</head>

<body>
   <center>
	<b><h1 style="color:black;">ARITHMETIC OPERATIONS</h1></b>
	<h3>1)Addition</h3>
	<h3>2)Subtraction</h3>
	<h3>3)Multiplication</h3>
	<h3>4)Division</h3>
	
	<form method="post">	
	<input type="text" name="num1" value="" placeholder="Enter the value"/>
	<input type="text" name="num2" value="" placeholder="Enter the value"/>
	 <input type="text" name="option" value="" placeholder="Enter  any option  from 1 to 4 "/><br>
	<input type="submit" style="background-color:pink;" name="submit" value="RESULT"/>
	</form>
</center>

<?php

// Checking submit condition
if(isset($_POST['submit'])) 
{
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$ch = $_POST['option'];
	switch($ch) 
	{
     
		case 1:	$r = $a + $b;
			echo " <p>Addition of two numbers =<p> " . $r ;
			break;

		case 2:	$r = $a - $b;
			echo "<p> Subtraction of two numbers=<p> " . $r ;
			break;

		case 3:	$r = $a * $b;
			echo "<p> Multiplication of two numbers =<p> " . $r ;
			break;

		case 4:	$r = $a / $b;
			echo "<p> Division of two numbers =<p> " . $r ;
			break;

		default: echo ("invalid option\n");
	}
	return 0;
}
?>
</body>
</html>

<html>
<body>

 <form method="POST">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html>
<?php
if($_POST)
{
$number=$_POST['number'];
$f1=0;
$f2=1;
$F3=NULL;
	if($number==1)
	{
		return $f1;
	}
	else if($number==2)
	{
		return $f2;
	}
	else
	{
		for ($i=2;$i<$number;$i++)
		{
			$f3=$f1+$f2;
			
			$f1=$f2;
			$f2=$f3;
           return $f3;
		}
       
	}
    echo "THE ANSWER IS ".$f3;

}


?>

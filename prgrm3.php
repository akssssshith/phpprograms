<html>
<head>
<title>php reverse program</title>
<style>
p{


    color:green;
    font-size:20px;
}

</style>
</head>
<body>

<form method="post"> 

<b>Enter any number: <input type="text" name="a"/><br> </b> 
<button type="submit">Click to check</button>  
</form>
</body>
</html>  
<?php   
    if($_POST)  
    {  
	$sum=0;
        $n = $_POST['a'];  
        
        $reverse = strrev($n);  
        if($n== $reverse)
	{  
            echo "<p>NUMBER $n IS PALINDROME</P>";     
        }
	else
	{  
            echo " NUMBER $n IS NOT A PALINDROME";   
        } 

$sum=0;
$rem=0;
 for ($i =0; $i<=strlen($n);$i++)  
 {  
  $rem=$n%10;  
   $sum = $sum + $rem;  
   $n=$n/10;  
  } 
echo "<br>";
echo "SUM OF GIVEN DIGIT IS: $sum";
}     
      ?>  
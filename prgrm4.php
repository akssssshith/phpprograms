<html>  
<head>
</head>
<body>  
 <form method="post">  
 Enter Number:  
   <input type="number" name="num">  
   <input type="submit" value="result">  
  </form>  
</body>  
</html>  
<?php  
 if($_POST)  
 {   
  //get the number entered  
  $num = $_POST['num'];  
  //store entered number in a variable  
  $a = $num;  
  $sum  = 0;  
//run loop till the quotient is 0  
  while( $a != 0 )  
  {  
   $rem   = $a % 10;   
   $sum   = $sum + ( $rem * $rem * $rem );   
   $a   = $a / 10; 
  }  
  //entered number and sum value matches then it is an armstrong number .. 
  if( $num == $sum )  
  {  
   echo " $num is Armstrong Number";  
  }else  
  {  
   echo "$num it is not an Armstrong Number";  
  }  
 }  
?>     
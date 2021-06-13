<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Armstrong number</title>
</head>
<body>  
  <center>
 <form method="post">  
   <h1>Check whether given number is Armstrong or not</h1>
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form> 
</center> 
<?php  
 if($_POST)  
 {   
  $number = $_POST["number"];  
 
  $a = $number;  
  $sum  = 0;  

  while( $a != 0 )  
  {  
   $rem   = $a % 10;  
   $sum   = $sum + ( $rem * $rem * $rem );  
   $a     = $a / 10; 
  }  
 
  if( $number == $sum )  
  {  
   echo "$number is an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
 }  
?>     
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fibonacci series and prime number</title>
</head>
<body>
<center>
<h2> Fibonacci series and display prime number in that
series.</h2>
<form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</center>


<?php
if($_POST)  
{  
$num=$_POST["number"];
$i=3;
  
$n1 = 0;  
$n2 = 1; 
$last=$n2; 
echo "<h3>Fibonacci series for first ".$num." numbers: </h3>";  
echo "\n";  
echo $n1." ".$n2." ";  
while ($i <= $num )  
{  
    $n3 = $n1 + $n2;  
    echo $n3." ";  
    $n1 = $n2;  
    $n2 = $n3;  
    $i = $i + 1;  
	$last=$n2;
}

$count=0;
$num=2;
$n2=1;
$n3=2;
echo "<h3>Prime numbers in the given fibonacci series :</h3>";  

while($count<$last)
{
	$count1=0;
	while($num==$n3)
	{
		if($last>2)
		{
			for($i=1;$i<=$num;$i++)
			{
				if(($num%$i)==0)
				{
					$count1++;
				}
			}
			if($count1<3){
				echo $num." ";
			}
		}
		$n1=$n2;
		$n2=$n3;
		$n3=$n1+$n2;
	}
	$num=$num+1;
	$count=$count+1;
}
}

?>
</body>
</html>
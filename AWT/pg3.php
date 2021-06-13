<?php

$input = $_GET["num"];  
$number = $input;
$rev = 0;$sum=0;  
while(floor($number)) {  
$rem = $number % 10;  
$rev = $rev * 10 + $rem;
$sum = $sum + $rem;   
$number = $number/10;  
}  

echo "Reverse of number ".$input." is ".$rev."<br>";   
echo "Sum of number is: ". $sum."<br>";    
if($input==$rev){  
echo "$input is a Palindrome number<br>";  
} else {  
echo "$input is not a Palindrome<br>";  
}  
 

?>
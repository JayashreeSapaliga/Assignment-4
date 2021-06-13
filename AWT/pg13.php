<?php
$num='';
$result='';
	if(isset($_POST['submit'])) {
		$num = $_POST['number'];
		$result = factorial($num);
	}
function factorial($n)
{
	if($n >= 0)
	{
		if($n == 0)
	    {
		   return 1;
	    }
	  	else 
	    {	
		   return $n * factorial($n-1);
	    }
	}
	else
	{
		return 'Invalid!!';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fatorial number</title>
</head>
<body><center>
	<div>
		<h1>Factorial</h1>
		<form method="post">
			<label>Enter the number</label>
			<input name="number" placeholder="Enter number">
			<br>
			<br>
			<input type="submit" name="submit">
			<br>
			<br>
		</form>
	</div>
	<h3><?php echo 'Factorial of <b> '. $num . '</b> is <b>' . $result ;  ?></h3></center>
</body>
</html>
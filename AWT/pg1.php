
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>Random</title></head>
<body>
<p>
<?php

$num1 = rand();

echo "Random number is : " . $num1 . "<br>";
echo "And square root of ".$num1." is ".sqrt($num1)."<br>";

$num2 = rand(1, 100);

echo "Random number in range (1, 100): ". $num2. "<br>";
echo "And square root of ".$num2." is ".sqrt($num2);

?>
</p>
</body>
</html>
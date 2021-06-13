<!DOCTYPE html>

<head>
    <title>Calculate Electricity Bill</title>
</head>
<style>
    input{
        margin:20px;
    }
</style>
<body>

    <h1>Calculate Electricity Bill</h1>

    <form method="post">
        <label>Enter previous reading</label>
        <input type="number" name="previous" placeholder="Please enter previous reading" /><br>
        <label>Enter present reading</label>
        <input type="number" name="present"  placeholder="Please enter present reading" />
        <input type="submit" name="unit-submit" value="Submit" />
    </form>

  <?php 

if ($_POST) {
    $prev = $_POST["previous"];
    $pre = $_POST["present"];
    $units=$pre-$prev;
    $total=0;
    if($units<100)
    {
        $total=$units*3;
    }
    else if($units >= 100 && $units <= 200)
    {
        $total=$units*4;
    }
    else if($units > 200 && $units <= 300)
    {
        $total=$units*5;
    }
    else if($units >300)
    {
        $total=$units*6;
    }
        echo "The Previous Reading is ".$prev;
        echo "</br>";        
        echo "The Present Reading is ".$pre; 
        echo "</br>";
        echo "The Units is ".$units; 
        echo "</br>";
        echo "Total bill amount is ".abs($total);
        echo "</br>";
}
?>

</body>

</html>
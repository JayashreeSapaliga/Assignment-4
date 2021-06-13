<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Store</title>
</head>
<body>
     <h2 align="center">
        Bill
    </h2>
     <?php
     if($_POST)  
    {   
        $names = $_POST["names"]; 
        $price = $_POST["price"];

        $nme = explode(',',$names);
        $x = count($nme);

        $prc = explode(',',$price);

        echo '<body><center><table border="1px">
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
    }
    echo "<tr>";
echo "</table></center>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo 'Costliest item Is: '.$nme[$ky];

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is: '.$nme[$key];
        echo '<br>';
        echo 'Total Amount Is: '.$total;

}     
?>
<br>
    <form method="post" action="pg11.html">
        <input type="submit" name="submit" value="Back"/>
    </form>
</body>
</html>

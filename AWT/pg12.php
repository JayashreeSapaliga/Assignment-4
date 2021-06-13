<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bill the selected Item</title>
</head>

<body>
    <center>
        <h2> Please select your item:</h2>
        <form action="" method="POST">
            <select name="item" onchange="this.form.submit();">
                <option value="">Select</option>
                <option value="Pencil">Pencil</option>
                <option value="Book">Book</option>
                <option value="Pen">Pen</option>
           </select>
        </form>
    </center>

    <?php  
    if($_POST)  
    {   

        $item = array(    
            0 =>  array(  
                "no" => 1,
                "name"   => "Pencil",  
                "price"    =>  10.00,
                "code" =>1002
            ),  
            1   =>  array(  
                "no" => 2,
                "name"   => "Book",  
                "price"    =>  50.00,
                "code" =>1003
            ), 
            2   =>  array(  
                "no" => 3,
                "name"   => "Pen",  
                "price"    =>  20.00,
                "code" =>1004
            )
        );

        $key = array_search($_POST["item"], array_column($item, 'name'));
      
        if (array_search($_POST["item"], array_column($item, 'name')) !== FALSE)
        {
            echo '<form method="GET" action="display_bill.php">
            <table border="1">

                <tr>
                <th>Description</th>
                <th>Values</th>
                </tr>
                <tr>
                   <th>SL.No</th>
                   <td><input type="number" name="no" value="'.$item[$key]["no"].'" readonly></td></tr>
                   <tr><th>Item name</th>
                   <td><input type="text" name="name" value="'.$item[$key]["name"].'" readonly></td></tr>
                   <tr><th>Item Price</th>
                   <td><input type="number" name="price" value="'.$item[$key]["price"].'" readonly></td><tr>
                   <tr><th>Item code</th>
                   <td><input type="number" name="code" value="'.$item[$key]["code"].'" readonly></td><tr>
                   <tr><th>Quantity</th>
                    <td><input type="number" name="qty" required></td><tr>
                   </table>';

                   echo '<input type="submit" value="Bill" name="bill"></td>';
        }            
    }                 
   ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>DigitalClock</title>
    <style>
        p{
            top:50%;
            Left: 50%;
            font-size:90px;
        }
    </style>
</head>
<body>
    <p><?php 
    date_default_timezone_set("Asia/kolkata");
    echo date("h:i:sA");?></p>
</body>
</html>

<html>
<head><title> String Operations</title></head>
<body>
<center>
     <h2>
        String Operations
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <input type="radio" name="string"  value="reverse" required/>Reverse
        <input type="radio" name="string"  value="length"/>Length of String
        <input type="radio" name="string"  value="substring"/>Substring
        <input type="radio" name="string"  value="upper"/>Uppercase
        <input type="radio" name="string"  value="lower"/>Lowercase
        <input type="radio" name="string"  value="words"/>Number of words
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST["string"];
        $txt = $_POST["txt"];

        switch($string){
            case "reverse": $reverse = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $reverse;
                            break;
            case "length": $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case "substring":$sub = substr($txt, 5, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case "upper": $upper = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $upper;
                            break;
            case "lower":$lower = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $lower;
                            break;
            case "words":$word = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $word;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>



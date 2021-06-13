<?php

$eno = $_POST["eno"]; 
$fname = $_POST["fname"]; 
$lname = $_POST["lname"]; 
$address = $_POST["address"]; 
$gender = $_POST["gender"]; 
$design = $_POST["design"]; 
$pno = $_POST["pno"]; 
$category = $_POST["emp_category"]; 

$basic = $_POST["salary"];

$finame = $_FILES["photo"]["name"]; 
$ftype=$_FILES["photo"]["type"];
$fsize=$_FILES["photo"]["size"];
$floc=$_FILES["photo"]["tmp_name"];
$fstore="uploads/".$finame;
move_uploaded_file($floc,$fstore); 

       
        $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($category == "Part Time")
        {
            $hours= $_POST["hours"]; 
            $salary = $hours * 100;
        }
        else if ($category == "Full Time")
        {
            
            if($basic < 10000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            else if($basic < 50000 and $basic >=10000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 50000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
        else if ($category == "Contract")
        {
            
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            else if($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            else if($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }

        echo ' <h3>Employee Details</h3>
          <table cellpadding="10px">
            <tr>
                <td><label>Emp image</label></td>
                <td><image src="'.$fstore.'" height="100" width="100"></td>
            </tr>

            <tr>
                <td><label>Emp NO</label></td>
                <td>'.$eno.'</td>
            </tr>

            <tr>
                <td><label>First name</label></td>
                <td>'.$fname.'</td>
            </tr>

            <tr>
                <td><label>Last Name</label></td>
                <td>'.$lname.'</td>
            </tr>

            <tr>
                <td><label>Address</label></td>
                <td>'.$address.'</td>
            </tr>

            <tr>
                <td> <label>Gender</label></td>
                <td>'.$gender.'</td>
            </tr>

            <tr>
                <td><label>Designation</label></td>
                <td>'.$design.'</td>
            </tr>

            <tr>
                <td><label>Phone-number</label></td>
                <td>'.$pno.'</td>
            </tr>

            <tr>
                <td><label>Emp Category </label></td>
                <td>'.$category.'</td>
            </tr>

            <tr>
                <td><label>Basic salary</label></td>
                <td>'.$basic.'</td>
            </tr>
        </table>';

        if($category == "Part Time")
        {
            echo "Number Of Hours $hours";
            
        echo "The Basic Salary $basic"; 
        echo "</br>";
        echo "The Salary  $salary";          
        }
        else if($category == "Full Time"){
        echo "The Basic Salary  $basic "; 
        echo "</br>";
        echo "The DA  $da"; 
        echo "</br>";        
        echo "The HRA  $hra"; 
        echo "</br>";
        echo "The PF  $pf"; 
        echo "</br>";
        echo "The Tax  $tax"; 
        echo "</br>";
        echo "The Gross Salary $gross"; 
        echo "</br>";
        echo "The Net Salary $salary"; 
        echo "</br>";            
        }
        else if($category == "Contract"){

        echo "The Basic Salary $basic"; 
        echo "</br>";
        echo "The DA  $da"; 
        echo "</br>";        
        echo "The HRA is $hra"; 
        echo "</br>";
        echo "The Tax $tax"; 
        echo "</br>";
        echo "The Gross Salary $gross"; 
        echo "</br>";
        echo "The Net Salary  $salary"; 
        echo "</br>";            
        }   


?>
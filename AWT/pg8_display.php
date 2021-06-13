<?php   

   $fname = $_POST["fname"];  
   $mname = $_POST["mname"]; 
   $lname = $_POST["lname"]; 

   $faname = $_POST["faname"]; 
   $address = $_POST["address"]; 
   $cno = $_POST["cno"]; 
   $email = $_POST["email"]; 
   $dob = $_POST["dob"]; 
   $gender = $_POST["gender"]; 
   $percentage = $_POST["percentage"]; 
   $hobbies = $_POST["hobbies"]; 
   $inst_studied = $_POST["inst_studied"]; 
   $course =$_POST["course"];
   $crs = $_POST["course1"];
   
     
     $finame = $_FILES["file"]["name"]; 
     $ftype=$_FILES["file"]["type"];
     $fsize=$_FILES["file"]["size"];
     $floc=$_FILES["file"]["tmp_name"];
     $fstore="uploads/".$finame;
     move_uploaded_file($floc,$fstore);



    $form='<html>
    <head></head>
    <body>
        <h1 align="center">Application Form</h1>
        <center>
            <table cellpadding="10px" width="600px;" style="position:center;">
                <tr>
                    <td><image src="'.$fstore.'" height="100" width="100"></td>
                </tr>
            
                <tr>
                    <td><label>First name</label></td>
                    <td>'.$fname.'/td>
                </tr>

                <tr>
                    <td><label>Middle Name</label></td>
                    <td>'. $mname.'</td>
                </tr>

                <tr>
                    <td><label>Last Name</label></td>
                    <td>'.$lname.'</td>
                    <td></td>
                </tr>

                <tr>
                    <td><label>Father Name</label></td>
                    <td>'.$fname.'</td>
                </tr>

                <tr>
                    <td><label>Address</label></td>
                    <td>'.$address.'</td>
                </tr>

                <tr>
                    <td><label>contact Number</label></td>
                    <td>'.$cno.'</td>
                </tr>

                <tr>
                    <td><label>Email Id</label></td>
                    <td>'.$email.'</td>
                </tr>

                <tr>
                    <td><label>Date of Birth</label></td>
                    <td>'.$dob.'</td>
                </tr>

                <tr>
                    <td> <label>Gender</label></td>
                    <td>'.$gender.'</td>
                </tr>

                <tr>
                    <td><label>Percentage in Degree</label></td>
                    <td>'.$percentage.'</td>
                </tr>

                <tr>
                    <td><label>Hobbies</label></td>
                    <td>'.$hobbies.'</td>
                </tr>

                <tr>
                    <td> <label>Institution studied</label></td>
                    <td>'.$inst_studied.'</td>
                </tr>

                <tr>
                    <td><label>Course Studied</label></td>
                    <td>'.$crs.'</td>
                </tr>

                <tr>
                    <td><label>Course Offered</label></td>
                    <td>'.$course.'</td>
                </tr>
            </table>
        </center>
   </body>
    </html>';

    $back='<a href="pg8.php">GO BACK</a>';

        if( $course == "MCA" || $course == "MTech"){
            if( $percentage >= 70){
                if($course =="MTech" && $crs == "B.E"){                    
                echo '<script>alert("Registration Successful ");</script>';
                echo $form;
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                echo $back;
                }
                if($course =="MCA" && ($crs == "BCA" || $crs == "BSc")){                    
                echo '<script>alert("Registration Successful ");</script>';
                echo $form;
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                echo $back;
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 70%"); </script>';
                echo $back;
            }
        }
        else if($course == "MBA"){
            if( $percentage >= 60){
                echo '<script>alert("Registration Successful "); </script>';
                echo $form;
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 60%"); </script>';
                echo $back;
            }
        }
        else{
            if( $percentage >= 40){
                if($course =="MSc" && ($crs == "BCA" || $crs == "BSc")){                    
                echo '<script>alert("Registration Successful ");</script>';
                echo $form;
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                echo $back;
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 40%"); </script>';
                echo $back;
            }
        }
?>

    
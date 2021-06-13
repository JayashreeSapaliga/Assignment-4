<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
</head>

<body>
    <h1 align="center">Application form</h1>
    <form action="pg8_display.php" method="post" enctype="multipart/form-data">
        <center>
            <table cellpadding="10px" border="1px;">
                <tr>
                    <td><label>First name</label></td>
                    <td><input type="text" name="fname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Middle Name</label></td>
                    <td><input type="text" name="mname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Last Name</label></td>
                    <td><input type="text" name="lname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Photo</label></td>
                    <td><input type="file" name="file" required /></td>
                </tr>

                <tr>
                    <td><label>Father Name</label></td>
                    <td><input type="text" name="faname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Address</label></td>
                    <td><textarea name="address" placeholder="Your answer" required></textarea></td>
                </tr>

                <tr>
                    <td><label>contact Number</label></td>
                    <td><input type="number" name="cno" maxlength="10" placeholder="Your answer" required/></td>
                </tr>

                <tr>
                    <td><label>Email Id</label></td>
                    <td><input type="email" name="email" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Date of Birth</label></td>
                    <td><input type="date" name="dob" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td> <label>Gender</label></td>
                    <td><input type="radio" name="gender" id="gender" value="male" required/>
                        <label for="gender">Male</label>
                        <input type="radio" name="gender" id="gender" value="female" />
                        <label for="gender">Female</label></td>
                </tr>

                <tr>
                    <td><label>Percentage in Degree</label></td>
                    <td><input type="number" name="percentage" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Hobbies</label></td>
                    <td><input type="checkbox" id="hobby" name="hobbies" value="Reading" required />
                        <label for="h1"> Reading</label><br>
                        <input type="checkbox" id="h2" name="hobbies" value="Dancing" />
                        <label for="h2"> Dancing</label><br>
                        <input type="checkbox" id="h3" name="hobbies" value="Cycling" />
                        <label for="h3"> Cycling</label><br><br></td>
                </tr>

                <tr>
                    <td> <label>Institution studied</label></td>
                    <td> <textarea name="inst_studied" placeholder="Your answer" required></textarea></td>
                </tr>

                <tr>
                    <td><label>Course Studied</label></td>
                    <td><input type="radio" name="course1" id="bca" value="BCA" required />
                        <label for="gender">BCA</label>
                        <input type="radio" name="course1" id="bsc" value="BSc" />
                        <label for="gender">BSc</label>
                        <input type="radio" name="course1" id="bcom" value="B.Com" />
                        <label for="gender">B.Com</label>
                        <input type="radio" name="course1" id="be" value="B.E" />
                        <label for="gender">B.E</label></td>
                </tr>

                <tr>
                    <td><label>Course Offered</label></td>
                    <td><select name="course" required>
                                    <option value="">Select</option>
                                    <option  id="MCA"  value="MCA"> MCA</option>
                                    <option  id="MBA" value="MBA"> MBA</option>
                                    <option  id="M.Tech"  value="M.Tech"> M.Tech</option>
                                    <option  id="MSc"  value="MSc">MSc</option>
                            </select></td>
                </tr>

                <tr>
                    <td><input type="submit" value="submit" name="Show" /></td>
                    <td><input type="reset" value="Reset" name="Reset" /> </td>
                </tr>
            </table>
        </center>

    </form>
<!--  -->
</body>

</html>
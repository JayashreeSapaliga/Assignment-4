<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee form</title>
    <script type="text/javascript">
        function Category(val) {
            var cat = val;
            if (cat == "Part Time") {
                document.getElementById("hours").disabled = false;
            } else {
                document.getElementById("hours").disabled = true;
            }
        }
    </script>
</head>

<body>
    <h1 align="center">Employee form</h1>
    <form method="post" enctype="multipart/form-data" action="pg9_display.php">
        <center>
            <table cellpadding="10px" border="1px;">
                <tr>
                    <td><label>Emp image</label></td>
                    <td><input type="file" id="photo" name="photo" required></td>
                </tr>

                <tr>
                    <td><label>Emp NO</label></td>
                    <td><input type="number" name="eno" maxlength="10" placeholder="Your answer" required/></td>
                </tr>

                <tr>
                    <td><label>First name</label></td>
                    <td><input type="text" name="fname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Last Name</label></td>
                    <td><input type="text" name="lname" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Address</label></td>
                    <td><textarea name="address" placeholder="Your answer" required></textarea></td>
                </tr>

                <tr>
                    <td> <label>Gender</label></td>
                    <td><input type="radio" name="gender" value="male" required/>Male
                        <input type="radio" name="gender" value="female" />Female</td>
                </tr>

                <tr>
                    <td><label>Designation</label></td>
                    <td><input type="text" name="design" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Phone-number</label></td>
                    <td><input type="number" name="pno" placeholder="Your answer" required /></td>
                </tr>

                <tr>
                    <td><label>Emp Category </label></td>
                    <td><select name="emp_category" onChange="Category(this.value)" required>
                                    <option value="">Select</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Full Time">Full Time </option>
                                    <option value="Contract">Contract</option>
                            </select></td>
                </tr>

                <tr>
                    <td><label>Number Of Hours</label></td>
                    <td><input type="number" name="hours" id="hours" value="0" placeholder="Your answer" disabled/></td>
                </tr>

                <tr>
                    <td><label>Basic salary</label></td>
                    <td><input type="number" name="salary" placeholder="Your answer" required /></td>
                </tr>

                <div>
                    <td> <input type="submit" value="submit" name="Show"></td>
                    <td> <input type="reset" value="Reset" name="Reset"></td>
                </div>
            </table>
        </center>
    </form>

</body>

</html>
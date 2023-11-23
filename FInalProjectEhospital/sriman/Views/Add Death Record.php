<html>
<head>
    <title>Form</title>
</head>
<body >
<a href="../Views/Death_Record.php"><button>BACK</button></a>

    <form method="post" action="../Controls/addDeathRecordCheck.php" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
            <table align= "center">
                <tr>
                    <td>Date of Death</td>
                    <td><input type="date" name="deathDOB"/></td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td><input type="time" name= "deathTIME"></td>
                </tr>
                <tr>
                    <td>Name of Deceased</td>
                    <td><input type="text" name= "deathNAME"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="deathgender" value="Male"/> Male
                        <input type="radio" name="deathgender" value="Female"/> Female
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="deathAGE"></td>
                </tr>
                <tr>
                    <td>Cause of Death</td>
                    <td><input type="text" name="deathCAUSE"/></td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td>
                        <input type="text" name= "deathOCCUP">
                    </td>
                </tr>
                <tr>
                    <td>Father's Name:</td>
                    <td><input type="text" name= "deathFATHER"></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><input type="text" name= "deathMOTHER"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="btn" value="Submit"> 
                    </td>
                </tr>
            </table>
    </fieldset>
    </form>


</body>
</html>
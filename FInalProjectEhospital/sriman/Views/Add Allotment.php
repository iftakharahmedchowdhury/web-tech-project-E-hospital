<html>
<head>
<link rel="stylesheet" href="../Assets/style.css">
    <title>Form</title>
</head>
<body class="font appoinmentBG">
    <form method="post" action="../Controls/Add Allotment Check.php" enctype="">
        <fieldset class="fieldset ">
            <legend>Add In Record</legend>
        <table class=" href recordFieldset1">
                <tr>
                    <td>Patient Name:</td>
                    <td><input type="text" name = "patientNAME"></td>
                </tr>
                <tr>
                    <td>Alloted Date:</td>
                    <td><input type="date" name = "allotedDATE"></td>
                </tr>
                <tr>
                    <td>Alloted Time:</td>
                    <td><input type="time" name = "alloteTIME"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btn" value="ADD"> 
                    </td>
                </tr>
            </table>
    </fieldset>
    </form>

<a href="BedAllotment.php"><button class="submitButton">BACK</button></a>

</body>
</html>
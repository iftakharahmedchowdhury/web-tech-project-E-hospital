<!DOCTYPE html>
<html>
<head>
    <title>E-Hospital Admission</title>
</head>
<body>

<form action="../Controls/addmissionCheck.php" method="post" enctype="">

    <fieldset>
        <legend>Patient Admission Informations</legend>

        <table>
                <tr>
                    <td>Patient Name:</td>
                    <td>
                        <input type="text" name= "AdmissionName" value= "">
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="AdmissionDOB"></td>
                </tr>
                <tr>
                    <td>Admission Date:</td>
                    <td><input type="date" name= "AdmissionDATE"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td>
                        <input type="text" name="AdmissionAGE"/> 
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="AdmissionGND" value="Male"/> Male
                        <input type="radio" name="AdmissionGND" value="Female"/> Female
                        <input type="radio" name="AdmissionGND" value="Other"/> Other
                    </td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><input type="text" name= "AdmissionADD"></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="number" name= "AdmissionPHN"></td>
                </tr>
                <tr>
                    <td>Mail Address:</td>
                    <td><input type="mail" name= "AdmissionMAIL"></td>
                </tr>

                <tr>
                    <td>Diagnosis At Admittance:</td>
                    <td><input type="Text" name = "AdmissionDIAG"></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="btn" value="Submit"> 
                    </td>
                </tr>



        </table>

    </fieldset>
</form>

</body>
</html>
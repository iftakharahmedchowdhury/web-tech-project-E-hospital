<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null Data Found!!";
        }
    }
?>

<html>
<head>
    <title>E-Hospital</title>
    <script src=../Assets/logValScript.js></script>

</head>
<body>
<a href="Staff Member Database.php"><button>BACK</button></a>

    <form id= "empValid" method="post" action="../Controls/addEmpCheck.php" enctype="" onsubmit="return addEmployeeValidation()">
        <fieldset>
            <legend>Add In Record</legend>
        <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="usernameEMP" id= "useID"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="userAlert"></h5></td>
                </tr>

                <tr>
                    <td>Position: </td>
                    <td>
                        <input type="radio" name="PositionEmp" value="Doctor" id="empPid"/> Doctor
                        <input type="radio" name="PositionEmp" value="Nurse" id="empPid"/> Nurse
                        <input type="radio" name="PositionEmp" value="Receptionist" id="empPid"/> Receptionist
                        <input type="radio" name="PositionEmp" value="Accountant" id="empPid"/> Accountant
                        <input type="radio" name="PositionEmp" value="Laboratory Helper" id="empPid"/> Laboratory Helper
                        <input type="radio" name="PositionEmp" value="Pharmacist" id="empPid"/> Pharmacist

                    </td>                
                </tr>
                <tr>
                    <td align="right"><h5 id="PosAlert"></h5></td>
                </tr>

                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" name="NameEMP" id="empFid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="FirstAlert"></h5></td>
                </tr>

                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dobEmp" id= "empDBid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="DobAlert"></h5></td>
                </tr>

                <tr>
                    <td>Age:</td>
                    <td><input type="text" name= "ageEmp" id="empAid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="AgeAlert"></h5></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="genderEmp" value="Male" id="empGid"/> Male
                        <input type="radio" name="genderEmp" value="Female" id="empGid"/> Female
                        <input type="radio" name="genderEmp" value="Other" id="empGid"/> Other
                    </td>
                </tr>
                <tr>
                    <td align="right"><h5 id="GenAlert"></h5></td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><input type="text" name= "addressEmp" id="empAid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="AddAlert"></h5></td>
                </tr>

                <tr>
                    <td>Phone Number:</td>
                    <td><input type="number" name= "phoneEmp" id="empPHid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="PhoneAlert"></h5></td>
                </tr>

                <tr>
                    <td>Mail Address:</td>
                    <td><input type="mail" name= "mailEmp" id="empMaiid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="MailAlert"></h5></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "passwordEmp" id="empPassid"></td>
                </tr>
                <tr>
                    <td align="right"><h5 id="PassAlert"></h5></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="btn" value="Submit"/>
                    </td>
                </tr>

            </table>

    </fieldset>
    </form>
</body>
</html>
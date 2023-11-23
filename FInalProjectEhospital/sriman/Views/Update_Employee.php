<?php 
session_start();
//require_once "../Models/staffmemberDBmodel.php";

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
</head>
<body>
    <form method="post" action="../Controls/UpdateEmpCheck.php" enctype="">
        <fieldset>
            <legend>Update In Record</legend>
        <table>
                <tr>
                    <td>Position: </td>
                    <td>
                        <input type="radio" name="UpPositionEmp" value="Doctor"/> Doctor
                        <input type="radio" name="UpPositionEmp" value="Nurse"/> Nurse
                        <input type="radio" name="UpPositionEmp" value="Receptionist"/> Receptionist
                        <input type="radio" name="UpPositionEmp" value="Accountant"/> Accountant
                        <input type="radio" name="UpPositionEmp" value="Laboratory Helper"/> Laboratory Helper
                        <input type="radio" name="UpPositionEmp" value="Pharmacist"/> Pharmacist

                    </td>                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="UpNameEmp"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="UpdobEmp"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="text" name= "UpageEmp"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="UpgenderEmp" value="Male"/> Male
                        <input type="radio" name="UpgenderEmp" value="Female"/> Female
                        <input type="radio" name="UpgenderEmp" value="Other"/> Other
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name= "UpaddressEmp"></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="number" name= "UpphoneEmp"></td>
                </tr>
                <tr>
                    <td>Mail Address:</td>
                    <td><input type="mail" name= "UpmailEmp"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name = "UppasswordEmp"></td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="btn" value="Update"> 
                    </td>
                </tr>

            </table>
       
    </fieldset>
</form>
    <a href="../Views/Staff Member Database.php"><button>BACK</button></a>

</body>
</html>
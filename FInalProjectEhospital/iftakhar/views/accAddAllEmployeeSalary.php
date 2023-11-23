<?php

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "null username/password";
    }
}
?>

<html>

<head>
    <title>Add employee salary</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">
<body id="patientHome">
    <form method="post" action="../controls/accAddAllEmployeeSalaryCheck.php" enctype="">
   
   
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Add employee Salary</h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                        <p>Employee First Name: </p>
                    </td>
                    <td>
                        <input type="text" name="EmpASfirstName" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Employee Last Name: </p>
                    </td>
                    <td>
                        <input type="text" name="EmpASlastName" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Employee User Name: </p>
                    </td>
                    <td>
                        <input type="text" name="EmpASuserName" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Salary: </p>
                    </td>
                    <td>
                    
                    <input type="number" name="EmpASalary" value="">
                    </td>

                </tr>

                <tr align="left">
                    <td colspan="4">
                        <p>Employe type: </p>
                    </td>
                    <td>
                        <input type="radio" name="EmpASType" value="Doctor" id="">Doctor
                        <input type="radio" name="EmpASType" value="Lab Assistant" id="">Lab Assistant
                        <input type="radio" name="EmpASType" value="Nurse" id="">Nurse
                        <input type="radio" name="EmpASType" value="Receptionist" id="">Receptionist
                        <input type="radio" name="EmpASType" value="Pharmacist" id="">Pharmacist
                    </td>
                    
                 

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

                    <td align="right"><input type="submit" name="btn" value="Submit" /></td>



                </tr>
            </table>

      
    </form>
    <table align="center">
    <tr>
        <td>
        <a href="accountantHomepage.php"><button>Back to home page</button></a>
        </td>
    </tr>
</table>
</body>

</html>
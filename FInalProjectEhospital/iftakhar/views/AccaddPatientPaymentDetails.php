<?php
session_start();
if (isset($_GET['arrr'])) {
    if ($_GET['arrr'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['arrr'] == 'null') {
        echo "null username/password";
    }
}
?>

<html>

<head>
    <title>Add payment details</title>
</head>

<body>
    <form method="post" action="../controls/AccaddPatientPaymentDetailsCheck.php" enctype="">
        <fieldset>

            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Add patient payment details</h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                        <p>Patient First Name: </p>
                    </td>
                    <td>
                        <input type="text" name="firstName" value="<?php echo $_SESSION['user']['patientFName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Patient Last Name: </p>
                    </td>
                    <td>
                        <input type="text" name="lastName" value="<?php echo $_SESSION['user']['patientLName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User Name: </p>
                    </td>
                    <td>
                        <input type="text" name="userName" value="<?php echo $_SESSION['user']['patientUserName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Admission date: </p>
                    </td>
                    <td>
                        <input type="date" name="pAdmissionDate" value="">
                    </td>

                </tr>

                <tr align="left">
                    <td colspan="4">
                        <p>cost: </p>
                    </td>
                    <td>
                        <input type="number" name="pCost" value="">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Gender: </p>
                    </td>
                    <td>
                        <!-- <input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="">Others -->
                        <input type="text" name="gender" value="<?php echo $_SESSION['user']['patientGender'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

                    <td align="right"><input type="submit" name="btn" value="Submit" /></td>



                </tr>
            </table>

        </fieldset>
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
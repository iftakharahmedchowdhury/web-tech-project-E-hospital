<?php
session_start();

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
    <title>Update Info</title>
</head>
<link rel="stylesheet" href="../Assets/css/style.css">
<body id="patientHome">
    <form method="post" action="../controls/patientPersonalInfocheck.php" enctype="">
        <fieldset>
            <legend>Update patient info</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2></h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                        <p>Patient First Name: </p>
                    </td>
                    <td>
                        <input type="text" name="UfirstName" value="<?php echo $_SESSION['user']['patientFName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Patient Last Name: </p>
                    </td>
                    <td>
                        <input type="text" name="UlastName" value="<?php echo $_SESSION['user']['patientLName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User Name: </p>
                    </td>
                    <td>
                        <input type="text" name="UuserName" value="<?php echo $_SESSION['user']['patientUserName'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Password: </p>
                    </td>
                    <td>
                        <input type="password" name="Upassword" value="<?php echo $_SESSION['user']['patientPassword'] ?>">
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>DOB: </p>
                    </td>
                    <td>
                        <input type="date" name="Udob" value="<?php echo $_SESSION['user']['patientDOB'] ?>">
                    </td>

                </tr>

                <tr align="left">
                    <td colspan="4">
                        <p>Email: </p>
                    </td>
                    <td>
                        <input type="email" name="Uage" value="<?php echo $_SESSION['user']['patientEmail'] ?>">
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

                        <input type="text" name="Ugender" value="<?php echo $_SESSION['user']['patientGender'] ?>" readonly>
                    </td>

                </tr>
                <tr align="left">
                    <td colspan="4">

                    </td>

                    <td align="right"><input type="submit" name="btn" value="Update" /></td>



                </tr>
            </table>

        </fieldset>
    </form>
</body>

</html>
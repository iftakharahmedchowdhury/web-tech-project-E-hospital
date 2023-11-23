<?php

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

   /*  if ($_GET['err'] == '') {
        echo "null username/password";
    } */

    if ($_GET['err'] == 'NotValidEmail') {
        echo "Not valid email";
    }
    if ($_GET['err'] == 'notValidpass') {
        echo "Password should be 8 character  long and must use uppercase and special character .";
    }
    /* if ($_GET['err'] == 'wrongUserName') {
        echo "wrong user name";
    } */
}
?>

<html>

<head>
    <title>Signup</title>
    <script type="text/javascript" src="../Assets/js/Pscript.js"></script>
    <link rel="stylesheet" href="../Assets/css/style.css">
</head>



<body id="signup">
    <form method="post" action="../controls/registrationCheck.php" onsubmit="return PRvalidate()" enctype="">
        <fieldset>
            <legend>Signup</legend>
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Patient Registraion</h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                        <p>Patient First Name: </p>
                    </td>
                    <td>
                        <input type="text" id="firstName" name="firstName" value="">
                    </td>
                    <td id="Pfn"></td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Patient Last Name: </p>
                    </td>
                    <td>
                        <input type="text" id="lastName" name="lastName" value="">
                    </td>
                    <td id="Pln"></td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>User Name: </p>
                    </td>
                    <td>
                        <input type="text" id="userName"  name="userName" value="">
                    </td>
                    <td id="Pun"></td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Password: </p>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" value="">
                       

                    </td>
                    
                    <td id="Ppw"></td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>DOB: </p>
                    </td>
                    <td>
                        <input type="date" id="dob" name="dob" value="">
                    </td>
                    <td id="Pdob"></td>

                </tr>

                <tr align="left">
                    <td colspan="4">
                        <p>Email: </p>
                    </td>
                   
                    <td>
                        <input type="email" id="age" name="age" value="">
                    </td>
                    <td id="Pemail"></td>

                </tr>
                <tr align="left">
                    <td colspan="4">
                        <p>Gender: </p>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="Male" id="gender">Male
                        <input type="radio" name="gender" value="Female" id="gender">Female
                        <input type="radio" name="gender" value="Other" id="gender">Others
                    </td>
                    <td id="Pgd"></td>

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
        <a href="logInPatient.php"><button>Back to Login</button></a>
        </td>
    </tr>
</table>
</body>

</html>
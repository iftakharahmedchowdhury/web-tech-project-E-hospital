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
    <title>Login</title>
    <link rel="stylesheet" href="../Assets/css/style.css">
    
    </script>
</head>


<body id="patientHome" class="">
    <form method="post" action="../controls/staffLogInCheck.php" enctype="">
        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Staff login</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p> UserName: </p>
                </td>
                <td>
                    <input type="text" name="patientUserName" value="">
                </td>

            </tr>
            <tr align="center">
                <td colspan="4">
                    <p> Password : </p>
                </td>
                <td>
                    <input type="password" name="patientPassword" value="">
                </td>
                
                <td>
                    
                </td>

            </tr>

            <tr>
            <td colspan="4">
                    
                </td>
                <td>
                <input type="checkbox" id="remMe" name="remMe" value="remMe">
                    <label for="remMe"> Remember me</label><br> 
                </td>
            </tr>

        </table>

        <table align="center">
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
                <td>
                    <input type="submit" name="btn" value="login" />

                    <!--  <button type="submit">Login</button> -->
                </td>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </td>
               
            </tr>
            <tr>
                <td colspan="3"></td>
                <!--   <td><a href="forgotPatientPassword.php"><button>Forgot password</button></a></td> -->
            </tr>
            <tr>
                <td>

                </td>
            </tr>
        </table>


    </form>
    <table align="center">
        <tr>
            <td>
                <a href="../index.php"><button>Back Main page</button></a>
            </td>
        </tr>
    </table>

</body>

</html>
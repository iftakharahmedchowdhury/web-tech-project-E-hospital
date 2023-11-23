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

    <title>Login Accountant</title>
</head>

<body>
    <form action="../controls/loginAccountantsCheck.php" method="post">
        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Accountant Login</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>Accountant UserName: </p>
                </td>
                <td>
                    <input type="text" name="accountantUserName" value="">
                </td>

            </tr>
            <tr align="center">
                <td colspan="4">
                    <p>accountant Password : </p>
                </td>
                <td>
                    <input type="password" name="accountantPassword">
                </td>

            </tr>

            <tr align="center">
                <td colspan="4">

                </td>
                <td align="right"><button type="submit">Login</button></td>

        </table>
    </form>
    <table align="center">
    <tr>
        <td>
        <a href="indexHome.php"><button>Back Main page</button></a>
        </td>
    </tr>
</table>



</body>

</html>
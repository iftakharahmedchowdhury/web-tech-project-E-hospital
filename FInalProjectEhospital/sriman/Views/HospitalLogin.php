<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }


?>

<html>
<head>
<link rel="stylesheet" href="../Assets/style.css">

    <title>E-Hospital Login</title>
</head>

<body class="loginBody center">
    <form method= "post" action="../Controls/HospitalLoginCheck.php" enctype ="">
    <fieldset class="center">
    <table>
        <tr>
            <td>
                <h1>Welcome to E-Hospital</h1>
            </td>

        </tr>
    </table>
    <table>
        <tr>
            <td class="tblHeading">
                <p>Enter username and password </p> <br>
            </td>
        </tr>
        <tr >
            <td >
                <input type="text" name= "username"  placeholder= "Username!!">
            </td>

        </tr>
        <tr >
           
            <td >
                <input type="password" name= "password" placeholder= "Password!!">
            </td>

        </tr>

        <tr>
            <td>

            </td>
            <td><button class="submitButton" type="submit">Login</button></td>

    </table>

    </fieldset>

</form>
    </body>
</html>
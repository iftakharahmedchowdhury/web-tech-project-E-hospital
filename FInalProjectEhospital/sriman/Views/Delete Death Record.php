<html lang="en">
<head>
    <title>E-Hospital</title>
</head>
<body>
<a href="../Views/Death_Record.php"><button>BACK</button></a>

<form action="../Controls/delDeathCheck.php" method="post" enctype="">
    <fieldset>
        <legend><h3>Remove From DataBase</h3></legend>
        <!-- Search Table Box -->
        <table align="center">
            <tr>
                <td>Delete Patient Record:</td>
                <td>
                    <input type="text" name= "DelDeath" placeholder= "Patient Name">
                    <input type="submit" name="btn" value="Delete">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
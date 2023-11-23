<html lang="en">
<head>
    <title>E-Hospital</title>
</head>
<body>
<a href="../Views/Appointment.php"><button>BACK</button></a>

<form action="../Controls/delAppoinCheck.php" method="post" enctype="">
    <fieldset>
        <legend><h3>Remove From DataBase</h3></legend>
        <!-- Search Table Box -->
        <table align="center">
            <tr>
                <td>Delete Appointment Record:</td>
                <td>
                    <input type="time" name= "delAppoin" placeholder= "Appointment Time">
                    <input type="submit" name="btn" value="Delete">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
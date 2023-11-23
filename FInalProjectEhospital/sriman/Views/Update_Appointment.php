<html>
<head>
    <title>E-Hospital</title>
</head>
<body>
    <form method="post" action="../Controls/updateappointCheck.php" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
        <table align="center">
                <tr>
                    <td>Appointment Date:</td>
                    <td>
                        <input type="date" name= "upAppoinDate">
                    </td>
                </tr>
                <tr>
                    <td>Room No:</td>
                    <td>    
                        <select name="upAppoinRoom" id="">
                                <option value="5061">5061</option>
                                <option value="5062">5062</option>
                                <option value="5063">5063</option>
                                <option value="5064">5064</option>
                                <option value="5065">5065</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Doctor:</td>
                    <td><input type="text" name= "upAppoinDoc"></td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td><input type="time" name= "upAppoinTim"></td>
                </tr>


                <tr>
                    <td>
                        <input type="submit" name="btn" value="UPDATE"> 
                    </td>
                </tr>
            </table>
    </fieldset>
    </form>

    <a href="../Views/Appointment.php"><button>BACK</button></a>

</body>
</html>
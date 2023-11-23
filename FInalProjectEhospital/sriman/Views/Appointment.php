<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Assets/style.css">
    <title>E-Hospital Appointment</title>
</head>
<body class="font appoinmentBG">
<a href="../Views/Help Desk.php"><button class="submitButton">BACK</button></a>


<fieldset class="fieldset">
    <legend><h2>Appointment</h2></legend>

    <table class="recordData1">

    <h2 class="recordData2">Appointment Schedule</h2>

    <tr>
            <td >
                <form action="../Controls/searchAppoinCheck.php" method="post" enctype="">
                    <table>
                        <tr>
                                    <td >
                                        <input type="date" name="SearchAppoin" placeholder= "Appointment Date!!">
                                        <input type="submit" name="btn" value="Search">
                                    </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>

        <table class="recordData3">
                        <tr>
                            <td><a href="../Views/Add Appointment.php"><button class="submitButton">Make an Appointment</button></a></td>
                            <td><a href="../Views/Delete_Appointment.php"><button class="submitButton">Cancel an Appointment</button></a></td>
                        </tr>
                        
        </table>

            


    </table>
    
<?php

    session_start();
    require_once "../Models/appointmentdbModel.php";
    echo "<center><h3>Records:</h3></center>";
    $status = ShowAppoin();
?>

</fieldset>
</body>
</html>
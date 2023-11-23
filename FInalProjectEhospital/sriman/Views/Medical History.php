<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Assets/style.css">

    <title>E-Hospital Medical History</title>
</head>
<body style="background-color:powderblue;">
<a href="../Views/D_Receptionist.php"><button class="submitButton">BACK</button></a>

<fieldset>
    <tr>
            <td >
                <form action="../Controls/searchAdmitCheck.php" method="post" enctype="">
                    <table >
                        <tr>
                            <td>
                                <input type="text" name="SearchAdmit" placeholder= "Patient Name!!">
                                <input type="submit" name="btn" value="Search">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
    </tr>
<?php
    session_start();
    require_once "../Models/admissiondbModel.php";
    echo "<center><h3>Records:</h3></center>";
    $status = ShowAdmit();
?>
</fieldset>

</body>
</html>
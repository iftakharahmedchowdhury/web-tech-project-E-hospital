<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Assets/style.css">
    <title>Document</title>
</head>
<body class="font">
<a href="Help Desk.php"><button class="submitButton">BACK</button></a>

<fieldset class="fieldset">
    <legend>Operation Details</legend>

    <!-- Main Table-->
    <table class="recordFieldset">
        <caption><h3>Operation Theater Schedule</h3></caption>

        <tr>
            <td>
                <form action="../Controls/searchOPtheaterCheck.php" method="post" enctype="">
                    <table >
                        <tr>
                            <td>Search OP Schedule:</td>
                                    <td>
                                        <input type="text" name="SearchOP" placeholder= "Enter Op Number!">
                                        <input type="submit" name="btn" value="Search">
                                    </td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>

        <table class="recordData1">
                        <tr>
                            <td ><a href="../Views/Add OP Theater.php"><button class="submitButton">Add into Record</button></a></td>
                            <td ><a href="../Views/Remove_OP.php"><button class="submitButton">Remove</button></a></td>
                        </tr>
                        
        </table>

    </table>

<?php
    session_start();
    require_once "../Models/optheaterDBmodel.php";
    echo "<center><h3>Records:</h3></center>";
    $status = ShowOP();
?>

</fieldset>
</body>
</html>
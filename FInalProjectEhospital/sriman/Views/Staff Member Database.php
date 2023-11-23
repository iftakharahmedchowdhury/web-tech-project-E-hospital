<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital Staff Member</title>
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
<a href="../Views/Hospital Record.php"><button class="submitButton">BACK</button></a>

    <fieldset>
        <legend>Staff DataBase</legend>
<table class="recordFieldset">
        <caption><h2>Staff Member Database Record</h2></caption>
        <td><hr></td>

            <tr>
            <td>
                <form action="../Controls/searchEmpCheck.php" method="post" enctype="">
                    <table >
                        <tr>
                            <td>Search Employee Record:</td>
                                    <td>
                                        <input type="text" name="SearchEmp" placeholder= "Employee ID">
                                        <input type="submit" name="btn" value="Search">
                                    </td>
                        </tr>
                    </table>
                </form>
            </td>
            </tr>

            <tr>
            <td>
                <table class="recordData">
                    <tr>
                        <td ><a href="../Views/Add_Employee.php"><button class="submitButton">Add into Record</button></a></td>
                        <td ><a href="../Views/Remove_Employee.php"><button class="submitButton">Remove from Record</button></a></td>
                    </tr>
                    
                </table>
            </td>
            </tr>
        </table>

<?php
session_start();
require_once "../Models/staffmemberDBmodel.php";
echo "<center><h3>Staff Members:</h3></center>";
$status = showEmp();
?>

    </fieldset>
</body>
</html>

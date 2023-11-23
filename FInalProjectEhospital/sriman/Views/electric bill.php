<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital Electric Bill</title>
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
<a href="Hospital Record.php"><button class="submitButton">BACK</button></a>
<fieldset class="fieldset">
        <legend><h2>Electric Bill Record</h2></legend>

        <!-- Main Table -->
        <table>

            <h2 class="recordData1">Electric Bill</h2>

            <table class="recordFieldset">
    <tr>
            <td>
                <form action="../Controls/searchBillCheck.php" method="post" enctype="">
                    <table>
                        <tr>
                            <td>Search Death Record:</td>
                                    <td>
                                        <input type="date" name="SearchBill" placeholder= "Bill Date">
                                        <input type="submit" name="btn" value="Search">
                                    </td>
                        </tr>
                    </table>
                </form>
            </td>
    </tr>
</table>

            <!-- Data Table-->
<?php
    session_start();
    require_once "../Models/electricbillDBmodel.php";
    echo "<center><h3>Records:</h3></center>";
    $status = ShowBill();
?>

        </table>
        <table>
                    <tr>
                        <td><a href="../Views/Add Bill Record.php"><button class="submitButton">Add into Record</button></a></td>
                    </tr>
                    
        </table>
        
    </fieldset>
    

</body>
</html>
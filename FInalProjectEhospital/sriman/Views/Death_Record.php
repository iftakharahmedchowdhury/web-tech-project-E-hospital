<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital Death Record</title>
    <link rel="stylesheet" href="../Assets/style.css">

</head>
<body >
<a href="../Views/Hospital Record.php"><button class="submitButton">BACK</button></a>
    <fieldset class="fieldset">
       


<!-- Main Table -->
        <table>
            <h2 class="recordData1">Death Record</h2>

<table class="recordFieldset">
    <tr>
            <td>
                <form action="../Controls/searchDeathrecordCheck.php" method="post" enctype="">
                    <table>
                        <tr>
                            <td>Search Death Record:</td>
                                    <td>
                                        <input type="text" name="SearchDeath" placeholder= "Patient Name">
                                        <input type="submit" name="btn" value="Search">
                                    </td>
                        </tr>
                    </table>
                </form>
            </td>
    </tr>
</table>

<!-- Data Table-->
    <table>
    <?php
        session_start();
        require_once "../Models/deathrecordDBmodel.php";
        $status = ShowRecord();
    ?>
    </table>
        <table class="recordData">
                    <tr>
                        <td><a href="../Views/Add Death Record.php"><button class="submitButton">Add into Record</button></a></td>
                        <td><a href="../Views/Delete Death Record.php"><button class="submitButton">Remove from Record</button></a></td>
                    </tr>
                    
        </table>
        


</table>

    </fieldset>


</body>
</html>
<html>
<link rel="stylesheet" href="../Assets/style.css">
    <title>E-Hospital</title>
<body class="font appoinmentBG">
<a href="Help Desk(Patient).php"><button class="submitButton">BACK</button></a>
    <!--form method= "post" action="Search Bed ID Check.php"-->
        <fieldset class="fieldset ">

<!-- Button Table -->
                <table class=" href recordData1">
                    <td></td>
        <tr>
                <td>
                    <a href="../Views/Add Allotment.php"><button class="submitButton">Add Allotment</button></a>
                    <a href="../Views/deleteAllotment.php"><button class="submitButton">Remove Allotment</button></a>
                </td>
            </tr>
        <tr>
            <td >
                <form action="../Controls/searchAllotCheck.php" method="post" enctype="">
                    <table >
                        <tr>
                            <td>
                                <input type="text" name="SearchAllot" placeholder= "Patient Name!!">
                                <input type="submit" name="btn" value="Search">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
<tr>
    <?php
        session_start();
        require_once "../Models/allotmentdbModel.php";
        echo "<center><h3>Records:</h3></center>";
        $status = ShowAllot();
    ?>
</tr>
</table>

    
    </fieldset>
   
    <!--/form-->
    </body>

</html>


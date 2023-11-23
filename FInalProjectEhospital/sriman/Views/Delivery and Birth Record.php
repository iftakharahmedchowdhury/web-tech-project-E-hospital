<html lang="en">
<head>
    <title>E-Hospital Delivery and Birth Record</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <script src="../Assets/script.js"></script>
</head>
<body>

    <a href="Hospital Record.php"><button class="submitButton">BACK</button></a>

    <fieldset >

        <!-- Main Table -->
        <table class="recordFieldset">

            <caption><h3>Birth & Delivery Record</h3></caption>
            <td><hr></td>
            <tr>
            <td>

                <form  method="post" enctype="">
                    <table>
                        <tr>

                            <td>Search Birth & Delivery Record:</td>
                                    <td>
                                        <h6></h6>
                                        <input type="text" name="searchchild" id="searchchild" placeholder= "Child Name">
                                        <input type="submit" name="btn" value="Search" onclick= "return searchvaidation()"/>
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
                        <td ><a href="../Views/Add DB Record.php"><button class="submitButton">Add into Record</button></a></td>
                        <td><a href="../Views/Delete DB Record.php"><button class="submitButton">Remove from Record</button></a></td>
                    </tr>
                    
                </table>
            </td>
            </tr>
        </table>

<?php
    session_start();
    require_once "../Models/deliveryBirthDBmodel.php";
    echo "<center><h3>Records:</h3></center>";
    $status = ShowChild();
?>
    </fieldset>
    
</body>
</html>



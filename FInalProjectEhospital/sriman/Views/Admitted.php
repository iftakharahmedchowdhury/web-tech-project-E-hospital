<html lang="en">

<head>
    <title>E-Hospital Delivery and Birth Record</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <script src="../Assets/script.js"></script>
    
</head>

<body>

    <a href="Hospital Record.php"><button class="submitButton">BACK</button></a>

    <fieldset>

        <!-- Main Table -->
        <table class="recordFieldset">


            <td>
                <hr>
            </td>

            <?php
            session_start();
            require_once "../Models/admissiondbModel.php";
            echo "<center><h3>Records:</h3></center>";
            $status = ShowAdmit();
            ?>
    </fieldset>

</body>

</html>
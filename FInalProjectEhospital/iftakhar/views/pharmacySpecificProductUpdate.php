<?php
session_start();


?>

<html>

<head>

    <title>Update specific product</title>
</head>

<body>

    <form method="post" action="pharmacySpecificProductUpdateCheck.php" enctype="">
        <fieldset>
   
            <table align="center" width="100%">
                <tr align="center">
                    <td colspan="4">
                        <h2>Update specific product</h2>
                    </td>

                </tr>
            </table>

            <table align="center">
                <tr align="left">
                    <td colspan="4">
                    <input type="text" name="SmedName" value="<?php echo $_SESSION['pharmacyMedSearch']['0'] ?>" readonly>
                    </td>
                    <td>
                    <input type="text" name="SmedPrice" value="<?php echo $_SESSION['pharmacyMedSearch']['1'] ?>">
                    </td>
                    <td>
                    <input type="text" name="SmedStatus" value="<?php echo $_SESSION['pharmacyMedSearch']['2'] ?>">
                    </td>
                    <td>
                    <input type="submit" name="btn" value="update" />
                    </td>

                </tr>

            </table>

    </form>
    <table align="center">
        <tr>
            <td>
            <a href="pharmacistHomePage.php"><button>Back to home page</button></a>
            </td>
        </tr>
    </table>


</body>

</html>
<?php

if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "null username/password";
    }
}
?>

<html>

<head>
    <title>Add product</title>
    <link href="../Assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="../Assets/js/script.js">
    </script>

</head>
<!-- <link rel="stylesheet" href="../Assets/css/style.css"> -->

<body id="addProduct">


    <form method="post" action="" enctype="" onsubmit="return pharmaAddProductFormValidation() ">


        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2 id="test">Add product</h2>
                </td>

            </tr>
        </table>

        <table align="center">
            <tr align="left">
                <td colspan="4">
                    <p>Product Name: </p>
                </td>
                <td>
                    <input type="text" id="pharmaPN" name="pharmaProductName" value="">
                </td>

            </tr>



            <tr align="left">
                <td colspan="4">
                    <p>Product Cost: </p>
                </td>
                <td>
                    <input type="number" id="pharmaPC" name="pharmaCost" value="">
                </td>

            </tr>
            <tr align="left">
                <td colspan="4">
                    <p>Set status: </p>
                </td>
                <td>
                    <input type="text" id="pharmaPS" name="pharmaSetStatus" value="">
                </td>


            </tr>
            <tr align="left">
                <td colspan="4">

                </td>


                <td align="right"><input type="submit" name="btn" value="Submit" onclick="return ajaxJson()" /></td>



            </tr>
        </table>
        <h4 id="alertPart" style="text-align:center;">


        </h4>


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
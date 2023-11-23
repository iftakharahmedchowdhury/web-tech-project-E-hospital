<?php
session_start();
if (isset($_GET['err'])) {
    if ($_GET['err'] == 'invalid_request') {
        echo "invalid request error..";
    }

    if ($_GET['err'] == 'null') {
        echo "Fill all data";
    }
}

?>


<html>

<head>

    <title>Delete product </title>
</head>

<body>


    <form action="../controls/DeleteProductCheck.php" method="post">
        <table align="center" width="100%">
            <tr align="center">
                <td colspan="4">
                    <h2>Delete Product</h2>
                </td>

            </tr>
        </table>
        <table align="center">
            <tr align="center">
                <td colspan="4">
                    <p>Search Product: </p>
                </td>
                <td>
                    <input type="text" name="searchproduct">
                </td>

            </tr>

            <tr align="center">
                <td colspan="4">

                </td>
                <td align="right"> <input type="submit" name="btn" value="Submit" /></td>
                </td>

        </table>
        <!--   <table align="center">

            <tr align="center">
                <td colspan="4">
                    <button>Show all product</button>

                </td>
               

        </table> -->
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
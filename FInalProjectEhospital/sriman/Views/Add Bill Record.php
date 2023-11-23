<html>
<head>
    <title>E-hospital</title>
</head>
<body >
<a href="../Views/electric bill.php"><button>BACK</button></a>
<script src="../Assests/script.js"></script>

    <form method="post" action="" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
            <table align="center">
                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="billdate"  id = "billdateID" value=""/></td>
                </tr>
                <tr>
                    <td>Usage(kWh):</td>
                    <td><input type="text" name="billusage"  id="billusageID" value=""/></td>
                </tr>
                <tr>
                    <td>Cost(Per kWh):</td>
                    <td><input type="text" name="billcost"  id="bilcostID" value=""/></td>
                </tr>
                <tr>
                    <td>Amount:</td>
                    <td><input type="text" name = "billamount"  id="billamountID" value="" /></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="btn" value="Submit" onclick="return ajaxJson()"/> 
                    </td>
                </tr>
            </table>
    </fieldset>
</form>

</body>
</html>
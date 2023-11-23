<html>
<head>
    <title>E-Hospital</title>
</head>
<body >
<a href="../Views/OP Theater Details.php"><button>BACK</button></a>
    
    <form method="post" action="../Controls/AddOPtheaterCheck.php" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
            <table align="center">
                <tr>
                    <td>Operation Name:</td>
                    <td><input type="text" name="operationName"/></td>
                </tr>
                <tr>
                    <td>Time Duration</td>
                    <td>
                        <input type="text" name="operationDuration"/>
                    </td>
                </tr>
                <tr>
                    <td>Operation Theater Number:</td>
                    <td>
                        <select name="operationNumber" id="">
                            <option value="6061">6061</option>
                            <option value="6062">6062</option>
                            <option value="6063">6063</option>
                            <option value="6064">6064</option>
                            <option value="6065">6065</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="operationDate"></td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td><input type="time" name = "operationTime"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="btn" value="Submit"> 
                    </td>
                </tr>
            </table>
    </fieldset>
</form>

</body>
</html>
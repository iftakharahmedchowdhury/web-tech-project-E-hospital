<html>
<head>
    <title>Form</title>
</head>
<body >
<a href="../Views/Delivery and Birth Record.php"><button>BACK</button></a>
    
    <form method="post" action="../Controls/DB Record Check.php" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
            <table align="center">
                <tr>
                    <td>Child's Name</td>
                    <td><input type="text" name="Childusername"/></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        <input type="radio" name="Childgender" value="Male"/> Male
                        <input type="radio" name="Childgender" value="Female"/> Female
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="Childdob" placeholder="DATE"/></td>
                </tr>
                <tr>
                    <td>Father's Name:</td>
                    <td><input type="text" name="fatherName"></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><input type="text" name = "motherName"></td>
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
<html>
<head>
    <title>Form</title>
</head>
<body style="background-color:powderblue;">
    <form method="" action="" enctype="">
        <fieldset>
            <legend>Add In Record</legend>
            <table>
            <tr>
                <td>Search Birth & Delivery Record:</td>
                        <td>
                            <input type="text" placeholder= "Child's Name">
                            <input type="submit" name="btn" value="Search">
                        </td>
            </tr>
        </table>
            <table>
                <tr>
                    <td>Child's Name</td>
                    <td><input type="text" name="" value="" placeholder="Childusername"/></td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>
                        <input type="radio" name="gender" value=""/> Male
                        <input type="radio" name="gender" value=""/> Female
                        <input type="radio" name="gender" value=""/> Other
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="" value="" placeholder="DATE"/></td>
                </tr>
                <tr>
                    <td>Place of Birth(Branch)</td>
                    <td>
                        <select name="">
                            <option value="Bashundhara">Bashundhara</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Chittagong">Chittagong</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Father's Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Mother's Name:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                        <input type="submit" name="" value="Update"> 
                    </td>
                </tr>
            </table>
       </form>
    </fieldset>

</body>
</html>
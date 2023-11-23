<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital Inventory</title>
</head>
<body>

    <fieldset>
        <legend>Inventory Record</legend>

        
        <!-- Main Table -->
        <table align= "center">

            <caption><h3>Inventory Record</h3></caption>
            <table align= "right">
<tr>
    <td>Search Death Record:</td>
            <td>
                <input type="text" placeholder= "User Name/ID">
                <input type="submit" name="btn" value="Search">
            </td>
</tr>
</table>

            <!-- Data Table-->
                <table border=1 width="100%">
                        <th>Inventory ID</th>
                        <th>Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Inventory Value</th>
    
                        <!--Payment Details -->
                        <tr>
                            <td><center>10011</center></td>
                            <td><center>Item 1</center></td>
                            <td><center>50</center></td>
                            <td><center>50000</center></td>
                            <td><center>250000</center></td>
                        </tr>

                </table>

                <table align= "center">
                    <tr>
                        <td colspan="3"><a href="Add Inventory.php"><button>Add Item</button></a></td>
                        <td colspan="3"><a href="Remove Inventory.php"><button>Remove Item</button></a></td>
                        <td colspan="3"><a href="Update Inventory.php"><button>Update Item</button></a></td>
                    </tr>
                    
                </table>

        </table>
 

    </fieldset>
    <a href="Hospital Record.php"><button>BACK</button></a>

</body>
</html>
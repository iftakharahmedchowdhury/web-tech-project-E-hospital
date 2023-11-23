<?php
session_start();
require_once "../models/pharmacistModel.php";
$searchproduct = $_POST['searchproduct'];



// sleep(4);

if ($searchproduct != null) {
    $user = ['searchproduct' => $searchproduct];
$status = showSpecificValue($user);
if ($status==null) {
   echo "data not found";
   return;
}
if ($searchproduct == null) {
} 
$searchproduct  = $_POST['searchproduct'];
    echo "product id is: " . $status['medicineId'];
} else {
    echo "null value";
    return;
}

?>


<html>
<html>

<head>

</head>

<body>
    <form action="../controls/updateProductCheck.php" method="post">
        <table>
            <tr>
                <td>Product Id</td>
                <td>Product Name</td>
                <td>Product Cost</td>
                <td>Product status</td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <input type="text" name="searchproduct" id="" value=<?php echo $status['medicineId']  ?> readonly>
                </td>
                <td>
                    <!-- <input type="text" name="" id=""value="{$status['productName']}"> -->
                    <input type="text" name="productName" id="" value=<?php echo $status['productName']  ?>>
                </td>
                <td>
                    <input type="text" name="productCost" id="" value=<?php echo $status['productCost']  ?>>
                </td>

                <td>
                    <input type="text" name="setStatus" id="" value=<?php echo $status['setStatus']  ?>>
                </td>

                <td align="right"> <input type="submit" name="btn" value="Update" /></td>


            </tr>
        </table>
    </form>

</body>

</html>
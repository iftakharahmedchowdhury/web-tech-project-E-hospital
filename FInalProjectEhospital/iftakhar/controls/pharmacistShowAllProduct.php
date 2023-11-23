<?php
session_start();
require_once "../models/pharmacistModel.php";

$status = showAllProduct();
echo "<table border=1>
<tr>
    <th>Product ID</th>
    <th>Product name</th>
    <th>Product cost</th>
    <th>Product status</th>
 
</tr>";

    while ($data = mysqli_fetch_assoc($status)) {


        echo "<tr>
    <td>{$data['medicineId']}</td>
    <td>{$data['productName']}</td>
    <td>{$data['productCost']}</td>
    <td>{$data['setStatus']}</td>
    
    
    
</tr>";
    }

    echo "</table>";
    // $status = mysqli_query($conn, $sql);
    // return $status;
?>

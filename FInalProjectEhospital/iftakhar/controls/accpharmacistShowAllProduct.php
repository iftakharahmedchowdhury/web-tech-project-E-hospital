<?php
session_start();
require_once "../models/AccountantModel.php";
   $statusPharmacyStock = showAllPharmacyStock();
   echo "<table align=" . "center" . " border=" . "1" . ">";
echo "<br>
<br>
<br>
<h3 align=".'center'.">All pharmacy stock</h3>
<br>
<br>";
echo "

<tr>
<td>Medicine ID</td>
<td>Product Name</td>
<td>Product Cost </td>
<td>Status</td>



</tr>";
while ($data = mysqli_fetch_assoc($statusPharmacyStock)) {


    echo "<tr>
<td>{$data['medicineId']}</td>
<td>{$data['productName']}</td>
<td>{$data['productCost']}</td>
<td>{$data['setStatus']}</td>




</tr>";

}
echo "</table>
<br>
";

/*     echo "<table>";
     echo "<tr>";
     echo "<td>Name</td>";
     echo "<td></td>";
     echo "</tr>";
     echo "</table>"; */


     
/* echo " <table align=" . "center" . " width=" . "100%" . ">";
echo " <tr align=" . "center" . ">";
echo " <td colspan=" . "4" . ">";
echo "  <h2>Show all product</h2>";
echo "</td>";

echo "</tr>";
echo " </table>";

$file = fopen('../pharmacyInventory.txt', "r");
while (!feof($file)) {
    $data = fgets($file);
    $pharmacyInventory = explode("|", $data);
    if ($pharmacyInventory[0]==" ") {
        continue;
    }
    if ($pharmacyInventory[0] != "") {
        $pharmacyInventory = ['0' => $pharmacyInventory[0], '1' => $pharmacyInventory[1], '2' => $pharmacyInventory[2]];
        $_SESSION['pharmacyInventory'] = $pharmacyInventory; */



/*         echo "
<table align=" . "center" . " border=" . "1" . ">" .
            "<tr align=" . "center" . ">
    <td colspan=" . "4" . ">
    <input type=" . "text" . " value=" . "$pharmacyInventory[0]" . " readonly>
    </td>
    <td> 
        <input type=" . "text" . " value=" . "$pharmacyInventory[1]" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "$pharmacyInventory[2]" . ">
    </td>
    


</tr>
</table>
"; */
        /* <td ><button type=" . "submit" . ">update</button></td> */
   // }
//}
echo " <table align=" . "center" . " width=" . "100%" . ">";
echo " <tr align=" . "center" . ">";
echo " <td colspan=" . "4" . ">";
echo "<a href="."../views/accountantHomepage.php"."><button>Back to home page</button></a>";
echo "</td>";

echo "</tr>";
echo " </table>";


?>

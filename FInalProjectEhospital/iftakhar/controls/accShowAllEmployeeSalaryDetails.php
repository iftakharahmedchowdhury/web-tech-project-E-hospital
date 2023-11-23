<?php
session_start();
require_once "../models/AccountantModel.php";
/*     echo "<table>";
     echo "<tr>";
     echo "<td>Name</td>";
     echo "<td></td>";
     echo "</tr>";
     echo "</table>"; */
     $statusAllEmpSal = showAllEmployeeSalary();

/* echo " <table align=" . "center" . " width=" . "100%" . ">";
echo " <tr align=" . "center" . ">";
echo " <td colspan=" . "4" . ">";
echo "  <h2>Show all Employee Salary</h2>";
echo "</td>";

echo "</tr>";
echo " </table>";

echo "<table align=" . "center" . " border=" . "1" . ">
<tr align=" . "left" . ">
    <td colspan=" . "4" . ">
    <input type=" . "text" . " value=" . " First_Name . " . "readonly>
      
    </td>
    <td>
    <input type=" . "text" . " value=" . " Last_Name . " . "readonly>
    </td>
    <td>
    <input type=" . "text" . " value=" . " User_Name . " . "readonly>
    </td>
    <td>
    <input type=" . "text" . " value=" . " Salary . " . "readonly>
    </td>
    <td>
    <input type=" . "text" . " value=" . " Job_title . " . "readonly>
    </td>

</tr>
</table>
"; */

/* $file = fopen('../allEmployeeAddSalary.txt', "r");
while (!feof($file)) {
    $data = fgets($file);
    $showAllEMPS = explode("|", $data);
    if ($showAllEMPS[0] != "") {
        $showAllEMPS = ['0' => $showAllEMPS[0], '1' => $showAllEMPS[1], '2' => $showAllEMPS[2], '3' => $showAllEMPS[3], '4' => $showAllEMPS[4]];
        $_SESSION['showAllEMPS'] = $showAllEMPS; */



/*         echo "
<table align=" . "center" . " border=" . "1" . ">" .
            "<tr align=" . "center" . ">
    <td colspan=" . "4" . ">
    <input type=" . "text" . " value=" . "$statusAllEmpSal.['employeeFName']" . " readonly>
    </td>
    <td> 
        <input type=" . "text" . " value=" . "$statusAllEmpSal[1]" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "$statusAllEmpSal[2]" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "$statusAllEmpSal[3]" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "$statusAllEmpSal[4]" . ">
    </td>

    


</tr>

</table>
"; */
echo "<table align=" . "center" . " border=" . "1" . ">";
echo "<br>
<br>
<br>
<h3 align=".'center'.">All employee salary details</h3>
<br>
<br>";
echo "

<tr>
<td>First_Name</td>
<td>Last_Name</td>
<td>User_Name </td>
<td>Salary</td>
<td>Job_title</td>



</tr>";
while ($data = mysqli_fetch_assoc($statusAllEmpSal)) {


    echo "<tr>
<td>{$data['employeeFName']}</td>
<td>{$data['employeeLName']}</td>
<td>{$data['employeeUserName']}</td>
<td>{$data['salary']}</td>
<td>{$data['employeeType']}</td>



</tr>";

}
echo "</table>
<br>
";

        /* <td ><button type=" . "submit" . ">update</button></td> */
 ////////////////////////   }
////////////////////////////}

echo "<table align=" . "center" . " border=" . "" . ">
<tr align=" . "left" . ">
    <td colspan=" . "4" . ">
    <a href="."../views/accountantHomepage.php"."><button>Back to home page</button></a>
      
    </td>

</tr>
</table>
";

?>

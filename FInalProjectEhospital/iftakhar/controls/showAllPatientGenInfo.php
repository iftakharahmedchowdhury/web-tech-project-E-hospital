<?php
session_start();
require_once "../models/AccountantModel.php";
   $statusPatient = showAllRegisteredPatient();
   echo "<table align=" . "center" . " border=" . "1" . ">";
echo "<br>
<br>
<br>
<h3 align=".'center'.">All registered paatient details</h3>
<br>
<br>";
echo "

<tr>
<td>patient ID</td>
<td>Patient First Name</td>
<td>Patient Last Name </td>
<td>Patient User Name</td>
<td>Patient DOB</td>
<td>Patient Email</td>
<td>Patient Gender</td>



</tr>";
while ($data = mysqli_fetch_assoc($statusPatient)) {


    echo "<tr>
<td>{$data['patientId']}</td>
<td>{$data['patientFName']}</td>
<td>{$data['patientLName']}</td>
<td>{$data['patientUserName']}</td>
<td>{$data['patientDOB']}</td>
<td>{$data['patientEmail']}</td>
<td>{$data['patientGender']}</td>



</tr>";

}
echo "</table>
<br>
";
echo "<table align=" . "center" . " border=" . "" . ">
<tr align=" . "left" . ">
    <td colspan=" . "4" . ">
    <a href="."../views/accountantHomepage.php"."><button>Back to home page</button></a>
      
    </td>

</tr>
</table>
";

?>
<!-- 

/*     echo "<table>";
     echo "<tr>";
     echo "<td>Name</td>";
     echo "<td></td>";
     echo "</tr>";
     echo "</table>"; */
/* 
echo " <table align=" . "center" . " width=" . "100%" . ">";
echo " <tr align=" . "center" . ">";
echo " <td colspan=" . "4" . ">";
echo "  <h2>Show all Patient</h2>";
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

</tr>
</table>
";

$file = fopen('../patientRegistration.txt', "r");
while (!feof($file)) {
    $data = fgets($file);
    $accountPdata = explode("|", $data);
    if ($accountPdata[0] != "") {
        $accountPdata = ['0' => $accountPdata[0], '1' => $accountPdata[1], '2' => $accountPdata[2]];
        $_SESSION['accountPdata'] = $accountPdata;



        echo "
<table align=" . "center" . " border=" . "1" . ">" .
            "<tr align=" . "center" . ">
    <td colspan=" . "4" . ">
    <input type=" . "text" . " value=" . "$accountPdata[0]" . " readonly>
    </td>
    <td> 
        <input type=" . "text" . " value=" . "$accountPdata[1]" . ">
    </td>
    <td>
        
        <input type=" . "text" . " value=" . "$accountPdata[2]" . ">
    </td>
    


</tr>
</table>
"; */
        /* <td ><button type=" . "submit" . ">update</button></td> */
  ///////////////  }
////////////}
 -->
<?php
session_start();
require_once "../models/AccountantModel.php";

     $imageLoc = showAllFile();

/* 
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

<td> <img src="{$data['employeeLName']}" alt=""></td>

</tr>"; */
while ($data = mysqli_fetch_assoc($imageLoc)) {
 $location=$data['img'];

    echo "<tr>

<td><img width=25% src=".$location."></td>




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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
</body>
</html>
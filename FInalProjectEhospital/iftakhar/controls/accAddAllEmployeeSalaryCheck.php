<?php
session_start();
require_once "../models/AccountantModel.php";
$EmpASfirstName = $_POST['EmpASfirstName'];
$EmpASlastName = $_POST['EmpASlastName'];
$EmpASuserName = $_POST['EmpASuserName'];
$EmpASalary = $_POST['EmpASalary'];
$EmpASType = $_POST['EmpASType'];



//$file = fopen('../allEmployeeAddSalary.txt', "r");
//while (!feof($file)) {
///////  $data = fgets($file);
///////  $checkPrevUser = explode("|", $data);

/* 
if ($EmpASfirstName == "" || $EmpASlastName == "" || $EmpASuserName == "" || $EmpASalary == "" || $EmpASType == "") {
    header('location: ../views/accAddAllEmployeeSalary.php?err=null');
}
if ($checkPrevUser[2] == $EmpASuserName) {

    $file = fopen('../allEmployeeAddSalary.txt', "r");
    while (!feof($file)) {
        $data = fgets($file);
        $empAddSalaryCheck = explode("|", $data);

        $fn = $EmpASfirstName;
        $ln = $EmpASlastName;
        $un = $EmpASuserName;
        $sl = $EmpASalary;
        $et = $EmpASType;



        $key = "$EmpASuserName";

        //load file into $fc array

        $fc = file("../allEmployeeAddSalary.txt");

        //open same file and use "w" to clear file

        $f = fopen("../allEmployeeAddSalary.txt", "w");

        //loop through array using foreach

        foreach ($fc as $line) {
            if (!strstr($line, $key)) //look for $key in each line
                fputs($f, $line); //place $line back in file
        }

        fclose($f);
        $empAddSalaryCheck = $fn . "|" . $ln . "|" . $un . "|" . $sl . "|" . $et . "\r\n";
        $file = fopen('../allEmployeeAddSalary.txt', 'a');
        fwrite($file, $empAddSalaryCheck);
        fclose($file);
        header('location: ../views/accountantHomepage.php');
        break;
    }
    // }

    echo "data updated";
    //}
 */

//} else {

/* $user = ['EmpASfirstName' => $EmpASfirstName, 'EmpASlastName' => $EmpASlastName, 'EmpASuserName' => $EmpASuserName, 'EmpASalary' => $EmpASalary, 'EmpASType' => $EmpASType]; */


$empAddSalary = ['EmpASfirstName' => $EmpASfirstName, 'EmpASlastName' => $EmpASlastName, 'EmpASuserName' => $EmpASuserName, 'EmpASalary' => $EmpASalary, 'EmpASType' => $EmpASType];
$status = addAllEmployeeSalary($empAddSalary);
$_SESSION['empAddSalary'] = $empAddSalary;
/* $empAddSalary = $EmpASfirstName . "|" . $EmpASlastName . "|" . $EmpASuserName . "|" . $EmpASalary . "|" . $EmpASType . "\r\n";
$file = fopen('../allEmployeeAddSalary.txt', 'a');
fwrite($file, $empAddSalary);
fclose($file); */
header('location: ../views/accountantHomepage.php');
//}
//}
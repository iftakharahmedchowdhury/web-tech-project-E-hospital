
 

<?php
session_start();
require_once "../models/patientModel.php";
$patientFn = $_SESSION['user']['patientFName'];
$patientLn = $_SESSION['user']['patientLName'];
$patientUserN = $_SESSION['user']['patientUserName'];
$requestDoctorAppoinment = $_POST['requestDoctorAppoinment'];

$doctorApp = ['0' => $patientFn, '1' => $patientLn, '2' => $patientUserN, '3' => $requestDoctorAppoinment];
$status = doctorRequest($doctorApp);
$_SESSION['doctorApp'] = $doctorApp;
/* $doctorApp = $patientFn."|".$patientLn."|".$patientUserN."|".$requestDoctorAppoinment."\r\n";
$file = fopen('../doctorAppoinmentRequest.txt', 'a');
fwrite($file, $doctorApp);
fclose($file); */
header('location: ../views/patientHomePage.php');

?>
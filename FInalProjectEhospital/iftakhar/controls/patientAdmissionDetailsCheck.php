
 

<?php
session_start();
require_once "../models/patientModel.php";
$patientUserN = $_SESSION['user']['patientUserName'];

$file = fopen('../patientAdmissionDetails.txt', "r");
// while(!feof($file)){
//  $data = fgets($file);
//  $admissionArr = explode("|", $data);
$user = ['patientUserName' => $patientUserN];
$admissionArr = showpatientAdmissionDetails($user);
if ($admissionArr != null) {
    //
    $admissionArr = ['patientFName' => $admissionArr['patientFName'], 'patientLName' => $admissionArr['patientLName'], 'patientUserName' => $admissionArr['patientUserName'], 'patientDOB' => $admissionArr['patientDOB'], 'patientGender' => $admissionArr['patientGender'], 'patientEmail' => $admissionArr['patientEmail']];
    $_SESSION['admissionArr'] = $admissionArr;
    ///
    setcookie('status', 'true', time() + 3600, '/');
    header('location: ../views/patientAdmissionDetails.php');
}

// }

?>
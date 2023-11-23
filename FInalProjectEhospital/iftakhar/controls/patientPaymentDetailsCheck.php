<!-- patientPaymentDetails -->




<?php
session_start();
$patientUserN = $_SESSION['user']['patientUserName'];
require_once "../models/patientModel.php";
$user = ['patientUserName' => $patientUserN];
$status = paymentDetails($user);

$patientPaymentArr = ['admissionDate' => $status['patientAdmissionDate'], 'pCost' => $status['patientCost']];
$_SESSION['patientPaymentArr'] = $patientPaymentArr;
setcookie('status', 'true', time() + 3600, '/');
header('location: ../views/patientPaymentDetails.php');

/* $file = fopen('../patientPaymentDetails.txt', "r");
while (!feof($file)) {
    $data = fgets($file);
    $patientPaymentArr = explode("|", $data);
    if ($patientPaymentArr[2] == $patientUserN) {
        //
        $patientPaymentArr = ['0' => $patientPaymentArr[0], '1' => $patientPaymentArr[1], '2' => $patientPaymentArr[2], '3' => $patientPaymentArr[3], '4' => $patientPaymentArr[4], '5' => $patientPaymentArr[5]];
        $_SESSION['patientPaymentArr'] = $patientPaymentArr;
        ///
        setcookie('status', 'true', time() + 3600, '/');
        header('location: ../views/patientPaymentDetails.php');
    }
} */

?>
<?php
session_start();
require_once "../models/AccountantModel.php";
$searchPerson = $_POST['searchPerson'];

$user = ['searchPerson' => $searchPerson];
$Valid = validForPay($user);
$status = searchPersonForAddPayment($user);


if ($Valid==null) {
    if ($status != null) {

        $userAccAddPayment = ['patientId' => $status['patientId'], 'patientFName' => $status['patientFName'], 'patientLName' => $status['patientLName'], 'patientUserName' => $status['patientUserName'], 'patientPassword' => $status['patientPassword'], 'patientDOB' => $status['patientDOB'], 'patientEmail' => $status['patientEmail'], 'patientGender' => $status['patientGender']];
        /*  $user = ['patientId' => $status['patientId'], 'firstName' => $status[0], 'lastName' => $status[1], 'userName' => $status[2], 'password' => $status[3], 'dob' => $status[4], 'age' => $status[5], 'gender' => $status[6]];*/
        $_SESSION['user'] = $userAccAddPayment;
        header('location: ../views/AccaddPatientPaymentDetails.php');
    }
    else{
        header('location: ../views/accAddPayment.php?err=dataNotFound');
    }
}
else{
    header('location: ../views/accAddPayment.php?err=PSUpdated');
}

<?php
session_start();
require_once "../models/patientModel.php";
$patientUsername = $_POST['patientUserName'];
$patientPassword = $_POST['patientPassword'];
if ($patientUsername=="" && $patientPassword=="" ) {
    header('location: ../views/logInPatient.php?err=bothEmpty');
    return;
}
if ($patientUsername == "") {
    //echo "invalid username/password!";
    header('location: ../views/logInPatient.php?err=userEmpty');
} 
if ( $patientPassword == "") {
    header('location: ../views/logInPatient.php?err=passwordEmpty');
}
else {
    $user = ['patientUserName' => $patientUsername, 'patientPassword' => $patientPassword];
    $status = loginCheck($user);

    //$file = fopen('../patientRegistration.txt', "r");
    // while (!feof($file)) {
    // $data = fgets($file);
    // $user = explode("|", $data);
    // if ($user[2] == $patientUsername && $user[3] == $patientPassword) {
    //
    /* $user = ['patientId' => $status['patientId'],'firstName' => $status[''], 'lastName' => $status[1], 'userName' => $status[2], 'password' => $status[3], 'dob' => $status[4], 'age' => $status[5], 'gender' => $status[6]]; */
    if ($status != null) {
        $user = ['patientId' => $status['patientId'], 'patientFName' => $status['patientFName'], 'patientLName' => $status['patientLName'], 'patientUserName' => $status['patientUserName'], 'patientPassword' => $status['patientPassword'], 'patientDOB' => $status['patientDOB'], 'patientEmail' => $status['patientEmail'], 'patientGender' => $status['patientGender']];
        /*  $user = ['patientId' => $status['patientId'], 'firstName' => $status[0], 'lastName' => $status[1], 'userName' => $status[2], 'password' => $status[3], 'dob' => $status[4], 'age' => $status[5], 'gender' => $status[6]];*/
        $_SESSION['user'] = $user;
        ///
        setcookie('status', 'true', time() + 3600, '/');
        header('location: ../views/patientHomePage.php');
    }
    //}
    // }

    echo "invalid user";
}

    //$_POST

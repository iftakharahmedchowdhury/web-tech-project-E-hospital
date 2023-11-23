<?php
session_start();
require_once "../models/staffLogInModel.php";
$patientUsername = $_POST['patientUserName'];
$patientPassword = $_POST['patientPassword'];
$remMe = $_POST['remMe'];


if ($patientUsername == "" || $patientPassword == "") {
    //echo "invalid username/password!";
    header('location: ../views/logInPatient.php?err=null');
} else {
    $user = ['patientUserName' => $patientUsername, 'patientPassword' => $patientPassword];
    $status = loginCheck($user);


    if ($status != null) {
        if ($status['staffUserType'] == "pharmacist") {
            $user = ['userName' => $status['userName'], 'password' => $status['password'], 'confirmpassword' => $status['confirmpassword'], 'email' => $status['email'], 'userType' => $status['userType']];

            $_SESSION['user'] = $user;
            ///
            if ($remMe == "remMe") {
                setcookie('status', 'true', time() + 3600, '/');
            }

            header('location: ../views/pharmacistHomePage.php');
        } else {
            $user = ['userName' => $status['userName'], 'password' => $status['password'], 'confirmpassword' => $status['confirmpassword'], 'email' => $status['email'], 'userType' => $status['userType']];

            $_SESSION['user'] = $user;
            ///
            if ($remMe == "remMe") {
                setcookie('status', 'true', time() + 3600, '/');
            }
            /*   setcookie('status', 'true', time() + 3600, '/'); */
            header('location: ../views/accountantHomepage.php');
        }
    }
    //}
    // }

    echo "invalid user";
}

    //$_POST

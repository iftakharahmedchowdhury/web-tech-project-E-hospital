<?php
session_start();
$accountantUserName = $_POST['accountantUserName'];
$accountantPassword = $_POST['accountantPassword'];

if ($accountantUserName == "" || $accountantPassword == "") {
    //echo "invalid username/password!";
    header('location: ../views/loginAccountants.php?err=null');
} else {

    $file = fopen('../AccountantRegistration.txt', "r");
    while (!feof($file)) {
        $data = fgets($file);
        $pharmacist = explode("|", $data);
        if ($pharmacist[0] == $accountantUserName && $pharmacist[1] == $accountantPassword) {
            //
            $pharmacist = ['accountantUserName' => $pharmacist[0], 'accountantPassword' => $pharmacist[1]];
            $_SESSION['pharmacist'] = $pharmacist;
            ///
            setcookie('status', 'true', time() + 3600, '/');
            header('location: ../views/accountantHomepage.php');
        }
    }

    echo "invalid user";
}

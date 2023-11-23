<?php
session_start();
require_once "../models/patientModel.php";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];

if ($firstName == "" || $lastName == "" || $userName == "" || $password == "" || $dob == "" || $age == "" || $gender == "") {
    header('location: ../views/signUp.php?err=null');
}
/*     
    else{
        $user = ['firstName'=> $firstName, 'lastName'=>$lastName, 'userName'=>$userName, 'password'=>$password, 'dob'=>$dob, 'age'=>$age, 'gender'=>$gender];
        $status = addPatient($user);
        $_SESSION['user'] = $user;

     
        if($status){
            header('location: ../views/logInPatient.php');
        }else{
            echo "Database error...";
        }
     
    } */

if (!preg_match('/^\w{4,20}$/', $userName)) {
    header('location: ../views/signUp.php?err=wrongUserName');
} else {

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        header('location: ../views/signUp.php?err=notValidpass');
    } else {
        if (preg_match("/([a-zA-Z0-9])+\@([a-zA-Z0-9-])+\.(com)+/", $age)) {

            //file upload
            /*   $src = $_FILES['myfile']['tmp_name'];
                $des = "upload/";
                $des = $des . basename($_FILES['myfile']['name']);
    
    
                if (move_uploaded_file($src, $des)) {
                    
                } else {
                    echo "error in file upload";
                } */
            $user = ['firstName' => $firstName, 'lastName' => $lastName, 'userName' => $userName, 'password' => $password, 'dob' => $dob, 'age' => $age, 'gender' => $gender];
            $status = addPatient($user);
            $_SESSION['user'] = $user;


            if ($status) {
                header('location: ../views/logInPatient.php');
            } else {
                echo "Database error...";
            }
        } else {
            header('location: ../views/signUp.php?err=NotValidEmail');
        }
    }
}

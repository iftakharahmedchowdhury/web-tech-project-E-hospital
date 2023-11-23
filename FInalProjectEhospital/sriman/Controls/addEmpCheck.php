<?php
session_start();
require_once "../Models/staffmemberDBmodel.php";

$usernameEMP = $_POST['usernameEMP'];
$positionEMP = $_POST['PositionEmp'];
$nameEMP = $_POST['NameEMP'];
$birthEMP = $_POST['dobEmp'];
$ageEMP = $_POST['ageEmp'];
$genderEMP = $_POST['genderEmp'];
$addressEMP = $_POST['addressEmp'];
$phoneEMP = $_POST['phoneEmp'];
$mailEMP = $_POST['mailEmp'];
$passwordEMP = $_POST['passwordEmp'];


if ($usernameEMP == "" || $positionEMP == "" || $nameEMP == "" || $birthEMP == "" || $ageEMP == "" || $genderEMP == "" || $addressEMP == "" || $phoneEMP == "" || $mailEMP == "" || $passwordEMP == "") {
    header('location: ../Controls/Add_Employee.php?err=null');
} else {


    if (preg_match("/([a-zA-Z0-9])+\@([a-zA-Z0-9-])+\.(com)+/", $mailEMP)) {


        $user = ['usernameEMP' => $usernameEMP, 'PositionEmp' => $positionEMP, 'NameEMP' => $nameEMP, 'dobEmp' => $birthEMP, 'ageEmp' => $ageEMP, 'genderEmp' => $genderEMP, 'addressEmp' => $addressEMP, 'phoneEmp' => $phoneEMP, 'mailEmp' => $mailEMP, 'passwordEmp' => $passwordEMP];
        $status = addEmp($user);
        $_SESSION['user'] = $user;


        if ($status) {
            header('location: ../Views/Staff Member Database.php');
        } else {
            echo "Database error...";
        }
    } else {
        header('location: ../views/Staff Member Database.php?err=NotValidEmail');
    }



    /*

        $user = ['usernameEMP'=>$usernameEMP, 'PositionEmp'=> $positionEMP, 'NameEMP'=>$nameEMP, 'dobEmp'=>$birthEMP, 'ageEmp'=>$ageEMP, 'genderEmp'=>$genderEMP, 'addressEmp'=>$addressEMP, 'phoneEmp'=>$phoneEMP, 'mailEmp'=>$mailEMP, 'passwordEmp'=>$passwordEMP];
        $status = addEmp($user);
		if($status){
			header('location: ../Views/Staff Member Database.php');
		}else{
			echo "Database Error Found!!";
		}*/
}

<?php 
    session_start();
    require_once "../models/AccountantModel.php";
   $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $pAdmissionDate = $_POST['pAdmissionDate'];
    $pCost = $_POST['pCost'];
    $gender = $_POST['gender'];

     if($firstName == "" || $lastName == "" || $userName == ""|| $pAdmissionDate == ""|| $pCost == ""|| $gender == "") {
        header('location: ../views/AccaddPatientPaymentDetails.php?arrr=null');
    }else{
        $patientPayCost = ['firstName'=> $firstName, 'lastName'=>$lastName, 'userName'=>$userName, 'pAdmissionDate'=>$pAdmissionDate, 'pCost'=>$pCost, 'gender'=>$gender];
        $status = patientPayCost($patientPayCost);
        $_SESSION['patientPayCost'] = $patientPayCost;
       /*  $patientPayCost = $firstName."|".$lastName."|".$userName."|".$pAdmissionDate."|".$pCost."|".$gender."\r\n";
        $file = fopen('../patientPaymentDetails.txt', 'a');
        fwrite($file, $patientPayCost);
        fclose($file); */
        header('location: ../views/accountantHomepage.php');
    }
?>
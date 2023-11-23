<?php 
    session_start();
    require_once "../Models/admissiondbModel.php";
    $ADDname = $_POST['AdmissionName'];
    $ADDdob = $_POST['AdmissionDOB'];
    $ADDdate = $_POST['AdmissionDATE'];
    $ADDage = $_POST['AdmissionAGE'];
    $ADDgnd = $_POST['AdmissionGND'];
    $ADDad = $_POST['AdmissionADD'];
    $ADDphn = $_POST['AdmissionPHN'];
    $ADDmail = $_POST['AdmissionMAIL'];
    $ADDdiag = $_POST['AdmissionDIAG'];


    if($ADDname == "" || $ADDdob == "" || $ADDdate == "" ||$ADDage == "" || $ADDgnd == "" || $ADDad == "" || $ADDphn == "" || $ADDmail == "" || $ADDdiag == "") {
        header('location: ../Views/Admission Details.php?err=null');
    }else{
        $user = ['AdmissionName'=> $ADDname, 'AdmissionDOB'=>$ADDdob, 'AdmissionDATE'=>$ADDdate, 'AdmissionAGE'=>$ADDage, 'AdmissionGND'=>$ADDgnd, 'AdmissionADD'=>$ADDad, 'AdmissionPHN'=>$ADDphn, 'AdmissionMAIL'=>$ADDmail, 'AdmissionDIAG'=>$ADDdiag];
        $status = addAdmit($user);
		if($status){
			header('location: ../Views/Admission Details.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
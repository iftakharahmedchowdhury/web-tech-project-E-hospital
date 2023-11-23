<?php 
    session_start();
    require_once "../Models/staffmemberDBmodel.php";

    $UppositionEMP = $_POST['UpPositionEmp'];
    $UpnameEMP = $_POST['UpNameEmp'];
    $UpbirthEMP = $_POST['UpdobEmp'];
    $UpageEMP = $_POST['UpageEmp'];
    $UpgenderEMP = $_POST['UpgenderEmp'];
    $UpaddressEMP = $_POST['UpaddressEmp'];
    $UpphoneEMP = $_POST['UpphoneEmp'];
    $UpmailEMP = $_POST['UpmailEmp'];
    $UppasswordEMP = $_POST['UppasswordEmp'];

    $user = ['UpPositionEmp'=> $UppositionEMP, 'UpNameEmp'=>$UpnameEMP, 'UpdobEmp'=>$UpbirthEMP, 'UpageEmp'=>$UpageEMP, 'UpgenderEmp'=>$UpgenderEMP, 'UpaddressEmp'=>$UpaddressEMP, 'UpphoneEmp'=>$UpphoneEMP, 'UpmailEmp'=>$UpmailEMP, 'UppasswordEmp'=>$UppasswordEMP];


    if($UppositionEMP == "" || $UpfirstnameEMP == "" || $UplastnameEMP == "" || $UpbirthEMP == "" ||$UpageEMP == "" || $UpgenderEMP == "" || $UpaddressEMP == "" || $UpphoneEMP == "" || $UpmailEMP == "" || $UppasswordEMP == "") {
        header('location: ../Views/Staff Member Database.php?err=null');
    }else{
        $status = UpEmp($user);
		if($status){
			header('location: ../Views/Staff Member Database.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
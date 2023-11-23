<?php 
    session_start();
    require_once "../Models/allotmentdbModel.php";
    
    $patientname = $_POST['patientNAME'];
    $alloteddate = $_POST['allotedDATE'];
    $allotedtime = $_POST['alloteTIME'];


    if($patientname == "" || $alloteddate == "" || $allotedtime == "") {
        header('location: ../Views/Add Allotment.php?err=null');
    }else{
        $user = ['patientNAME'=>$patientname, 'allotedDATE'=>$alloteddate, 'alloteTIME'=>$allotedtime];
        $status = addAllot($user);
		if($status){
            header('location: ../Views/BedAllotment.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
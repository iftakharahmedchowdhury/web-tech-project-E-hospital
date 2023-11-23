<?php 
    session_start();
    require_once "../Models/deathrecordDBmodel.php";

	
    $deathDate = $_POST['deathDOB'];
    $deathTime = $_POST['deathTIME'];
    $deathName = $_POST['deathNAME'];
    $deathGender = $_POST['deathgender'];
    $deathAge = $_POST['deathAGE'];
    $deathCause = $_POST['deathCAUSE'];
    $deathOccup = $_POST['deathOCCUP'];
    $deathFather = $_POST['deathFATHER'];
    $deathMother = $_POST['deathMOTHER'];


    if($deathDate == "" || $deathTime == "" || $deathName == "" || $deathGender == "" ||$deathAge == "" || $deathCause == "" || $deathOccup == "" || $deathFather == "" || $deathMother == "") {
        header('location: ../Controls/Add Death Record.php?err=null');
    }else{
        $user = ['deathDOB'=> $deathDate, 'deathTIME'=>$deathTime, 'deathNAME'=>$deathName, 'deathgender'=>$deathGender, 'deathAGE'=>$deathAge, 'deathCAUSE'=>$deathCause, 'deathOCCUP'=>$deathOccup, 'deathFATHER'=>$deathFather, 'deathMOTHER'=>$deathMother];
        $status = addRecord($user);
		if($status){
			header('location: ../Views/Death_Record.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
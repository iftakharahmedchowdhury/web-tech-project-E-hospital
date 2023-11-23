<?php 
    session_start();
    require_once "../Models/appointmentdbModel.php";

    $AppoinDat = $_POST['AppoinDate'];
    $AppoinRoo = $_POST['AppoinRoom'];
    $AppoinDoc = $_POST['AppoinDoc'];
    $AppoinTim = $_POST['AppoinTim'];


    if($AppoinDat == "" || $AppoinRoo == "" || $AppoinDoc == "" || $AppoinTim == "") {
        header('location: ../Views/Add Appointment.php?err=null');
    }else{
        $user = ['AppoinDate'=>$AppoinDat, 'AppoinRoom'=>$AppoinRoo, 'AppoinDoc'=>$AppoinDoc, 'AppoinTim'=>$AppoinTim];
        $status = addAppoin($user);
		if($status){
            header('location: ../Views/Appointment.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
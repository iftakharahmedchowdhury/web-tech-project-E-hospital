<?php
session_start();
require_once "../Models/appointmentdbModel.php";

        $UpAppoinDate = $_POST['upAppoinDate'];
        $UpAppoinRoom = $_POST['upAppoinRoom'];
        $UpAppoinDoct = $_POST['upAppoinDoc'];
        $UpAppoinTime = $_POST['upAppoinTim'];

        $user = ['upAppoinDate'=> $UpAppoinDate, 'upAppoinRoom'=>$UpAppoinRoom, 'upAppoinDoc'=>$UpAppoinDoct, 'upAppoinTim'=>$UpAppoinTime];

if($UpAppoinDate== "" || $UpAppoinRoom== "" || $UpAppoinDoct== "" || $UpAppoinTime== ""){

    header(location: '../Views/Appointment.php?err=null');

}else{

    $result = UpAppoin($user);
    if($result){
        header('location: ../Views/Appointment.php');
    }else{
        echo "Database Error Found!!";
    }
}




?>
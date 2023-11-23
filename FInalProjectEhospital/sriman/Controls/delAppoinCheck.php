<?php
session_start();
    require_once "../Models/appointmentdbModel.php";
    
    $DeleteAppoin = $_POST['delAppoin'];

    if ($DeleteAppoin == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['delAppoin'=> $DeleteAppoin];
            $status = delAppoin($user);
            if($status){
                header('location: ../Views/Appointment.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
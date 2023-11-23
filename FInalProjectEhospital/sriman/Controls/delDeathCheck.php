<?php
session_start();
    require_once "../Models/deathrecordDBmodel.php";
    
    $DeleteDeath = $_POST['DelDeath'];

    if ($DeleteDeath == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['DelDeath'=> $DeleteDeath];
            $status = delRecord($user);
            if($status){
                header('location: ../Views/Death_Record.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
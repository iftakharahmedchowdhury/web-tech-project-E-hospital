<?php
session_start();
    require_once "../Models/deliveryBirthDBmodel.php";
    
    $DeleteChild = $_POST['DelChild'];

    if ($DeleteChild == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['DelChild'=> $DeleteChild];
            $status = delChild($user);
            if($status){
                header('location: ../Views/Delivery and Birth Record.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
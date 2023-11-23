<?php
session_start();
    require_once "../Models/allotmentdbModel.php";
    
    $DeleteAllot = $_POST['delAllot'];

    if ($DeleteAllot == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['delAllot'=> $DeleteAllot];
            $status = delAllot($user);
            if($status){
                header('location: ../Views/bedAllotment.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
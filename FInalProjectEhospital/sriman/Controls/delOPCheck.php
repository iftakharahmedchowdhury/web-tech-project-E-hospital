<?php
session_start();
    require_once "../Models/optheaterDBmodel.php";
    
    $DeleteOP = $_POST['delOP'];

    if ($DeleteOP == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['delOP'=> $DeleteOP];
            $status = delOP($user);
            if($status){
                header('location: ../Views/OP Theater Details.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
<?php
session_start();
    require_once "../Models/staffmemberDBmodel.php";
    
    $searchEMP = $_POST['empname'];

    if ($searchEMP == "") {
        echo "Empty Search Box";
    }else {
        {
            $user = ['empname'=> $searchEMP];
            $status = delEmp($user);
            if($status){
                header('location: ../Views/Staff Member Database.php');
            }else{
                echo "Database error Found!!";
            }

        }

}
?>
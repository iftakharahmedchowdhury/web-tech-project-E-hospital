<?php
session_start();
require_once "../models/pharmacistModel.php";
$searchproduct = $_POST['searchproduct'];

if ($searchproduct == "") {
    /*  header('location: DeleteProduct.php?err=null'); */
} else { {
        $user = ['searchproduct' => $searchproduct];
        $status = deleteProduct($user);

        if ($status) {
            header('location: ../views/pharmacistHomePage.php');
        } else {
            echo "Database error...";
        }
    }
}

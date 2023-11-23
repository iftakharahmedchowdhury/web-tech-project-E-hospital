<?php

session_start();
require_once "../models/pharmacistModel.php";
//require ("../models/pharmacistModel.php");
$searchproduct = $_POST['searchproduct'];
$productName = $_POST['productName'];
$productCost = $_POST['productCost'];
$setStatus = $_POST['setStatus'];



if ($searchproduct == "") {
    echo "null";
    /*  header('location: DeleteProduct.php?err=null'); */
} else { {
        $user = ['searchproduct' => $searchproduct,'productName'=> $productName, 'productCost'=>$productCost, 'setStatus'=> $setStatus];
        $status = updateProduct($user);

        if ($status) {
           
            header('location: ../views/pharmacistHomePage.php');
        } else {
            echo "Database error...";
        }
    }
}

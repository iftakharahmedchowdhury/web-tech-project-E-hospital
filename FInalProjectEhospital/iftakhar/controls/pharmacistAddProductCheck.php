<?php
session_start();
require_once "../models/pharmacistModel.php";

//$User_Type=$_REQUEST['users'];
#$fname = $_REQUEST['formname'];

$json = $_POST['data'];
$pharmaProduct = json_decode($json);
$pharmaPN = $pharmaProduct->pharmaPN;
$pharmaPC = $pharmaProduct->pharmaPC;
$pharmaPS = $pharmaProduct->pharmaPS;


if ($pharmaPN != null && $pharmaPC != null && $pharmaPS) {
    $user = ['pharmaProductName' => $pharmaPN, 'pharmaCost' => $pharmaPC, 'pharmaSetStatus' => $pharmaPS];
    $status = insertProduct($user);

    if ($status) {
        echo ("data input successfull.");
       
    } else {
        echo "invalid user!";
    }
}

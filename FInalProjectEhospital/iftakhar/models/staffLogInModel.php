<?php
require_once "db.php";


function loginCheck($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM stafflogin where staffUserName='{$user['patientUserName']}' AND staffPassword='{$user['patientPassword']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}
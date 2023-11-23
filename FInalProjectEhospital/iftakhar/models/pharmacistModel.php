<?php
require_once "db.php";

/*     function login($user){
        $con = getConnection();
        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        if($user != null){
            return true;
        }else{
            return false;
        }
    } */

function insertProduct($user)
{


    $conn = getConnection();
    $sql = "insert into phramacistaddproduct values('', '{$user['pharmaProductName']}', '{$user['pharmaCost']}', '{$user['pharmaSetStatus']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}

function showAllProduct()
{
    $conn = getConnection();
    $sql = "select * from phramacistaddproduct ";

    //////////////////////////////////
    $result = mysqli_query($conn, $sql);
    return $result;
}

function updateProduct($user)
{

    $conn = getConnection();
    $sql = "UPDATE phramacistaddproduct SET productName='{$user['productName']}',productCost='{$user['productCost']}',setStatus='{$user['setStatus']}' where medicineId='{$user['searchproduct']}'";;
    $status = mysqli_query($conn, $sql);
    return $status;
}

function deleteProduct($user)
{
    $conn = getConnection();
    $sql = "DELETE from phramacistaddproduct where productName='{$user['searchproduct']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function showSpecificValue($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM phramacistaddproduct where productName='{$user['searchproduct']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}

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

function addPatient($user)
{


    $conn = getConnection();
    $sql = "insert into patientregistration values('', '{$user['firstName']}', '{$user['lastName']}', '{$user['userName']}', '{$user['password']}', '{$user['dob']}', '{$user['age']}', '{$user['gender']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}
function loginCheck($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM patientregistration where patientUserName='{$user['patientUserName']}' AND patientPassword='{$user['patientPassword']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}
function doctorRequest($user)
{
    $conn = getConnection();
    $sql = "insert into doctorappoinmentrequest values('{$user['0']}', '{$user['1']}', '{$user['2']}', '{$user['3']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}


function showpatientAdmissionDetails($user)
{
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM patientregistration where patientUserName='{$user['patientUserName']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
}

function patientReview($user)
{
    $conn = getConnection();
    $sql = "insert into patientreview values('', '{$user['patientUN']}', '{$user['ratting']}', '{$user['patientReviewText']}')";
    $status = mysqli_query($conn, $sql);
    return $status;
}

function personalInfoUpdate($user){
    $conn = getConnection();
    $sql = "UPDATE patientregistration SET patientFName='{$user['UfirstName']}',patientLName='{$user['UlastName']}',patientUserName='{$user['UuserName']}',patientPassword='{$user['Upassword']}',patientDOB='{$user['Udob']}',patientEmail='{$user['Uage']}',patientGender='{$user['Ugender']}' where patientId='{$user['patientId']}'";;
    $status = mysqli_query($conn, $sql);
    return $status;

}

function paymentDetails($user){
    $conn = getConnection();
    //SELECT * FROM `phramacistaddproduct` WHERE productName='c1'
    $sql = "SELECT * FROM patientpaymentdetails where patientUserName='{$user['patientUserName']}'";
    $result = mysqli_query($conn, $sql);


    $data = mysqli_fetch_assoc($result);

    if ($data == null) {
        /*  header('location: ../views/pharmacyAndInventoryStockmanagement.php?err=dataNotFound'); */
        return null;
    } else {
        return $data;
    }
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

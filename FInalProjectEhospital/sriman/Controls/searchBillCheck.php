<?php
session_start();
require_once "../Models/electricbillDBmodel.php";

        $bill = $_POST['SearchBill'];
        $user  = ['SearchBill'=> $bill];

        if($bill == "") {
            header('location: ../Views/electric bill.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchBill($user);

        }else{
            echo "Invalid Input";
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital</title>
</head>
<body>
    <a href="../Views/electric bill.php"><button>BACK</button></a>
</body>
</html>
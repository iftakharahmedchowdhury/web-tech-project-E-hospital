<?php
session_start();
require_once "../Models/staffmemberDBmodel.php";

        $employee = $_POST['SearchEmp'];
        $user  = ['SearchEmp'=> $employee];

        if($employee == "") {
            header('location: ../Views/Staff Member Database.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchEmp($user);

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
    <a href="../Views/Staff Member Database.php"><button>BACK</button></a>
</body>
</html>
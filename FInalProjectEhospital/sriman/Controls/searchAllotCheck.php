<?php
session_start();
require_once "../Models/allotmentdbModel.php";

        $Allot = $_POST['SearchAllot'];
        $user  = ['SearchAllot'=> $Allot];

        if($Allot == "") {
            header('location: ../Views/bedAllotment.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchAllot($user);

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
    <a href="../Views/bedAllotment.php"><button>BACK</button></a>
</body>
</html>
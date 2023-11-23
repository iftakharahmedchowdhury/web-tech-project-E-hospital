<?php
session_start();
require_once "../Models/admissiondbModel.php";

        $Admit = $_POST['SearchAdmit'];
        $user  = ['SearchAdmit'=> $Admit];

        if($Admit == "") {
            header('location: ../Views/Medical History.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchAdmit($user);

        }else{
            echo "Invalid Input";
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Assets/style.css">

    <title>E-Hospital</title>
</head>
<body style="background-color:powderblue;">
    <a href="../Views/Medical History.php"><button>BACK</button></a>
</body>
</html>
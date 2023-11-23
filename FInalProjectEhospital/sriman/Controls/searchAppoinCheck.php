<?php
session_start();
require_once "../Models/appointmentdbModel.php";

        $Appoin = $_POST['SearchAppoin'];
        $user  = ['SearchAppoin'=> $Appoin];

        if($Appoin == "") {
            header('location: ../Views/Appointment.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchAppoin($user);

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
    <a href="../Views/Appointment.php"><button>BACK</button></a>
</body>
</html>
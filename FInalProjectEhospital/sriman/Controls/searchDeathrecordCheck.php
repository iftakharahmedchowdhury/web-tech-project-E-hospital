<?php
session_start();
require_once "../Models/deathrecordDBmodel.php";

        $death = $_POST['SearchDeath'];
        $user  = ['SearchDeath'=> $death];

        if($death == "") {
            header('location: ../Views/Death_Record.php?err=null');
        }else if($user != null){
            echo "<center>Search Result</center>";
            $status = SearchRecord($user);

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
    <a href="../Views/Death_Record.php"><button>BACK</button></a>
</body>
</html>
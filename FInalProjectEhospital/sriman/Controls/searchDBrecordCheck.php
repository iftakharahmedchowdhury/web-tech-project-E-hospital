<?php
session_start();
require_once "../Models/deliveryBirthDBmodel.php";

        $child = $_POST['searchchild'];

        if($child == null) {
            echo "Please Enter ChildName!";
            return;
        }else if($child != null){
            $user  = ['searchchild'=> $child];

            echo "<center>Search Result</center>";
            $status = SearchChild($user);

        }else{
            echo "Invalid Input";
            return;
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Hospital</title>
</head>
<body>
    <a href="../Views/Delivery and Birth Record.php"><button>BACK</button></a>
</body>
</html>
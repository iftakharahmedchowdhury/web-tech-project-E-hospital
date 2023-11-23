<?php
session_start();
require_once "../Models/optheaterDBmodel.php";

        $optheater = $_POST['SearchOP'];
        $user  = ['SearchOP'=> $optheater];

        if($optheater == "") {
            header('location: ../Views/OP Theater Details.php?err=null');
        }else if($user != null){
            echo "<center><h2>Search Result</h2></center>";
            $status = SearchOP($user);
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
    <a href="../Views/OP Theater Details.php"><button>BACK</button></a>
</body>
</html>
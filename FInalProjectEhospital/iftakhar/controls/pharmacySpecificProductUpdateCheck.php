<?php
session_start();
$SmedName = $_POST['SmedName'];
$SmedPrice = $_POST['SmedPrice'];
$SmedStatus = $_POST['SmedStatus'];
if ($SmedName == "" || $SmedPrice == "" || $SmedStatus == "" ) {
    header('location: pharmacyAndInventoryStockmanagement.php?err=null');
} else {
    $file = fopen('pharmacyInventory.txt', "r");
    while (!feof($file)) {
        $data = fgets($file);
        $user = explode("|", $data);
        if ($user[0] == $SmedName) {
            // echo " match found";
            // echo $user[2];


            // $user[2]=$email;
            ////////////
            //$user = ['UPusername'=> $username, 'UPpassword'=>$password, 'UPemail'=>$email];
            //$_SESSION['user'] = $user;
            /*  $name = $user[0];
            $pass = $user[1]; */
            $mn = $SmedName;
            $mp = $SmedPrice;
            $ms = $SmedStatus;

            // echo "fn"+$fn;

            //$user = $user[0]."|".$user[1]."|".$email."\r\n";



            $key = "$mn";

            //load file into $fc array

            $fc = file("pharmacyInventory.txt");

            //open same file and use "w" to clear file

            $f = fopen("pharmacyInventory.txt", "w");

            //loop through array using foreach

            foreach ($fc as $line) {
                if (!strstr($line, $key)) //look for $key in each line
                    fputs($f, $line); //place $line back in file
            }

            fclose($f);
            $user = $mn . "|" . $mp . "|" . $ms . "\r\n";
            $file = fopen('pharmacyInventory.txt', 'a');
            fwrite($file, $user);
            fclose($file);
            header('location: pharmacistHomePage.php');
            break;
        }
    }
}

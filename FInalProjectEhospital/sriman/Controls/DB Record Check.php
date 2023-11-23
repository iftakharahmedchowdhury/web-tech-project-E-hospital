<?php 
    session_start();
    require_once "..//deliveryBirthDBmodel.php";

	
    $childname      = $_POST['Childusername'];
    $childgender    = $_POST['Childgender'];
    $childdob       = $_POST['Childdob'];
    $childfather    = $_POST['fatherName'];
    $childmother    = $_POST['motherName'];



    if($childname == "" || $childgender == "" || $childdob == "" || $childfather == "" ||$childmother == "") {
        header('location: ../Views/Add DB Record.php?err=null');
    }else{
        $user = ['Childusername'=> $childname, 'Childgender'=>$childgender, 'Childdob'=>$childdob,'fatherName'=>$childfather, 'motherName'=>$childmother];
        $status = addRecord($user);
		if($status){
			header('location: ../Views/Delivery and Birth Record.php');
		}else{
			echo "Database Error Found!!";
		}
    }

<?php 
    session_start();
    require_once "../Models/optheaterDBmodel.php";

	
    $OperationName = $_POST['operationName'];
    $OperationDuration = $_POST['operationDuration'];
    $OperationNumber = $_POST['operationNumber'];
    $OperationDate = $_POST['operationDate'];
    $OperationTime = $_POST['operationTime'];



    if($OperationName == "" || $OperationDuration == "" || $OperationNumber == "" || $OperationDate == "" || $OperationTime == "") {
        header('location: ../Controls/Add Bill Record.php?err=null');
    }else{
        $user = ['operationName'=> $OperationName, 'operationDuration'=>$OperationDuration, 'operationNumber'=>$OperationNumber, 'operationDate'=>$OperationDate, 'operationTime'=>$OperationTime];
        $status = addOP($user);
		if($status){
			header('location: ../Views/OP Theater Details.php');
		}else{
			echo "Database Error Found!!";
		}
    }
?>
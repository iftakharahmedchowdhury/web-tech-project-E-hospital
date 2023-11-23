<?php 
    session_start();
    require_once "../Models/electricbillDBmodel.php";

	$data = $_POST['json'];
    $elecbill = json_decode($data);
    $billDate =     $elecbill -> billdateID;
    $billUse =      $elecbill -> billuseID;
    $billCost =     $elecbill -> billcostID;
    $billAmount =   $elecbill -> billamountID;

    if ($billDate != null && $billUse != null && $billCost != null && $billAmount !=null) {

        $user = ['billdate'=> $billDate, 'billusage'=>$billUse, 'billcost'=>$billCost, 'billamount'=>$billAmount];
        $status = addBill($user);
        if ($status) {
            header('location: ../Views/electric bill.php');
        }else {
            echo "invalid!";
        }
    
    }

/*
    if($BillDate == "" || $BillUse == "" || $BillCost == "" || $BillAmount == "") {
        header('location: ../Controls/Add Bill Record.php?err=null');
    }else{
        $user = ['billdate'=> $BillDate, 'billusage'=>$BillUse, 'billcost'=>$BillCost, 'billamount'=>$BillAmount];
        $status = addBill($user);
		if($status){
			header('location: ../Views/electric bill.php');
		}else{
			echo "Database Error Found!!";
		}
    }*/
?>
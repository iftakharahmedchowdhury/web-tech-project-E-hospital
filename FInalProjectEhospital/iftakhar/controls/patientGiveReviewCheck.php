<?php 
    session_start();
    require_once "../models/patientModel.php";
    $patientUN = $_POST['patientUN'];
    $ratting = $_POST['ratting'];
    $patientReviewText = $_POST['patientReviewText'];
   
 

/*      if($firstName == "" || $lastName == "" || $userName == ""|| $password == ""|| $dob == ""|| $age == ""|| $gender == "") {
        header('location: signUp.php?err=null');
    }else{ */
        $review = ['patientUN'=> $patientUN, 'ratting'=>$ratting, 'patientReviewText'=>$patientReviewText];
        $status = patientReview($review);
        $_SESSION['review'] = $review;


       /*  $review = $patientUN."|".$ratting."|".$patientReviewText."\r\n";
        $file = fopen('../patientReview.txt', 'a');
        fwrite($file, $review);
        fclose($file); */
        header('location: ../views/patientHomePage.php');
    
?>
<?php 
    session_start();
    require_once "../Models/loginDBmodel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = ['username'=> $username, 'password'=>$password];


	
    if($username == "" || $password == "") {
        header('location: ../Views/HospitalLogin.php?err=null');
    }else if($user != null){
        if(strlen($password) < 6){
            $status = logUser($user);
            if($status){
                $_SESSION['status'] = "true";
            }else{
                echo "Database Error Found!!";
            }

        }else{
            header('Location: ../Views/HospitalLogin.php?err=notValidPassword');
        }
    }else{
        echo "invalid user";
    }

?>
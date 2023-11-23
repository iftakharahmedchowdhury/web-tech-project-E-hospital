<?php 
    require_once "db.php";


    function logUser($user){
        $con = getConnection();
        $sql = "select * from hospitallogindb where username='{$user['username']}' and password='{$user['password']}'";
        $status = mysqli_query($con, $sql);

        if(mysqli_num_rows($status) > 0){
            while($row = mysqli_fetch_assoc($status)){
                if($row["Role"]=="ADMIN" || $row["Role"]=="Admin"){
                    header('Location: ../Views/D_Admin.php');
                }else if($row["Role"]=="DOCTOR" || $row["Role"]=="Doctor"){
                    header('Location: ../Views/D_Doctor.php');
                }else if($row["Role"]=="RECEPTIONIST" || $row["Role"]=="Receptionist"){
                    header('Location: ../Views/D_Receptionist.php');
                }else if($row["Role"]=="NURSE" || $row["Role"]=="Nurse"){
                    header('Location: ../Views/D_Nurse.php');
                }else{
                    echo "INVALID USERID/PASSWORD!!";
                }
            }
        }else{
            header('Location: ../Views/HospitalLogin.php');
        }
        return $status;
    }
?>
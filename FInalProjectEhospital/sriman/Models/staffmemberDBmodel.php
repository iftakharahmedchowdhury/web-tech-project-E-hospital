<?php 
    require_once "db.php";


    function addEmp($user){
        $con = getConnection();
        $sql = "insert into staffmemberdb values('','{$user['usernameEMP']}','{$user['PositionEmp']}','{$user['NameEMP']}','{$user['dobEmp']}','{$user['ageEmp']}','{$user['genderEmp']}','{$user['addressEmp']}','{$user['phoneEmp']}','{$user['mailEmp']}','{$user['passwordEmp']}')";
        $status = mysqli_query($con, $sql);
        
        $dataSQL= "insert into hospitallogindb values('','{$user['usernameEMP']}','{$user['passwordEmp']}','{$user['PositionEmp']}')";
        $stat = mysqli_query($con, $dataSQL);

        return $status;
    }

    function showEmp(){
        $conn = getConnection();
        $sql = "select * from staffmemberdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Employee ID</th>
        <th>Employee Position</th>
        <th>Employee Name</th>
        <th>Date of Birth</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Email Address</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['EmployeeID']}</td>
            <td>{$data['Position']}</td>
            <td>{$data['EmpName']}</td>
            <td>{$data['DoB']}</td>
            <td>{$data['Age']}</td>
            <td>{$data['Gender']}</td>
            <td>{$data['Address']}</td>
            <td>{$data['PhoneNumber']}</td>
            <td>{$data['MailAddress']}</td>
        </tr>";
    }
}

    function delEmp($user){
        $conn = getConnection();
        $sql = "delete from staffmemberdb where Username='{$user['empname']}'";
        $result = mysqli_query($conn, $sql);

        $sql2 = "delete from hospitallogindb where username='{$user['empname']}'";
        $result2 = mysqli_query($conn, $sql2);

        return $result;
    }

    function UpEmp($user){
        $con = getConnection();
        $sql = "update staffmemberdb set Position='{$user['UpPositionEmp']}', EmpName='{$user['UpNameEmp']}', DoB='{$user['UpdobEmp']}',Age='{$user['UpageEmp']}',Gender='{$user['UpgenderEmp']}',Address='{$user['UpaddressEmp']}',PhoneNumber='{$user['UpphoneEmp']}',MailAddress='{$user['UpmailEmp']}',Password='{$user['UppasswordEmp']}' where EmpName='{$user['NameEMP']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }


    function SearchEmp($user){
        $con = getConnection();
        $sql = "select * from staffmemberdb where EmpName='{$user['SearchEmp']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Employee ID</th>
            <th>Employee Position</th>
            <th>Employee Name</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Password</th>
        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_Employee.php"."><button>UPDATE</button></a></td>  
                        <td>{$data['EmployeeID']}</td>
                        <td>{$data['Position']}</td>
                        <td>{$data['EmpName']}</td>
                        <td>{$data['DoB']}</td>
                        <td>{$data['Age']}</td>
                        <td>{$data['Gender']}</td>
                        <td>{$data['Address']}</td>
                        <td>{$data['PhoneNumber']}</td>
                        <td>{$data['MailAddress']}</td>
                        <td>{$data['Password']}</td>
                        
                        </tr>
                        </fieldset>";
            }
    }


?>
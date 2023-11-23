<?php 
    require_once "db.php";


    function AddDeath($user){
        $con = getConnection();
        $sql = "insert into deliverbirthdb values('', '{$user['Childusername']}', '{$user['Childgender']}', '{$user['Childdob']}','{$user['fatherName']}','{$user['motherName']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchChild($user){
        $con = getConnection();
        $sql = "select * from deliverbirthdb where ChildName='{$user['searchchild']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Child Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Father Name</th>
            <th>Mother Name</th>
        </tr>";
        if($result == null){
            return null;
        }
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_DB_Record.php"."><button>UPDATE</button></a></td>                        <td>{$data['ChildName']}</td>
                        <td>{$data['Gender']}</td>
                        <td>{$data['DateofBirth']}</td>
                        <td>{$data['FatherName']}</td>
                        <td>{$data['MotherName']}</td>
                        
                        </tr>
                        </fieldset>";
            }
    }

    function ShowChild(){
        $conn = getConnection();
        $sql = "select * from deliverbirthdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Child Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Father Name</th>
        <th>Mother Name</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['ChildName']}</td>
            <td>{$data['Gender']}</td>
            <td>{$data['DateofBirth']}</td>
            <td>{$data['FatherName']}</td>
            <td>{$data['MotherName']}</td>
        </tr>";
    }
}

function delChild($user){
    $conn = getConnection();
    $sql = "delete from deliverbirthdb where ChildName='{$user['DelChild']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
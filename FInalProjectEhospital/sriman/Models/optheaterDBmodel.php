<?php 
    require_once "db.php";


    function addOP($user){
        $con = getConnection();
        $sql = "insert into operationtheaterdb values('', '{$user['operationName']}', '{$user['operationDuration']}', '{$user['operationNumber']}','{$user['operationDate']}','{$user['operationTime']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchOP($user){
        $con = getConnection();
        $sql = "select * from operationtheaterdb where OpTheaterNo='{$user['SearchOP']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Serial ID</th>
            <th>Name of Operation</th>
            <th>Time Duration</th>
            <th>Operation Theater Number</th>
            <th>Operation Date</th>
            <th>Operation Time</th>
        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_Death_Record.php"."><button>UPDATE</button></a></td>
                        <td>{$data['theaterID']}</td>
                        <td>{$data['OperationName']}</td>
                        <td>{$data['TimeDuration']}</td>
                        <td>{$data['OpTheaterNo']}</td>
                        <td>{$data['Date']}</td>
                        <td>{$data['Time']}</td>                        
                        </tr>
                        </fieldset>";
            }
    }

    function ShowOP(){
        $conn = getConnection();
        $sql = "select * from operationtheaterdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Serial ID</th>
        <th>Name of Operation</th>
        <th>Time Duration</th>
        <th>Operation Theater Number</th>
        <th>Operation Date</th>
        <th>Operation Time</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['theaterID']}</td>
            <td>{$data['OperationName']}</td>
            <td>{$data['TimeDuration']}</td>
            <td>{$data['OpTheaterNo']}</td>
            <td>{$data['Date']}</td>
            <td>{$data['Time']}</td>
        </tr>";
    }
}

function delOP($user){
    $conn = getConnection();
    $sql = "delete from operationtheaterdb where Time='{$user['delOP']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
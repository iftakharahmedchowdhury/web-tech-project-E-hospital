<?php 
    require_once "db.php";


    function addAllot($user){
        $con = getConnection();
        $sql = "insert into allotmentdb values('', '{$user['patientNAME']}', '{$user['allotedDATE']}', '{$user['alloteTIME']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchAllot($user){
        $con = getConnection();
        $sql = "select * from allotmentdb where PatientName='{$user['SearchAllot']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Bed Allotment Serial</th>
            <th>Patient Name</th>
            <th>Alloted Date</th>
            <th>Alloted Time</th>
        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_Allotment.php?update={$data['bedid']}"."><button>UPDATE</button></a></td>
                        <td>{$data['bedid']}</td>
                        <td>{$data['PatientName']}</td>
                        <td>{$data['allotedDate']}</td>
                        <td>{$data['allotedTime']}</td>
                        </tr>
                        </fieldset>";
            }
    }

    function ShowAllot(){
        $conn = getConnection();
        $sql = "select * from allotmentdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Bed Allotment Serial</th>
        <th>Patient Name</th>
        <th>Alloted Date</th>
        <th>Alloted Time</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['bedid']}</td>
            <td>{$data['PatientName']}</td>
            <td>{$data['allotedDate']}</td>
            <td>{$data['allotedTime']}</td>
        </tr>";
    }
}

function delAllot($user){
    $conn = getConnection();
    $sql = "delete from allotmentdb where PatientName='{$user['delAllot']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


function UpAllot($user){
    $conn = getConnection();

if(isset($_GET['update'])){

    $ID= $_GET['update'];
        
    $sql = "UPDATE allotmentdb SET('', '{$user['upAppoinDate']}', '{$user['upAppoinRoom']}', '{$user['upAppoinRoom']}', '{$user['upAppoinDoc']}') where AppointmentSerial='$ID'";
    $status = mysqli_query($conn, $sql);
    return $status;

}
}

?>
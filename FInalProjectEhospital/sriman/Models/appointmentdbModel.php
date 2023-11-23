<?php 
    require_once "db.php";


    function addAppoin($user){
        $con = getConnection();
        $sql = "insert into appointmentdb values('', '{$user['AppoinDate']}', '{$user['AppoinRoom']}', '{$user['AppoinDoc']}','{$user['AppoinTim']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchAppoin($user){
        $con = getConnection();
        $sql = "select * from appointmentdb where Date='{$user['SearchAppoin']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Appointment Serial</th>
            <th>Appointment Date</th>
            <th>Room Number</th>
            <th>Doctor Name</th>
            <th>Appointment Time</th>
        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_Appointment.php?update={$data['AppointmentSerial']}"."><button>UPDATE</button></a></td>
                        <td>{$data['AppointmentSerial']}</td>
                        <td>{$data['Date']}</td>
                        <td>{$data['RoomNo']}</td>
                        <td>{$data['DoctorName']}</td>
                        <td>{$data['Time']}</td>
                        </tr>
                        </fieldset>";
            }
    }

    function ShowAppoin(){
        $conn = getConnection();
        $sql = "select * from appointmentdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Appointment Serial</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <th>Appointment Doctor</th>
        <th>Appointment Room Number</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['AppointmentSerial']}</td>
            <td>{$data['Date']}</td>
            <td>{$data['Time']}</td>
            <td>{$data['DoctorName']}</td>
            <td>{$data['RoomNo']}</td>
        </tr>";
    }
}

function delAppoin($user){
    $conn = getConnection();
    $sql = "delete from appointmentdb where Time='{$user['delAppoin']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


function UpAppoin($user){
    $conn = getConnection();

if(isset($_GET['update'])){

    $ID= $_GET['update'];
        
    $sql = "UPDATE appointmentdb SET('', '{$user['upAppoinDate']}', '{$user['upAppoinRoom']}', '{$user['upAppoinRoom']}', '{$user['upAppoinDoc']}') where AppointmentSerial='$ID'";
    $status = mysqli_query($conn, $sql);
    return $status;

}
}

?>
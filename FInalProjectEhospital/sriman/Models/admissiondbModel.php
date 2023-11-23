<?php 
    require_once "db.php";


    function addAdmit($user){
        $con = getConnection();
        $sql = "insert into patientdb values('', '{$user['AdmissionName']}', '{$user['AdmissionDOB']}', '{$user['AdmissionDATE']}', '{$user['AdmissionAGE']}', '{$user['AdmissionGND']}', '{$user['AdmissionADD']}', '{$user['AdmissionPHN']}', '{$user['AdmissionMAIL']}', '{$user['AdmissionDIAG']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchAdmit($user){
        $con = getConnection();
        $sql = "select * from patientdb where Admissionname='{$user['SearchAdmit']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Admission Date</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Mail</th>
            <th>Diagnosis</th>


        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td>{$data['PaitentID']}</td>
                        <td>{$data['Admissionname']}</td>
                        <td>{$data['Dob']}</td>
                        <td>{$data['Admissiondate']}</td>
                        <td>{$data['Admissionage']}</td>
                        <td>{$data['Admissiongender']}</td>
                        <td>{$data['Admissionaddress']}</td>
                        <td>{$data['Admissionphone']}</td>
                        <td>{$data['Admissionmail']}</td>
                        <td>{$data['Admissiondiagnosis']}</td>
                        </tr>
                        </fieldset>";
            }
    }

    function ShowAdmit(){
        $conn = getConnection();
        $sql = "select * from patientdb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
    <th>Patient ID</th>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Admission Date</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Mail</th>
    <th>Diagnosis</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
        <td>{$data['PaitentID']}</td>
        <td>{$data['Admissionname']}</td>
        <td>{$data['Dob']}</td>
        <td>{$data['Admissiondate']}</td>
        <td>{$data['Admissionage']}</td>
        <td>{$data['Admissiongender']}</td>
        <td>{$data['Admissionaddress']}</td>
        <td>{$data['Admissionphone']}</td>
        <td>{$data['Admissionmail']}</td>
        <td>{$data['Admissiondiagnosis']}</td>
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
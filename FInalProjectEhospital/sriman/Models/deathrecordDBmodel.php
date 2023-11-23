<?php 
    require_once "db.php";


    function addRecord($user){
        $con = getConnection();
        $sql = "insert into deathrecorddb values('', '{$user['deathDOB']}', '{$user['deathTIME']}', '{$user['deathNAME']}','{$user['deathgender']}','{$user['deathAGE']}','{$user['deathCAUSE']}','{$user['deathOCCUP']}','{$user['deathFATHER']}','{$user['deathMOTHER']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function SearchRecord($user){
        $con = getConnection();
        $sql = "select * from deathrecorddb where NameofDeceased='{$user['SearchDeath']}'";
        $result = mysqli_query($con, $sql);
        
        echo "
        <fieldset>
        <table border=1 align= center>

        <tr>
            <th></th>
            <th>Patient ID</th>
            <th>Date of Death</th>
            <th>Time</th>
            <th>Name of Deceased</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Cause of Death</th>
            <th>Occupation</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
        </tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "
                        <tr>
                        <td><a href="."../Views/Update_Death_Record.php"."><button>UPDATE</button></a></td>
                        <td>{$data['PatientID']}</td>
                        <td>{$data['DeathDate']}</td>
                        <td>{$data['Time']}</td>
                        <td>{$data['NameofDeceased']}</td>
                        <td>{$data['Gender']}</td>
                        <td>{$data['Age']}</td>
                        <td>{$data['CauseofDeath']}</td>
                        <td>{$data['Occupation']}</td>
                        <td>{$data['FatherName']}</td>
                        <td>{$data['MotherName']}</td>
                        
                        </tr>
                        </fieldset>";
            }
    }

    function ShowRecord(){
        $conn = getConnection();
        $sql = "select * from deathrecorddb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Patient ID</th>
        <th>Date of Death</th>
        <th>Time</th>
        <th>Name of Deceased</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Cause of Death</th>
        <th>Occupation</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['PatientID']}</td>
            <td>{$data['DeathDate']}</td>
            <td>{$data['Time']}</td>
            <td>{$data['NameofDeceased']}</td>
            <td>{$data['Gender']}</td>
            <td>{$data['Age']}</td>
            <td>{$data['CauseofDeath']}</td>
            <td>{$data['Occupation']}</td>
            <td>{$data['FatherName']}</td>
            <td>{$data['MotherName']}</td>
        </tr>";
    }
}

function delRecord($user){
    $conn = getConnection();
    $sql = "delete from deathrecorddb where NameofDeceased='{$user['DelDeath']}'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
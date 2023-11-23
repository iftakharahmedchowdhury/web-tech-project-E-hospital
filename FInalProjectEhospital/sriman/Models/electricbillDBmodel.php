<?php 
    require_once "db.php";


    function addBill($user){
        $con = getConnection();
        $sql = "insert into electricbilldb values('', '{$user['billdate']}', '{$user['billusage']}', '{$user['billcost']}', '{$user['billamount']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function ShowBill(){
        $conn = getConnection();
        $sql = "select * from electricbilldb ";
        $result = mysqli_query($conn, $sql);

    echo "<table border=1 align= center>

    <tr>
        <th>Bill ID</th>
        <th>Date</th>
        <th>Usage(kWh)</th>
        <th>Cost(Per kWh)</th>
        <th>Amount</th>
    </tr>";
        while($data = mysqli_fetch_assoc($result)){
    echo "
        <tr>
            <td>{$data['BillID']}</td>
            <td>{$data['Date']}</td>
            <td>{$data['ElecUsage']}</td>
            <td>{$data['Cost']}</td>
            <td>{$data['Amount']}</td>
        </tr>";
    }
}

function SearchBill($user){
    $con = getConnection();
    $sql = "select * from electricbilldb where Date='{$user['SearchBill']}'";
    $result = mysqli_query($con, $sql);
    
    echo "
    <fieldset>
    <table border=1 align= center>
        <tr>
            <th>Bill ID</th>
            <th>Date</th>
            <th>Usage(kWh)</th>
            <th>Cost(Per kWh)</th>
            <th>Amount</th>
        </tr>";
        while($data = mysqli_fetch_assoc($result))
        {
            echo "
                    <tr>
                        <td>{$data['BillID']}</td>
                        <td>{$data['Date']}</td>
                        <td>{$data['ElecUsage']}</td>
                        <td>{$data['Cost']}</td>
                        <td>{$data['Amount']}</td>
                    </tr>
                </fieldset>";
        }
}


?>
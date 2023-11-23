<?php
$host = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "hospital";

function getConnection()
{
    global $host;
    global $dbuser;
    global $dbpass;
    global $dbname;
    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return  $con;
}

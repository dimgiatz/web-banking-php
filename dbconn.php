<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="1353";
$dbname="bank_db2";
    $dbport = "3306";

    $con = mysqli_connect($serverName, $dbusername, $dbpassword, $dbname, $dbport);

    if (!$con) {
        //echo ("Connection failed: ");
    }
    else
    {
        //echo ("Connect Successfully");
    }
?>

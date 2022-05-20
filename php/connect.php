<?php

$UsePort = "0";                     /*  If $UsePort is 0 then dont use port. To use port change the 0 to a 1. */

$servername = "localhost";
$port = "port";
$username = "username";
$password = "password";
$sqlserver = "pgsql";               /* Set the driver for the PDO connection. Find the right driver here :  */


if($UsePort != "0") {
    try {
        $conn = new PDO("$sqlserver:host=$servername;port=$port;dbname=myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
else {
    try {
            $conn = new PDO("$sqlserver:host=$servername;dbname=myDB", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
    } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
    }
}
    





?>
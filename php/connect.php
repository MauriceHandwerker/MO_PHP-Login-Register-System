<?php

$UsePort = "1";                     /*  If $UsePort is 0 then dont use port. To use port change the 0 to a 1. */

$servername = "localhost";
$port = "port";
$username = "root";
$password = "";
$sqlserver = "mysql";               /* Set the driver for the PDO connection. Find the right driver here :  */


if($UsePort != "0") {
    try {
        $conn = new PDO("$sqlserver:host=$servername;port=$port;dbname=webapp", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
else {
    try {
            $conn = new PDO("$sqlserver:host=$servername;dbname=webapp", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
    } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
    }
}
    





?>
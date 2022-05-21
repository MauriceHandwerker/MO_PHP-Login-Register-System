<?php

session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="php/login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>
<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>
        <?php 
            echo 'Session : '.$userid;
        ?>
    </body>

</html>
<?php

include "connect.php";

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['userid'] = $user['uid'];
        echo('Login erfolgreich. Weiter zu <a href="../dashboard.php">internen Bereich</a>');
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
};

?>

<?php

include "connect.php";


if(isset($_POST['register-btn'])){
    $error = false;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $repemail = $_POST['repemail'];
    $password = $_POST['password'];
    $reppassword = $_POST['reppassword'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }     
    if(strlen($password) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if($password != $reppassword) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }
        
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }
        
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $password_hash = password_hash($password, PASSWORD_DEFAULT); 
        $statement = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $result = $statement->execute(array('username' => $username, 'email' => $email, 'password' => $password_hash));
            
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="php/login.php">Zum Login</a>';
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}


?>
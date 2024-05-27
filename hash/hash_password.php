<?php

session_start();

if (isset($_POST["password"])) {

        $password = $_POST["password"];
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        echo "$hashed_password<br>";
}
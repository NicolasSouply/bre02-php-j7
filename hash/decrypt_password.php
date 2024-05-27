<?php
session_start();

if (isset($_POST["password"]) && isset($_POST["hashed_password"])) {
    $password = $_POST["password"];
    $hashed_password = $_POST["hashed_password"];
    
    $isPasswordCorrect = password_verify($password, $hashed_password);
    
    if ($isPasswordCorrect) {
        echo "Mot de passe correct";
    } else {
        echo "Mot de passe erroné";
    }
} else {
    echo "Veuillez fournir le mot de passe en clair et sa version chiffrée.";
}
?>
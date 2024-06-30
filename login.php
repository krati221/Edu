<?php
session_start(); // Start the session

$fixed_username = 'admin';
$fixed_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $fixed_username && $password === $fixed_password) {
        // Authentication successful, create a session variable
        $_SESSION['username'] = $username;
        // Redirect to index2.html or any other page
        header('Location: index2.html');
        exit(); // Ensure that code below is not executed after redirection
    } else {
        echo 'Invalid username or password';
    }
}
?>

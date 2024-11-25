<?php
session_start();
$valid_users = [
   'Nafisa' => 'Nafisa',
   'Anjum' => 'Anjum',
   'Moon' => 'Moon'
];
 
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
 
    // Check if the user is registered first
    if (!isset($_SESSION['registered_user']) || $_SESSION['registered_user'] !== $username) {
        echo "You need to register first. <a href='register.html'>Click here to register</a>";
    } else {
        // Check if the login credentials match
        if (array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {
            // Correct login, set session status
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
        } else {
            echo "Invalid username or password.";
        }
    }
} else {
    header('location: login.html');
}
?>
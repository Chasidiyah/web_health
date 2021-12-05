<?php

include './connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->query("select * from user where username = '" . $username . "' and password = '" . $password . "'");
$query = $query->fetch_assoc();

if (!$user) {
    echo 'User not found or password is wrong';
    exit();
}

    
session_start();
$_SESSION['username'] = $username;

header('Location: /login/index.php');
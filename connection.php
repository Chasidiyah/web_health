<?php

$conn = mysqli_connect('localhost', 'root', '', 'login');

if (!$conn) {
    echo 'failed to connect to database ';
    exit();
}
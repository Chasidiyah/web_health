<?php

session_start();
unset($_SESSION['username']);

header('Location: http://localhost/login/index.php');
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: http://localhost/login/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    <p>if you want to logout please click <a href="http://localhost/login/logout.php">here</a></p>
  
</body>
</html>
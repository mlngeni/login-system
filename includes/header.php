<?php

session_start();
include 'conf/db_conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>PDO Login</title>
	
    <link rel="stylesheet" type="text/css" href="public/style.css">
</head>
<body>

 
  <div class="nav">
        
        
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign up</a>
            <a href="./about.php">About</a>

            <?php if (isset($_SESSION['uid'])){?>
             <a id="logout" href="logout.php">LOGOUT</a>
            <?php }

                ?>
        </div>
    </div>








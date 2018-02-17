<?php
$conn = new PDO("mysql:host=localhost;dbname=login system", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$table = 'users';
?>
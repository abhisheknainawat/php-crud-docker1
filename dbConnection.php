<?php
$host = "php-mysql.cvycwcaqo2wk.eu-north-1.rds.amazonaws.com"; // RDS endpoint
$user = "admin"; // your RDS master username
$pass = "9WWKwgynmRe77h4BMMVA"; // your RDS master password
$db   = "test"; // your database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully to AWS RDS MySQL!";
?>

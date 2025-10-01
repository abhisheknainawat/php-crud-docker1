<?php
require_once("dbConnection.php"); // gives $conn

$id = $_GET['id'];

// Delete row
$result = mysqli_query($conn, "DELETE FROM users WHERE id = $id");

header("Location:index.php");
exit();
?>

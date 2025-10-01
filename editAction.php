<?php
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    $id    = mysqli_real_escape_string($conn, $_POST['id']);
    $name  = mysqli_real_escape_string($conn, $_POST['name']);
    $age   = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);	

    if (empty($name) || empty($age) || empty($email)) {
        if (empty($name)) echo "<font color='red'>Name field is empty.</font><br/>";
        if (empty($age)) echo "<font color='red'>Age field is empty.</font><br/>";
        if (empty($email)) echo "<font color='red'>Email field is empty.</font><br/>";
    } else {
        $result = mysqli_query($conn, "UPDATE users SET `name`='$name', `age`='$age', `email`='$email' WHERE `id`=$id");

        echo "<p><font color='green'>Data updated successfully!</font></p>";
        echo "<a href='index.php'>View Result</a>";
    }

    mysqli_close($conn);
}
?>

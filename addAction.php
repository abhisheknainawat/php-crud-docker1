<?php
require_once("dbConnection.php"); // This file contains $conn

if (isset($_POST['submit'])) {
    // Escape user inputs for security
    $name  = mysqli_real_escape_string($conn, $_POST['name']);
    $age   = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check for empty fields
    if (empty($name) || empty($age) || empty($email)) {
        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if (empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if (empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // Insert data into database
        $result = mysqli_query($conn, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

        if ($result) {
            echo "<p><font color='green'>Data added successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            echo "<p><font color='red'>Error adding data: " . mysqli_error($conn) . "</font></p>";
            echo "<a href='add.php'>Try Again</a>";
        }
    }

    mysqli_close($conn);
}
?>

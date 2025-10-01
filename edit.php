<?php
require_once "dbConnection.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get ID from URL safely

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name  = $row['name'];
        $age   = $row['age'];
        $email = $row['email'];
    } else {
        echo "No record found with ID $id";
        exit();
    }
} else {
    echo "ID not provided";
    exit();
}
?>

<html>
<body>
    <h2>Edit Data</h2>
    <p><a href="index.php">Home</a></p>

    <form name="edit" method="post" action="editAction.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" name="update" value="Save Changes" style="padding:8px 15px; font-size:16px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

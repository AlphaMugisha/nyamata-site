<?php
require_once '../connect_db.php';

// This generates the EXACT hash your specific PHP version needs
$new_password = password_hash('admin123', PASSWORD_DEFAULT);
$username = 'admin';

// Clear the table and insert the fresh admin
mysqli_query($conn, "TRUNCATE TABLE admins");
$query = "INSERT INTO admins (username, password) VALUES ('$username', '$new_password')";

if (mysqli_query($conn, $query)) {
    echo "<h1 style='color:green; font-family:sans-serif;'>Admin Reset Successful!</h1>";
    echo "<p>Username: <b>admin</b></p>";
    echo "<p>Password: <b>admin123</b></p>";
    echo "<a href='login.php'>Go to Login Page</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
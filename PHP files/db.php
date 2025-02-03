<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "user_auth"); // Update your db name if different
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

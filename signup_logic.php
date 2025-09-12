<?php
require_once "db_conn.php";

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die("Error: Missing POST data");
}

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    die("Error: Email and password cannot be empty");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email, pass) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    echo "Signup successful!";
} else {
    echo "MySQL Error: " . $conn->error . " | Code: " . $conn->errno;
}

$stmt->close();
$conn->close();
?>

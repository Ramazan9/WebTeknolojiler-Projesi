<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "Ahmedhassan_10";
$dbname = "somalia";

// $servername = "https://vacsom.org";
// $username = "vacsom98_somalia";
// $password = "somalia_12345";
// $dbname = "vacsom98_somalia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check user credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
}

$conn->close();
?>

<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "Ahmedhassan_10";
$dbname = "somalia";


// $servername = "vacsom.org";
// $username = "vacsom98_somalia";
// $password = "somalia_12345";
// $dbname = "vacsom98_somalia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

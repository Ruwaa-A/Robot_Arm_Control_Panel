<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motor";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get POST values
$motor1 = $_POST['motor1'] ?? 0;
$motor2 = $_POST['motor2'] ?? 0;
$motor3 = $_POST['motor3'] ?? 0;
$motor4 = $_POST['motor4'] ?? 0;
$motor5 = $_POST['motor5'] ?? 0;
$motor6 = $_POST['motor6'] ?? 0;

// Insert without setting ID (let it auto-increment)
$sql = "INSERT INTO pose (motor1, motor2, motor3, motor4, motor5, motor6)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiiiii", $motor1, $motor2, $motor3, $motor4, $motor5, $motor6);

if ($stmt->execute()) {
  echo "New pose saved successfully!";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


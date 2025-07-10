<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get POST data from form
#$name = $_POST['name'] ?? '';
#$email = $_POST['email'] ?? '';
#$course = $_POST['course'] ?? '';

// Connect to MySQL
$conn = new mysqli("localhost", "ankit", "P[';lo90-", "student_db");

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

// Insert data into DB
$sql = "INSERT INTO students (name, email, course) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $course);

if ($stmt->execute()) {
   # echo "Student registered successfully!<br><br><br><br>";
    #echo "Thanks for visiting our website";
} else {
   # echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();


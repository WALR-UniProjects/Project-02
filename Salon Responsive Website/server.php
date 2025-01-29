<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "appointment_db";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email_address'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $appointment_date = $_POST['date']; // Use the correct column name
    $message = $_POST['message'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, phone, category, appointment_date, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $category, $appointment_date, $message);

    // Execute and check if successful
    if ($stmt->execute()) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: Unable to book appointment'); window.location.href='index.html';</script>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

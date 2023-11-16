<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "security_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming form data has been posted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];
    $bdate = $_POST['bdate'];
    $plan = $_POST['plan'];
    $payment = $_POST['payment'];

    // Insert data into the database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO `users` (`username`, `password`, `role`, `FirstName`, `LastName`, `email`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $fname, $lname, $email, $password, $phone, $bdate, $plan, $payment);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

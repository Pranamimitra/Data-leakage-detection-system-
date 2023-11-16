<?php

// Function to establish a database connection
function connectToDatabase() {
    $host = "your_database_host";
    $username = "your_database_username";
    $password = "your_database_password";
    $database = "your_database_name";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to register a new user
function registerUser($username, $password) {
    $conn = connectToDatabase();

    // Escape user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform SQL insertion for user registration
    // Example: INSERT INTO users (username, password) VALUES ('$username', '$password')

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Function to validate user login
function loginUser($username, $password) {
    $conn = connectToDatabase();

     // Escape user inputs to prevent SQL injection
     $username = mysqli_real_escape_string($conn, $username);
     $password = mysqli_real_escape_string($conn, $password);

    // Perform SQL selection for user login
    // Example: SELECT * FROM users WHERE username='$username' AND password='$password'
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, verify the password
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            // Password is correct, user is authenticated
            echo "Login successful";
        } else {
            // Password is incorrect
            echo "Incorrect password";
        }
    } else {
        // No user found with the given username
        echo "User not found";
    }

    // Check if a matching user is found
    // Example: if ($result->num_rows > 0) { return true; } else { return false; }

    $conn->close();
}

// Function to get the username based on user ID
function getUserName($userId) {
    $conn = connectToDatabase();

    // Escape user input to prevent SQL injection
    $userID = mysqli_real_escape_string($conn, $userId);

    // Perform SQL selection for username based on user ID
    $sql = "SELECT username FROM users WHERE id = $userId";
    $result = $conn->query($sql);

    // Check if a matching user is found
    if ($result->num_rows > 0) {
        // Fetch the username from the result
        $row = $result->fetch_assoc();
        $username = $row['username'];
        return $username;
    } else {
        return false; // User not found
    }

    $conn->close();
}

?>

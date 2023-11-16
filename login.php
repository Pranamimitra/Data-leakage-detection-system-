<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Validate the form data (you can add more validation)
    if (empty($username) || empty($password) || empty($role)) {
        $error = "All fields are required.";
    } else {
        // Connect to your database (replace these variables with your database details)
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "security_db";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL query (use prepared statements for better security)
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

        $sql = "SELECT * FROM users WHERE username = ? AND password = ? AND role = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $password, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result->num_rows > 0) {
            // User found, set session variables
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            // Redirect to the dashboard or home page
            header("Location: dashboard.php");
            exit();
        } else {
            // Invalid credentials
            $error = "Invalid username, password, or role.";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEMES SECURITY</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background-color: #f4f4f4;
      color: #333;
    }
    .container {
            max-width: 800px;
            margin: auto;
        }

        .feature-container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .feature {
            text-align: center;
            padding: 30px;
            background-color:#ffcc00;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 250px;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease-in-out;
        }

        .feature:hover {
            transform: scale(1.1);
        }

        .feature h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #010100;
        }

        .feature p {
            font-size: 14px;
            color: #010100; 
        }

     .radiant-glow {
            box-shadow: 0 0 20px 10px rgba(235, 11, 11, 0.644);
        }

        /*Styles for Navigation Bar */
        .navbar {
            background-color: rgba(235, 11, 11, 0.644)
        }

        .navbar a {
            color: #000000; /* Black */
        }

        .navbar a:hover {
            color: #FFFFFF; /* White */
        }

        p{
            padding-left: 50px;
            padding-right: 20px;
            margin-bottom: 5px;
        }


        /* CSS for Sliding Animation */
        .marquee {
            white-space: nowrap;
            overflow: hidden;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
</style>


<body>
<form method="post" action="login.php">
        <!-- Your form fields (username, password, etc.) go here -->
        <!-- Add any additional error handling or messages here -->
        
    </form>
    <section id="login" class="py-20 bg-gray-100">
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto radiant-glow">
                <div class="absolute inset-0 bg-gradient-to-r from-black to-black shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Login</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                        <form action="" method="post" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <!-- Your form fields (username, password, etc.) go here -->
                        <div class="relative">
                            <input autocomplete="off" id="username" name="username" type="text"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-black"
                                placeholder="Username" />
                            <label for="username"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Username</label>
                        </div>
                        <div class="relative">
                            <input autocomplete="off" id="password" name="password" type="password"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-black"
                                placeholder="Password" />
                            <label for="password"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                        </div>
                        <div class="relative">
                            <label class="block text-gray-700">Role:</label>
                            <div class="mt-1">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="role" value="user" checked>
                                    <span class="ml-2">User</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio" name="role" value="admin">
                                    <span class="ml-2">Admin</span>
                                </label>
                            </div>
                        </div>
                        <div class="relative">
                            <button class="bg-black text-white rounded-md px-2 py-1" type="submit"><a href="dashboard.html"> Login</a></button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
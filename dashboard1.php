<?php
// Start the session (if not already started)
session_start();

// Check if the user is logged in, redirect to login page if not
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Add your stylesheets and scripts here -->
    <style>
        /* Your existing styles remain unchanged */

        body {
            font-family: 'Roboto', sans-serif;
        }

        .radiant-glow {
            box-shadow: 0 0 20px 10px rgba(235, 11, 11, 0.644);
        }

        .navbar {
            background-color: rgba(235, 11, 11, 0.644)
        }

        .navbar a {
            color: #000000; /* Black */
        }

        .navbar a:hover {
            color: #FFFFFF; /* White */
        }

        p {
            padding-left: 50px;
            padding-right: 20px;
            margin-bottom: 5px;
        }

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
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar p-4 text-white">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-semibold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">MY ACCOUNT</div>
            <div class="space-x-4">
                <a href="dashboard.html">Home</a>
                <a href="document.php">Documents</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <!-- User Welcome Message -->
    <div>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <!-- Add more dashboard content here -->
    </div>

    <!-- Your dashboard content goes here -->

    <!-- Footer -->
    <footer>
        <!-- Add footer content -->
    </footer>

    <!-- Add your scripts here -->
</body>

</html>

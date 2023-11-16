<?php
// Dummy data for illustration purposes
$dataLeakageStats = [
    'highSeverity' => 10,
    'mediumSeverity' => 5,
    'lowSeverity' => 3,
];

// Convert the data into JSON format for JavaScript usage
$dataLeakageJson = json_encode($dataLeakageStats);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Leakage overwiew & Quick Insights
    </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Add your additional stylesheets and scripts here -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .radiant-glow {
            box-shadow: 0 0 20px 10px rgba(235, 11, 11, 0.644);
        }

        .navbar {
            background-color: rgba(235, 11, 11, 0.8);
            color: #ffffff;
            padding: 1rem;
            text-align: center;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .form-container h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #217dbb;
        }

        .notification-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .notification-container h4 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .notification-container p {
            color: #333;
            margin-bottom: 15px;
        }

        .success-message {
            color: #27ae60;
        }

        .error-message {
            color: #c0392b;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="text-2xl font-semibold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">DATA LEAKAGE OVERWIEW & QUICK INSIGHTS</div>
    </div>
<!-- Data Leakage Overview -->
<div class="p-6 bg-white rounded-lg shadow-md">
    <h3 class="text-3xl font-semibold mb-4 text-gray-800 border-b-2 pb-2 border-gray-300">Data Leakage Overview</h3>

    <!-- Doughnut Chart -->
    <div class="flex justify-center items-center mb-6">
        <canvas id="dataLeakageChart" width="200" height="200"></canvas>
    </div>

    <!-- Quick Insights -->
    <div>
        <h4 class="text-xl font-semibold mb-2 text-gray-800">Quick Insights</h4>
        <p class="text-gray-700 leading-6">
            Based on recent activities and data leakage statistics, here are some potential risks:
        </p>

        <ul class="list-disc pl-6 mt-3">
            <li class="text-red-500">
                <span class="mr-2">&#8226;</span> High severity data leaks detected. Immediate action is recommended.
            </li>
            <li class="text-yellow-500">
                <span class="mr-2">&#8226;</span> Moderate severity data leaks identified. Investigation and resolution are advised.
            </li>
            <li class="text-green-500">
                <span class="mr-2">&#8226;</span> Low severity risks are currently manageable, but continuous monitoring is recommended.
            </li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Use PHP data in JavaScript
        var dataLeakageData = <?php echo $dataLeakageJson; ?>;

        var ctx = document.getElementById('dataLeakageChart').getContext('2d');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['High Severity', 'Medium Severity', 'Low Severity'],
                datasets: [{
                    data: Object.values(dataLeakageData),
                    backgroundColor: ['#FF5864', '#FDB75A', '#63CF77'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                animation: {
                    animateRotate: true,
                    animateScale: true
                }
            }
        });
    </script>
</div>
</body>
</html>

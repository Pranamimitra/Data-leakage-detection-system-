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
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7fafc;
        }

        .navbar {
            background-color: #ed1b1b;
            padding: 1rem;
            text-align: center;
        }

        .navbar p {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        form {
            margin: 2rem 0;
            text-align: center;
        }

        table {
            width: 80%;
            margin: 2rem auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #edf2f7;
        }

        th {
            background-color: #ed1b1b;
            color: white;
        }

        .no-leakage,
        .min-leakage,
        .high-leakage {
            font-weight: bold;
        }

        .no-leakage {
            color: #38a169;
        }

        .min-leakage {
            color: #ecc94b;
        }

        .high-leakage {
            color: #e53e3e;
        }

        input[type="file"] {
            display: none;
        }

        label {
            background-color: #ed1b1b;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        label:hover {
            background-color: #ff5252;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .upload-btn-wrapper:hover .btn {
            border-color: #38a169;
        }

    </style>
</head>

<body>

    <nav class="navbar">
        <p>User Files and Privacy Status</p>
    </nav>

    <form action="upload.php" method="post" enctype="multipart/form-data" class="form">
        <div class="upload-btn-wrapper">
            <label for="file" class="btn">Choose a file</label>
            <input type="file" name="file" id="file" onchange="document.getElementById('file-label').innerHTML = this.files[0].name">
        </div>
        <span id="file-label" class="text-gray-700 ml-2"></span>
        <button type="submit" class="bg-red-500 text-white px-4 py-2 mt-2 rounded">Upload File</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Privacy Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Assuming $userFiles is an array containing user-uploaded files
            $userFiles = ['document1.pdf', 'image.jpg', 'confidential.docx'];

            // Loop through user files and display them in the table
            foreach ($userFiles as $file) {
                echo "<tr>";
                echo "<td>$file</td>";
                // You can set privacy status dynamically based on your logic
                echo "<td class=\"no-leakage\">No Data Leakage</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>

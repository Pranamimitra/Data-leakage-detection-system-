<?php
// Sample array representing file data. Replace this with actual data from your backend.
$files = [
    ['name' => 'Document1.pdf', 'dateUploaded' => '2023-11-15', 'privacyStatus' => 'Private'],
    // Add more files as needed
];

// Function to delete a file (You'll need to implement this function)
function deleteFile($filename) {
    // Your deletion logic goes here
    // Example: unlink("path/to/files/" . $filename);
    // Directory where files are stored (replace with your actual directory)
    $fileDirectory = 'path/to/files/';

    // Full path to the file
    $filePath = $fileDirectory . $filename;

    // Check if the file exists before attempting to delete
    if (file_exists($filePath)) {
        // Perform the deletion
        unlink($filePath);
        return true; // File deleted successfully
    } else {
        return false; // File not found or unable to delete
    }
}

// Check if a file deletion request is made
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['file'])) {
    $deleted = deleteFile($_GET['file']);
    // You can add additional logic or feedback messages based on the $deleted status
}

// Check if a file upload request is made
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
    $uploadDirectory = 'path/to/files/';

    // Ensure that the destination directory exists; if not, create it
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Ensure that uploadedFile is an array
    if (is_array($_FILES['uploadedFile']['name'])) {
        // Loop through each uploaded file
        foreach ($_FILES['uploadedFile']['name'] as $key => $filename) {
            $uploadedFile = [
                'name' => $filename,
                'dateUploaded' => date('Y-m-d'), // Use the current date
                'privacyStatus' => 'Private', // You can customize this value
            ];

            // Move the uploaded file to the destination directory
            move_uploaded_file($_FILES['uploadedFile']['tmp_name'][$key], $uploadDirectory . $filename);

            // Add the new file to the end of the $files array
            $files[] = $uploadedFile;
        }
    }
}



  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management</title>
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
        <div class="text-2xl font-semibold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">FILE MANAGEMENT</div>
    </div>
<!-- File Management -->
<div class="p-4">
    <div class="p-4">
        <h3 class="text-lg font-semibold">File Management</h3>

        <!-- List of uploaded files with details -->
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 py-2 px-4">File Name</th>
                    <th class="border border-gray-300 py-2 px-4">Date Uploaded</th>
                    <th class="border border-gray-300 py-2 px-4">Privacy Status</th>
                    <th class="border border-gray-300 py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $file) : ?>
                    <tr>
                        <td class="border border-gray-300 py-2 px-4"><?php echo $file['name']; ?></td>
                        <td class="border border-gray-300 py-2 px-4"><?php echo $file['dateUploaded']; ?></td>
                        <td class="border border-gray-300 py-2 px-4"><?php echo $file['privacyStatus']; ?></td>
                        <td class="border border-gray-300 py-2 px-4">
                            <a href="view.php?file=<?php echo $file['name']; ?>" class="text-blue-500">View</a>
                            <button class="text-red-500" onclick="deleteFile('<?php echo $file['name']; ?>')">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
     <!-- Option to upload new files -->
     <div class="mt-4">
     <div class="p-4">
        <h3 class="text-2xl font-semibold mb-4">File Management</h3>

        <!-- File Upload Form -->
        <form action="" method="post" enctype="multipart/form-data">
            <label for="uploadedFile" class="block mb-2">Upload File:</label>
            <input type="file" name="uploadedFile[]" id="uploadedFile" class="mb-4" multiple>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
        </form>

        <!-- List of uploaded files with details -->
        <table class="min-w-full border border-gray-300 mt-4">
            <!-- ... (unchanged) ... -->
        </table>
    </div>
     </div>           
      
        <script>
            // JavaScript function to handle file deletion
            function deleteFile(fileName) {
                // Implement your logic to confirm deletion and make an AJAX request to delete the file
                if (confirm(`Are you sure you want to delete ${fileName}?`)) {
                    // Make an AJAX request or perform deletion logic here
                   // Make an AJAX request to delete the file
            var xhr = new XMLHttpRequest();
            xhr.open("GET", `file-management.php?action=delete&file=${fileName}`, true);
            xhr.onload = function () {
                // Refresh the page or update the file list after deletion
                location.reload();
            };
            xhr.send();
                }
            }
        </script>
    </div>
</div>
</body>
</html>
<?php
$userFiles = [];
// File upload logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadedFile = $_FILES['file'];

    // Process the uploaded file (you might want to add more validation)
    $uploadDirectory = './uploads/'; // Set your upload directory
    $uploadedFile = $_FILES['file'];

    // Create the target file path
    $targetFile = $uploadDirectory . basename($uploadedFile['name']);

    // Now you can move the uploaded file
    if (move_uploaded_file($uploadedFile['tmp_name'], $targetFile)) {
        echo 'File uploaded successfully.';
    } else {
        echo 'Error uploading file.';
    }

    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Now you can move the uploaded file
    move_uploaded_file($uploadedFile['tmp_name'], $targetFile);
    $targetFile = $uploadDirectory . basename($uploadedFile['name']);

    if (move_uploaded_file($uploadedFile['tmp_name'], $targetFile)) {
        // File uploaded successfully, add it to the userFiles array
        $userFiles[] = $uploadedFile['name'];
    }
}



// Your existing code for file upload...

// Display user files in the table

    // Display logic...


// Display user files in the table
?>

<!DOCTYPE html>
<html lang="en">

<!-- ... (head and styling) ... -->

<body>

    <!-- ... (navbar and form) ... -->

    <table>
        <thead>
            <tr>
                <th>File Name</th>
                <th>Privacy Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through user files and display them in the table
            foreach ($userFiles as $file) {
                echo "<tr>";
                echo "<td>$file</td>";
                // Set privacy status based on your logic (replace this with your actual logic)
                $privacyStatus = determinePrivacyStatus($file);
                echo "<td class=\"$privacyStatus\">$privacyStatus</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>

<?php
// Function to determine privacy status based on file name (replace this with your actual logic)
function determinePrivacyStatus($fileName)
{
    // Example logic: if the file name contains 'confidential', set as high-leakage; otherwise, no-leakage
    if (strpos($fileName, 'confidential') !== false) {
        return 'high-leakage';
    } else {
        return 'no-leakage';
    }
}
?>

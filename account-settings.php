<?php
// Initialize variables to avoid undefined variable warnings
$emailNotifications = isset($_POST['emailNotifications']) ? true : false;
$pushNotifications = isset($_POST['pushNotifications']) ? true : false;

// Process form submissions for notification preferences
if (isset($_POST['savePreferences'])) {
    // Update notification preferences in the database or perform any other necessary actions
    // ...

    // Provide feedback to the user
    $savePreferencesSuccess = "Notification preferences saved successfully.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
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
        <div class="text-2xl font-semibold" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">ACCOUNT SETTINGS</div>
    </div>

    <div class="container">
        <!-- Change password form -->
        <div class="form-container">
            <h3><b><u>Change Password</u></b></h3>
            <?php if (isset($changePasswordError)) : ?>
                <p class="error-message"><?php echo $changePasswordError; ?></p>
            <?php endif; ?>
            <?php if (isset($changePasswordSuccess)) : ?>
                <p class="success-message"><?php echo $changePasswordSuccess; ?></p>
            <?php endif; ?>

            <form action="account-settings.php" method="post">
                <label for="currentPassword">Current Password</label>
                <input type="password" id="currentPassword" name="currentPassword" required />

                <label for="newPassword">New Password</label>
                <input type="password" id="newPassword" name="newPassword" required />

                <label for="confirmNewPassword">Confirm New Password</label>
                <input type="password" id="confirmNewPassword" name="confirmNewPassword" required />

                <button type="submit">Change Password</button>
            </form>
        </div>
<br>
<br>
<br>
<br>

        <!-- Notification preferences form -->
    <div class="form-container">
        <h3><b><u>Notification Preferences</u></b></h3>
        <?php if (isset($savePreferencesSuccess)) : ?>
            <p class="success-message"><?php echo $savePreferencesSuccess; ?></p>
        <?php endif; ?>

        <form action="account-settings.php" method="post">
            <label>
                <input type="checkbox" name="emailNotifications" <?php echo $emailNotifications ? 'checked' : ''; ?> />
                Receive email notifications
            </label>

            <label>
                <input type="checkbox" name="pushNotifications" <?php echo $pushNotifications ? 'checked' : ''; ?> />
                Receive push notifications
            </label>

            <button type="submit" name="savePreferences">Save Preferences</button>
        </form>
    </div>
    </div>
</body>
</html>

<?php
// logout.php

    session_start();
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();

    // Redirect to the landing page
    header("Location: index.html");
    exit();
?>

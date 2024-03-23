<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // If logged in, destroy the session
    session_destroy();
    header("Location: ../login.php"); // Redirect the user to the login page
    exit();
} else {
    // If not logged in, redirect to the login page as a fallback
    header("Location: ../login.php");
    exit();
}

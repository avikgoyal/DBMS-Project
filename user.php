<?php

session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    echo "Welcome, " . $_SESSION['username'] . "! This is the user page.";
} else {
    header("location: login.html"); // Redirect to login page if user is not logged in
}

?>

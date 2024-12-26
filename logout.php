<?php

session_start();
session_destroy(); // Destroy the session and logout the user
header("location: index.html");

?>

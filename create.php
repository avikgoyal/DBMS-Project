<?php

// Database connection credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ject";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

// Insert data into 'userdata' table
$sql = "INSERT INTO user (name, mobile, email, address, password)
VALUES ('$name', '$mobile', '$email', '$address', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to index.html page
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>

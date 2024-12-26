<?php

// Connect to the MySQL database
$host = "localhost";
$user = "root";
$password = "";
$database = "ject";
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$game = mysqli_real_escape_string($conn, $_POST['game']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);

// Attempt insert query execution
$sql = "INSERT INTO booking (name, mobile, email, location, game, date, time) VALUES ('$name', '$mobile', '$email', '$location', '$game', '$date', '$time')";
if(mysqli_query($conn, $sql)){
    // Redirect to payment page
    header("Location: payment.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
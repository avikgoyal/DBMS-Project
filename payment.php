<?php
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Store payment details in database
$mobile = $_POST['mobile'];
$upi = $_POST['upi'];
$card_number = $_POST['card-number'];
$expiry_date = $_POST['expiry-date'];
$cvv = $_POST['cvv'];

$sql = "INSERT INTO payment (mobile, upi, card, expiry, cvv) VALUES ('$mobile', '$upi', '$card_number', '$expiry_date', '$cvv')";

if (mysqli_query($conn, $sql)) {
    // Redirect to confirmation page
    header("Location: confirmed.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php

$connect=mysqli_connect("localhost","root","","ject") or die ("connection failed");

if (empty($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from user where name='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        session_start();
        $_SESSION['logged_in'] = true; // Set the session variable indicating user is logged in
        $_SESSION['username'] = $username; // Store the username in session for later use
        echo "Successful";
        header("refresh:3;url=index.html");
        exit();
    } else {
        echo "Login failed";
    }
}

?>

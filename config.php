<?php

    $conn = mysqli_connect ('localhost:3306', 'root', '');

    if (!$conn) {
        echo 'Not connected to the server';
    }

    if (!mysqli_select_db($conn, 'gobartac_emailDB')) {
        echo 'Database not selected';
    }

    $email = $_POST['email'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $email_error = "Invalid email address";
    }

    $sql = "INSERT INTO mail_collection (email) VALUES ($Email)";

    if (mysqli_query($conn, $sql)) {
        echo 'Not inserted';
    } else {
        echo 'Inserted';
    }

    header("refresh: 1; url=index.html");
?>
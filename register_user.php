<?php
$con = mysqli_connect("localhost", "root", "", "library_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $sql_query = "INSERT INTO user_details (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if (mysqli_query($con, $sql_query)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br>";

$email = $_POST["Email"];
$message = $_POST["Message"];

$sql = "INSERT INTO ContactFormSubmissions (email, message ) VALUES ('$email','$message')";
$stmt = $conn -> query($sql);


?>
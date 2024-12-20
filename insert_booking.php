<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable error reporting

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully.<br>";
}

// Ensure the bookings table exists
$sql = "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    userID INT(11) NOT NULL,
    date DATE NOT NULL,
    hall VARCHAR(100) NOT NULL,
    timing VARCHAR(50) NOT NULL,
    duration INT(11) NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    discount_applied TINYINT(1) NOT NULL DEFAULT 0
)";

if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST); // Debug the POST data

    $name = $_POST['name'];
    $userID = $_POST['id'];
    $date = $_POST['date'];
    $hall = $_POST['hall'];
    $timing = $_POST['timing'];
    $duration = $_POST['duration'];
    $isStudent = isset($_POST['studentDiscount']) ? 1 : 0;

    if (empty($name) || empty($userID) || empty($date) || empty($hall) || empty($timing) || empty($duration)) {
        die("Please fill in all required fields.");
    }

    $hallPrices = ["hall1" => 25, "hall2" => 20, "hall3" => 15, "hall4" => 10];
    if (!isset($hallPrices[$hall])) {
        die("Invalid hall selected.");
    }

    $pricePerHour = $hallPrices[$hall];
    $totalPrice = $pricePerHour * $duration;

    if ($isStudent) {
        $totalPrice *= 0.8; // Apply 20% discount
    }

    $stmt = $conn->prepare("INSERT INTO bookings (name, userID, date, hall, timing, duration, total_price, discount_applied) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sisssidi", $name, $userID, $date, $hall, $timing, $duration, $totalPrice, $isStudent);

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    } else {
        echo "Data inserted successfully.";
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}

$conn->close();
?>

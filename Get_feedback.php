<?php
$servername = "localhost";  // Database server address
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "EventifyMe";     // Database name

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  query to create the feedback table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS feedback (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    experience VARCHAR(50) NOT NULL,
    website_navigation INT(6) DEFAULT 0,
    website_design INT(6) DEFAULT 0,
    user_interface INT(6) DEFAULT 0,
    information_availability INT(6) DEFAULT 0,
    booking_process INT(6) DEFAULT 0,
    payment_gateway INT(6) DEFAULT 0,
    website_performance INT(6) DEFAULT 0,
    event_discovery INT(6) DEFAULT 0,
    search_function INT(6) DEFAULT 0,
    accessibility_features INT(6) DEFAULT 0,
    help_resources INT(6) DEFAULT 0,
    clear_instructions INT(6) DEFAULT 0,
    website_navigation_issues INT(6) DEFAULT 0,
    broken_links INT(6) DEFAULT 0,
    slow_page_load INT(6) DEFAULT 0,
    poor_mobile_experience INT(6) DEFAULT 0,
    difficult_booking INT(6) DEFAULT 0
)";
;

// ExecuteL query to create the table
if ($conn->query($sql) === TRUE) {
    echo "Table 'feedback' created successfully.";  // Success message
} else {
    echo "Error creating table: " . $conn->error;  // Error message if table creation fails
}

// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data (experience level)
    $experience = $_POST['experience'];  // Experience level input

    // Check if checkboxes are selected, set to 1 if checked, 0 if not checked
    if (isset($_POST['website_navigation'])) {
        $website_navigation = 1;
    } else {
        $website_navigation = 0;
    }

    if (isset($_POST['website_design'])) {
        $website_design = 1;
    } else {
        $website_design = 0;
    }

    if (isset($_POST['user_interface'])) {
        $user_interface = 1;
    } else {
        $user_interface = 0;
    }

    if (isset($_POST['information_availability'])) {
        $information_availability = 1;
    } else {
        $information_availability = 0;
    }

    if (isset($_POST['booking_process'])) {
        $booking_process = 1;
    } else {
        $booking_process = 0;
    }

    if (isset($_POST['payment_gateway'])) {
        $payment_gateway = 1;
    } else {
        $payment_gateway = 0;
    }

    if (isset($_POST['website_performance'])) {
        $website_performance = 1;
    } else {
        $website_performance = 0;
    }

    if (isset($_POST['event_discovery'])) {
        $event_discovery = 1;
    } else {
        $event_discovery = 0;
    }

    if (isset($_POST['search_function'])) {
        $search_function = 1;
    } else {
        $search_function = 0;
    }

    if (isset($_POST['accessibility_features'])) {
        $accessibility_features = 1;
    } else {
        $accessibility_features = 0;
    }

    if (isset($_POST['help_resources'])) {
        $help_resources = 1;
    } else {
        $help_resources = 0;
    }

    if (isset($_POST['clear_instructions'])) {
        $clear_instructions = 1;
    } else {
        $clear_instructions = 0;
    }

    if (isset($_POST['website_navigation_issues'])) {
        $website_navigation_issues = 1;
    } else {
        $website_navigation_issues = 0;
    }

    if (isset($_POST['broken_links'])) {
        $broken_links = 1;
    } else {
        $broken_links = 0;
    }

    if (isset($_POST['slow_page_load'])) {
        $slow_page_load = 1;
    } else {
        $slow_page_load = 0;
    }

    if (isset($_POST['poor_mobile_experience'])) {
        $poor_mobile_experience = 1;
    } else {
        $poor_mobile_experience = 0;
    }

    if (isset($_POST['difficult_booking'])) {
        $difficult_booking = 1;
    } else {
        $difficult_booking = 0;
    }

    //  query to insert the feedback data into the table
    $sql = "INSERT INTO feedback (experience, website_navigation, website_design, user_interface, information_availability, booking_process, payment_gateway, website_performance, event_discovery, search_function, accessibility_features, help_resources, clear_instructions, website_navigation_issues, broken_links, slow_page_load, poor_mobile_experience, difficult_booking)
    VALUES ('$experience', $website_navigation, $website_design, $user_interface, $information_availability, $booking_process, $payment_gateway, $website_performance, $event_discovery, $search_function, $accessibility_features, $help_resources, $clear_instructions, $website_navigation_issues, $broken_links, $slow_page_load, $poor_mobile_experience, $difficult_booking)";

    // Execute SQL query to insert the data into the table
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully.";  // Success message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  // Error message 
    }
}

// Close the database connection
$conn->close();
?>

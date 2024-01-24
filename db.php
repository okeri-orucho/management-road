<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming passwords are hashed using password_hash() when stored
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']); // Sanitize input
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result === false) {
        // Display any SQL errors for debugging purposes
        echo "Error: " . $conn->error;
        exit();
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify the entered password against the hashed password
        if (password_verify($password, $hashed_password)) {
            // Valid credentials, redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            // Invalid credentials, redirect back to the login page or display an error message
            echo "Invalid password";
        }
    } else {
        // Invalid credentials, redirect back to the login page or display an error message
        echo "Invalid username";
    }
}

// Close the database connection
$conn->close();
?>

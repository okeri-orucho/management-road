<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "traffic";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $alertMessage = $_POST["alertMessage"];

    // SQL to insert data into vms_messages table
    $sql = "INSERT INTO admin_messages (message) VALUES ('$alertMessage')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to index.php after successful submission
        echo '<script>alert("Message sent successfully!");</script>';
        exit; // Ensure that no further code is executed after the header
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }
}
// Close the database connection
$conn->close();
?>
<footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

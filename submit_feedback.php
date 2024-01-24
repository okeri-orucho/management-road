<?php
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $incidentReport = $_POST["incidentReport"];
    $feedbackSuggestion = $_POST["feedbackSuggestion"];

    // SQL to insert data into user_feedback table
    $sql = "INSERT INTO user_feedback (incident_report, feedback_suggestion) VALUES ('$incidentReport', '$feedbackSuggestion')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to index.php after successful submission
        header("Location: users.php");
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

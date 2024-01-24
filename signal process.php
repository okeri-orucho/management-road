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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["signalColor"])) {
    $signalColor = $_POST["signalColor"];

    // Update the traffic signal color in the database
    $sql = "INSERT INTO traffic_signal (id, signal_color) VALUES (1, '$signalColor') ON DUPLICATE KEY UPDATE signal_color = '$signalColor'";

    if ($conn->query($sql) === TRUE) {
        echo "Signal color updated successfully!";
    } else {
        echo "Error updating signal color: " . $conn->error;
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

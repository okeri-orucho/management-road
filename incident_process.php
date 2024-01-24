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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $incidentType = $_POST["incidentType"];
    $incidentLocation = $_POST["incidentLocation"];
    $incidentDescription = $_POST["incidentDescription"];

    // Prepare and execute SQL query to insert data into the table
    $sql = "INSERT INTO incident_reports (incident_type, incident_location, incident_description) VALUES ('$incidentType', '$incidentLocation', '$incidentDescription')";

    if ($conn->query($sql) === TRUE) {
      // Redirect to index.php after successful submission
      header("Location: index.php");
      exit; // Ensure that no further code is executed after the header
  } else {
      echo '<script>alert("Error: ' . $conn->error . '");</script>';
  }
}
?>
<footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

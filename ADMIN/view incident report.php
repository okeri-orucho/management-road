<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Monitoring System - Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Adjust as needed for desired vertical centering */
            text-align: center;
            color: black;
        
        }

        /* Admin Panel Sidebar */
        .admin-panel {
            background-color: black;
            color: white;
            padding: 20px;
            margin-top: 20px;
            width: 250px;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .admin-panel h4 {
            margin-bottom: 10px;
        }

        .admin-panel ul {
            list-style-type: none;
            padding: 0;
        }

        .admin-panel li {
            margin-bottom: 8px;
        }

        .admin-panel a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }

        .admin-panel a:hover {
            color: #ffc107;
        }

        /* Main Content Area */
        .content {
            margin-left: 270px; /* Adjust to match sidebar width */
            padding: 20px;
            color: black;
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        #sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
      padding-left: 10px;
      color: white;
    }

    #sidebar a {
      padding: 10px 5px;
      font-size: 18px;
      color: white;
      display: block;
      text-decoration: none;
    }

    #sidebar a:hover {
      background-color: #007bff;
    }
    </style>
</head>
<body>
<div id="sidebar">
    <div class="admin-panel">
        <h4>Admin Navigation</h4>
        <ul>
            <li>
            <a href="trafficMonitoring.php">Traffic Monitoring</a>
      <a href="vmsControl.php">VMS Control</a>
      <a href="users.php">User Management</a>
      <a href="emergencyResponse.php">Emergency Response</a>
      <a href="logout.php">Log Out</a>

    </li>
        </ul>
    </div>
</div>
    <div class="container">
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

$sql = "SELECT id, incident_type, incident_location, incident_description, created_at FROM incident_reports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Incident Type: ' . $row['incident_type'] . '</h5>';
        echo '<p class="card-text">Location: ' . $row['incident_location'] . '</p>';
        echo '<p class="card-text">Description: ' . $row['incident_description'] . '</p>';
        echo '<p class="card-text">Created At: ' . $row['created_at'] . '</p>';

        // Add your additional HTML or actions here

        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No incidents found.</p>';
}

?>


    <footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   
</body>
</html>

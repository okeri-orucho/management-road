<?php
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: login.php');
    exit();
}

?>
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
            background-image: url('images/bg.jpg');
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
        <h2>Traffic Monitoring and Reporting System</h2>
        <h3>Admin Panel</h3>
        <p>Welcome to the admin panel. Here you can manage system settings and access advanced functionalities.</p>
        <!-- Integrate admin content here -->
        <div class="content">
            <h4>Admin Dashboard</h4>
            <p>Display an overview of system performance and key metrics.</p>
            <!-- Add more admin content here -->
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

  <!-- Link to Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Link to Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

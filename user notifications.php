


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traffic Management System - Nairobi, Kenya</title>

  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Link to Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <!-- Custom CSS -->
  <style>
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: grey;
        background-image: url('background-image.jpg'); /* Add the path to your background image */
        background-size: cover;
        background-repeat: no-repeat;
        padding: 20px;
      }
     

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Navigation Bar */
    .navbar {
      background-color: #007bff;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff;
    }

    /* Dashboard Header */
    #dashboard h1 {
      font-size: 24px;
      color: #333333;
    }

    /* Map Container */
    #map {
      width: 100%;
      height: 500px;
      border: 1px solid #ddd;
    }

    /* Traffic Cameras Section */
    #trafficCameras {
      display: flex;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .camera {
      width: calc(25% - 20px);
      margin: 10px;
      padding: 15px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .camera img {
      max-width: 100%;
      height: auto;
    }

    /* Traffic Signal Control Section */
    #signalControl {
      margin-top: 20px;
    }

    .card {
      width: 100%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      padding: 20px;
    }

    .btn-primary,
    .btn-success {
      margin-top: 10px;
    }

    /* Variable Message Signs Section */
    #vms {
      margin-top: 20px;
    }

    /* Data Visualization Section */
    #dataVisualization {
      margin-top: 20px;
    }

    .card canvas {
      width: 100%;
    }

    /* User Notifications Section */
    #userNotifications {
      margin-top: 20px;
    }

    .list-group-item {
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Traffic Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
               <li class="nav-item">
          <a class="nav-link" href="traffic signal.php">Traffic Signal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user feedback.php">User Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="incident management.php">Incident Management</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="user notifications.php">User Notification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li> 
      </ul>
    </div>
  </nav>
<div id="userNotifications">
  <h2 class="mt-4">User Notifications</h2>

  <!-- Notification Panel -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Notification Panel</h5>
      <ul id="notificationList" class="list-group">
        <!-- Dynamic notification entries will be added here -->
      </ul>
    </div>
  </div>
</div>
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

// Retrieve data from the vms_messages table
$sqlMessages = "SELECT id, message, created_at FROM admin_messages";
$resultMessages = $conn->query($sqlMessages);

// Output data from the vms_messages table
if ($resultMessages->num_rows > 0) {
    while ($rowMessages = $resultMessages->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<div class="card-container">';
        echo '<div class="card-title">Message ID: ' . $rowMessages['id'] . '</div>';
        echo '<div class="card-text">Message: ' . $rowMessages['message'] . '</div>';
        echo '<div class="card-text">Created At: ' . $rowMessages['created_at'] . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>No messages found.</p>';
}

$conn->close();
?>

<footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>




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
          <a class="nav-link" href="#trafficCameras">Traffic Cameras</a>
        </li>
           
        <li class="nav-item">
          <a class="nav-link" href="#vms">Variable Message Signs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user panel.php">User panel</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="ADMIN/admin panel.php">Admin panel</a>
        </li> 
      </ul>
    </div>
  </nav>

  <!-- Real-time Monitoring Dashboard -->
  <div id="dashboard" class="container">
    <h1 class="mt-4">Real-time Traffic Dashboard - Nairobi, Kenya</h1>
    <div id="map" class="mb-4"></div>

    <!-- Traffic Cameras -->
    <div id="trafficCameras">
      <h2 class="mt-4">Traffic Cameras</h2>
      <div class="camera">
        <h3>Camera 1</h3>
        <img src="c1.jpeg" alt="Camera 1">
        <p>Live Feed: <a href="#">Watch Now</a></p><br>
        <h3>Camera 3</h3>
        <img src="c2.jpeg" alt="Camera 2">
        <p>Live Feed: <a href="#">Watch Now</a></p>
      </div>

    <div class="camera">
        <h3>Camera 3</h3>
        <img src="c3.jpeg" alt="Camera 3">
        <p>Live Feed: <a href="#">Watch Now</a></p><br>
        <h3>Camera 4</h3>
        <img src="c4.jpeg" alt="Camera 4">
        <p>Live Feed: <a href="#">Watch Now</a></p>
      </div>
        </div>



<!-- Incident Management -->
<div id="incidentManagement">
    <h2 class="mt-4">Incident Management</h2>

    <!-- Incident Reporting Form -->
    <form id="incidentForm" method="post" action="">
        <div class="mb-3">
            <label for="incidentType" class="form-label">Incident Type</label>
            <select class="form-select" id="incidentType" name="incidentType" required>
                <option value="" disabled selected>Select the type of incident</option>
                <option value="Traffic Jam">Traffic Jam</option>
                <option value="Road Construction">Road Construction</option>
                <option value="Accident">Accident</option>
                <!-- Add more incident types as needed -->
            </select>
        </div>

        <div class="mb-3">
            <label for="incidentLocation" class="form-label">Incident Location</label>
            <input type="text" class="form-control" id="incidentLocation" name="incidentLocation" required>
        </div>

        <div class="mb-3">
            <label for="incidentDescription" class="form-label">Incident Description</label>
            <textarea class="form-control" id="incidentDescription" name="incidentDescription" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit Incident Report</button>
    </form>

  
    <!-- Variable Message Signs -->
    <div class="container mt-5">
    <h2 class="mb-4">Variable Message Signs Control</h2>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update VMS Message</h5>
            
            <form method="POST" action="updateVMS.php">
                <div class="mb-3">
                    <label for="vmsMessage" class="form-label">Enter Message:</label>
                    <input type="text" class="form-control" id="vmsMessage" name="vmsMessage" placeholder="Type your message" required>
                </div>

                <button type="submit" class="btn btn-info">Update Message</button>
            </form>
        </div>
    </div>
</div>






<style>
  .list-group-item {
    border: 1px solid #ddd; /* Add a border for separation */
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    background-color: #f8f9fa; /* Light gray background color */
  }
</style>



  </div>

  <!-- Link to Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Link to Leaflet JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <!-- Add your JavaScript code here for interactivity -->
  <script>
    // Initialize the map centered around Nairobi, Kenya
    var map = L.map('map').setView([-1.2921, 36.8219], 13);

    // Add a tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Additional JavaScript code for interactivity
  </script>

 

 

</body>

</html>
<footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

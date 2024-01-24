


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
 
 
 <!-- Traffic Signal Control -->
 <div id="signalControl">
    <h2 class="mt-4">Traffic Signal Control</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Traffic Signal Control</h5>
            <label for="signalColor">Select Signal Color:</label>
            <select class="form-control" id="signalColor">
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
            </select>
            <button type="button" class="btn btn-info" onclick="changeSignalColor()">Update Signal Color</button>
        </div>
    </div>
</div>

<!-- Include your scripts, possibly at the end of the body -->

<!-- Include jQuery -->
<!-- Include the full version of jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Bootstrap's dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Your script using jQuery -->
<script>
   function changeSignalColor() {
    var signalColor = $("#signalColor").val();
    console.log("Signal Color:", signalColor); // Check the value in the browser console
    $.post("signal process.php", { signalColor: signalColor }, function (data) {
        alert(data); // You can replace this with more user-friendly notifications
    });
}

</script>

<footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

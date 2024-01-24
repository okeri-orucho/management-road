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
        <div class="live-feed">
            <h4>Live Traffic Feed</h4>
            <p>Display live streaming of traffic cameras and monitoring devices.</p>
            <!-- Add content specific to live traffic feed here -->
            <!-- For example: -->
            <img src="live_traffic_feed.jpg" alt="Live Traffic Feed" style="max-width: 100%;">
        </div>

        <div>
            <h4>Traffic Data Analysis</h4>
            <p>Explore and analyze historical traffic data for better insights.</p>
            <!-- Add content specific to traffic data analysis here -->
            <!-- For example: -->
            <canvas id="trafficChart" width="400" height="200"></canvas>
        </div>

        <div id="signalTimingForm">
            <h4>Adjust Traffic Signal Timings</h4>
            <p>Use the form below to adjust traffic signal timings and optimize traffic flow.</p>
            <form>
                <div class="form-group">
                    <label for="greenTime">Green Light Duration (seconds):</label>
                    <input type="number" class="form-control" id="greenTime" placeholder="Enter green light duration">
                </div>
                <div class="form-group">
                    <label for="yellowTime">Yellow Light Duration (seconds):</label>
                    <input type="number" class="form-control" id="yellowTime" placeholder="Enter yellow light duration">
                </div>
                <div class="form-group">
                    <label for="redTime">Red Light Duration (seconds):</label>
                    <input type="number" class="form-control" id="redTime" placeholder="Enter red light duration">
                </div>
                <button type="submit" class="btn btn-primary">Adjust Timings</button>
            </form>
        </div>
    </div>

    <footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // JavaScript code for interactivity
        // You can add your custom JavaScript code here
        // For example, initialize a traffic chart
        var ctx = document.getElementById('trafficChart').getContext('2d');
        var trafficChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Traffic Volume',
                    borderColor: '#007bff',
                    data: [50, 60, 55, 70, 65],
                    fill: false,
                }]
            }
        });
    </script>
</body>
</html>

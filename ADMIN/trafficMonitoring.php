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
            margin-top: 70px;
            alignment: center;
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
<div class ="content">

        <h2>My Bids Page</h2>
        <h2><a href="view traffic.php" class="btn btn-primary">View  Traffic</a><br><br><br>
<a href="view incident report.php" class="btn btn-success">View Incident Report</a>
</p></h2>
    </div>
    <footer class="fixed-bottom text-center p-2" style="background-color: #343a40; color: white;">
        <p>&copy; 2023 Traffic Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   
</body>
</html>

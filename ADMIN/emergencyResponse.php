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
        <!-- Display existing messages -->
        <?php
            // Your existing code to display messages remains unchanged
        ?>
        
        <!-- Form for the admin to send a new message -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Send Alert Message</h5>
                <form method="post" action="send_alert.php"> <!-- Add a new PHP script for processing form submission -->
                    <div class="form-group">
                        <label for="alertMessage">Message:</label>
                        <textarea class="form-control" id="alertMessage" name="alertMessage" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Your footer and script tags remain unchanged -->
</body>
</html>

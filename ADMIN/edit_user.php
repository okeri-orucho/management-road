<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - Traffic Monitoring System Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Global Styles */
        body {
            background-image: url('images/bg.jpg');
            font-family: Arial, sans-serif;
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

    <div class="content">
        <h2>Add User</h2>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select><br><br>
            
            <input type="submit" value="Add User">
        </form>

        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "trms";

        $conn = new mysqli($server, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role = $_POST["role"];

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $password, $role);

            if ($stmt->execute()) {
                echo "User added successfully!";
            } else {
                echo "Error adding user: " . $conn->error;
            }

            $stmt->close();
        }
        ?>
    </div>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>

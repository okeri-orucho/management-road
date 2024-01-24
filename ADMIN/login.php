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
            margin-left: 250px; /* Adjust to match sidebar width */
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

<?php
session_start();

// Dummy admin credentials (replace with your actual credentials)
$adminUsername = 'admin';
$adminPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered credentials match the admin credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Set session variable to mark the user as an admin
        $_SESSION['admin'] = true;
        header('Location: admin panel.php');
        exit();
    } else {
        $error = 'Invalid credentials. Please try again.';
    }
}

?>
<body>

<div class="container mt-4">
    <h2>Admin Login</h2>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
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

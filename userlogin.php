<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
            background: url('images/background.jpeg') center center fixed;
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Adjust the width as needed */
            margin-bottom: 20px; /* Add margin at the bottom to separate container and footer */
            margin: top 10px;;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #1e90ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: #ff0000;
        }

        footer {
            text-align: center;
            background:mistyrose;
            padding: 10px;
            width: 100%;
        }
    </style>
    <title>Traffic Management System </title>
</head>
<body>
    <div class="container">
        <h2>Traffic Management System </h2>
        <form method="post" action="db.php">
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
        <p style="text-align: center; margin-top: 10px;">
            Don't have an account? <a href="userregister.php">Register here</a>.
        </p>
    </div>
    <footer>
        &copy; 2023 Traffic Management System
    </footer>
</body>
</html>

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
  <style>
  #registrationModal {
      padding: 20px;
    }
    body {
        font-family: 'Arial', sans-serif;
        background-color: grey;
        background-image: url('background-image.jpg'); /* Add the path to your background image */
        background-size: cover;
        background-repeat: no-repeat;
        padding: 20px;
      }
     
    </style>
    </head>

<body>
  <!-- ... (previous body content) ... -->

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Traffic Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <!-- ... (previous navigation items) ... -->
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#registrationModal">Register</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- ... (previous body content) ... -->

  <!-- User Registration Modal -->
  
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationModalLabel">User Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- User Registration Form (basic example) -->
          <form id="registrationForm" action="" method="POST">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function handleRegistration(event) {
      event.preventDefault(); // Prevent the default form submission

      // Perform the registration logic (you may need to replace this with your actual registration process)

      // Assume registration is successful
      alert('Registration successful! Redirecting to login page.');

      // Redirect to the login page (replace 'login.html' with the actual login page)
      window.location.href = 'login.html';
    }
  </script>
  <!-- Link to Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- ... (remaining scripts) ... -->
</body>

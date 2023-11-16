<?php
include_once("php/function.php");

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
  logout();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fafaf9;
    }

    header {
      background-color: #4caf50;
      padding: 20px;
      color: #fff;
      text-align: center;
      border-bottom: 5px solid #388e3c;
    }

    header h1 {
      font-size: 28px;
    }

    header nav a {
      text-decoration: none;
      color: #fff;
      padding: 10px;
      margin: 0 10px;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    header nav a:hover {
      background-color: #388e3c;
    }

    .sidebar {
      background-color: #eee;
      padding: 20px;
      border-right: 5px solid #ddd;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      text-decoration: none;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar a:hover {
      background-color: #fff;
      color: #4caf50;
    }

    .content {
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <header>
    <h1>TPO Dashboard</h1>
    <nav>
      <a href="#">Info</a>
      <a href="#">Status</a>
      <a href="#">Help</a>
    </nav>
  </header>

  <div class="container-fluid mt-3">
    <div class="row">
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="studentmockinterviewtest.html">
              <i class='bx bx-tachometer'></i> Mock Aptitude Test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admindashboard/tpodashboard/onlineclass.html">
              <i class='bx bx-user'></i> Online class for preparing for interview
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="selectedlistofstudent.html">
              <i class='bx bx-briefcase'></i> View selected list of student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class='bx bx-calendar'></i> Add user
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class='bx bx-stats'></i> Delete user
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="studentstatusofapplieddrives.html">
              <i class='bx bx-stats'></i> Status of Applied Drives
            </a>
          </li>
          
        </ul>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 content" style="background-image: url('images/blur4.jpg'); background-size: cover; background-color: rgba(255, 255, 255, 0.8);">
        <div class="container-fluid">
            <!-- Header for the TPO Dashboard -->
            <h1 class="mt-4">Welcome to the TPO Dashboard</h1>
            <p class="lead">Effortlessly manage training and placement activities.</p>
    
            <!-- Overview Section -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Placement Overview</h5>
                            <p class="card-text">View and analyze key metrics of placement activities.</p>
                            <a href="#" class="btn btn-primary">View Overview</a>
                        </div>
                    </div>
                </div>
    
                <!-- Add more cards or content sections as needed -->
    
            </div>
    
            <!-- Additional Sections -->
            <div class="row">
                <!-- Section 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Companies</h5>
                            <p class="card-text">Manage information about recruiting companies and placement drives.</p>
                            <a href="#" class="btn btn-primary">Explore Companies</a>
                        </div>
                    </div>
                </div>
    
                <!-- Section 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Student Placements</h5>
                            <p class="card-text">Track and coordinate student placements and job offers.</p>
                            <a href="#" class="btn btn-primary">View Placements</a>
                        </div>
                    </div>
                </div>
    
                <!-- Section 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Reports</h5>
                            <p class="card-text">Generate and analyze reports on placement activities.</p>
                            <a href="#" class="btn btn-primary">View Reports</a>
                        </div>
                    </div>
                </div>
            </div>
    
            
    
    </div>
  </div>
  
</body>
</html>

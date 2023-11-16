<?php
session_start();
include_once("php/function.php");
if (isset($msg)) {
  echo $msg;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uel placement</title>
  <link rel="stylesheet" href="style.css/main.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style> 
    /* Reset some default styles for better consistency */
    * {
      margin: 0;
      padding: 0;
      
    }
  
    body {
      font-family: 'Arial', sans-serif;
      display: flex;
      align-items: center;
      min-height: 100vh;
      background-size: 100%; /* Adjust the percentage as needed */
      background-position: center;
      background-image: url('images/student1.JPG');
      background-color: #f0f0f0; /* Add a background color */
      background-repeat: no-repeat; /* Add this line to prevent background image repetition */
    }
  
    .wrapper {
      max-width: 400px;
      margin: 50px auto;
      background: transparent;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 0 70px rgba(0, 0, 0, 0.1);
      border: 2px solid rgba(255,255,255,.2);
      background-color: rgb(255, 255, 255);
    }
/* ... (rest of your CSS remains unchanged) */


form {
  text-align: center;
  
}

h1 {
  margin-bottom: 20px;
  color: #333;
}

.input_box {
  position: relative;
  margin-bottom: 20px;
}

input,
select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  margin-top: 8px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 10px;
  color: #777;
}

input[type="text"],
input[type="password"] {
  padding-right: 30px; /* Make room for the icon */
}

select {
  padding-right: 60px; /* Make room for the icon */
}

input::placeholder,
select::placeholder {
  color: #aaa;
}

input:focus,
select:focus {
  outline: none;
  border-color: #4CAF50; /* Change the border color on focus */
}

.remember-forget {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
  font-size: 14px; /* Adjust the font size as needed */
}

label {
  display: flex;
  align-items: center;
}

a {
  text-decoration: none;
  color: #3498db;
}

.btn {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  color: #fff;
  background-color: seagreen;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.register-link {
  margin-top: 20px;
  text-align: center;
}

.register-link a {
  color: #3498db;
}

  </style>
</head>
<body>
  <div class="wrapper">
    <form>
      <h1>Login</h1>
      <div class="input_box">
        <input type="text" name="username" id="username" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input_box">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input_box">
        <select name="role" id="selectRole" required>
          <option value="admin">Admin</option>
          <option value="tpo">TPO</option>
          <option value="student">Student</option>
        </select>
      </div>
      <div class="remember-forget">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password</a>
      </div>
      
      <button type="button" class="btn" onclick="validateLogin()">Login</button>
      
      <div class="register-link">
        <p>Don't have an account? <a href="Registerform.php">Register</a></p>
      </div>
    </form>
  </div>
  <!-- <script>
    // Define username-password pairs for each role
    var credentials = {
      admin: { username: "admin", password: "admin123" },
      tpo: { username: "tpo", password: "tpo123" },
      student: { username: "student", password: "student123" }
    };

    function validateLogin() {
      var select = document.getElementById("selectRole");
      var selectedValue = select.options[select.selectedIndex].value;
      var enteredUsername = document.getElementById("username").value;
      var enteredPassword = document.getElementById("password").value;

      // Check if the entered credentials match the stored values
      if (
        enteredUsername === credentials[selectedValue].username &&
        enteredPassword === credentials[selectedValue].password
      ) {
        // Redirect to the corresponding page
        redirectToCorrectLink(selectedValue);
      } else {
        alert("Invalid username or password");
      }
    }

    function redirectToCorrectLink(role) {
      if (role === "admin") {
        window.location.href = "admin dashboard.html";
      } else if (role === "tpo") {
        window.location.href = "Tpo.html";
      } else if (role === "student") {
        window.location.href = "student.html";
      }
    }
  </script> -->
</body>

</html>
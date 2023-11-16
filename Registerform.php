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
<link rel="stylesheet" href="style.css/register.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
/* CSS for the form wrapper */
.register-form {
  font-family: 'Arial', sans-serif;
      display: flex;
      align-items: center;
      min-height: 100vh;
      background-size: 100%; /* Adjust the percentage as needed */
      background-position: center;
      background-image: url('images/student.png');
      background-color: rgba(240, 240, 240, 0.7); /* Use rgba for transparency */
    
      background-repeat: no-repeat; /* Add this line to prevent background image repetition */
}

.register-form h1 {
  font-size: 24px;
  font-style: normal;
  color: #fff;
  margin-bottom: 20px;
}

.register-form form {
  width: 250px;
    background-color: rgba(255, 255, 255, 0.8); /* Use rgba for transparency */
    padding: 50px;
    border-radius: 20px;
    box-shadow: 30 30 30px rgba(0, 0, 0, 0.2);
}

.register-form label {
  display: flex;
  align-items: center;
  margin-top: 10px;
  font-weight: none;

}
.register-form input[type="checkbox"] {
  width: auto; /* Adjust the width to fit the checkbox content */
  margin: 0 5px 0 0; /* Add some spacing between the checkbox and text */
  background-color: rgba(255, 255, 255, 0.8); /* Use rgba for transparency */
  
}

.register-form input {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  background-color: rgba(255, 255, 255, 0.8); /* Use rgba for transparency */
  border-radius: 5px;
  font-size: 16px;
}

/* Style the <select> element */
.register-form select {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 14px;
}

.register-form button {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.register-form button:hover {
  background-color: #0056b3;
}

/* Style the link as well */
.register-form a {
  text-decoration: none;
  color: #007bff;
}

.register-form a:hover {
  text-decoration: underline;
}


  </style>
<div class="register-form">
    <h1>Register</h1>
  <form action="#" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
  
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <select name="role" required>
      <option value="admin">Admin</option>
      <option value="tpo">TPO</option>
        <option value="student">Student</option>
    </select><div class="remember-forget"><label><input type="checkbox">I agree to terms and Condition</label>
    <button type="submit">Register</button>
    <div class="remember-forget">
      
      <a href="index.html">Already have an account? login</a>
    </div>
  </form>
</div>

</body>
</html>
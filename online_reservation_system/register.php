<?php
$conn = mysqli_connect("localhost", "root", "root", "reservation_system");
if(!$conn){ die("Database connection failed"); }

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  mysqli_query($conn, $query);
  echo "<script>alert('Registration successful!');window.location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register | TrainEase</title>
  <style>
    body {
      background-color: #1c1c1c;
      font-family: 'Poppins', sans-serif;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    form {
      background: #2b2b2b;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      width: 300px;
    }
    h2 { text-align: center; color: #00bcd4; }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
    }
    input[type="submit"] {
      background: #00bcd4;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    input[type="submit"]:hover {
      background: #0288d1;
    }
    a { color: #00bcd4; text-decoration: none; display: block; text-align: center; margin-top: 10px; }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Register</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="register" value="Sign Up">
    <a href="login.php">Already have an account?</a>
  </form>
</body>
</html>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "reservation_system");
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
  if(mysqli_num_rows($result) > 0){
    $_SESSION['email'] = $email;
    header("Location: reserve.php");
  } else {
    echo "<script>alert('Invalid credentials');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | TrainEase</title>
  <style>
    body {
      background-color: #121212;
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
      width: 300px;
      box-shadow: 0 0 10px rgba(0,0,0,0.4);
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
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }
    input[type="submit"]:hover {
      background: #0288d1;
    }
    a {
      color: #00bcd4;
      text-decoration: none;
      display: block;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login" value="Login">
    <a href="register.php">Create new account</a>
  </form>
</body>
</html>

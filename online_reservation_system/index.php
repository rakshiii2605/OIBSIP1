<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Train Reservation System</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #121212;
      color: #f0f0f0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    h1 {
      color: #00bcd4;
      margin-bottom: 20px;
    }
    p {
      color: #aaa;
      margin-bottom: 30px;
    }
    a {
      display: inline-block;
      margin: 8px;
      padding: 12px 25px;
      text-decoration: none;
      color: #fff;
      background: linear-gradient(45deg, #00bcd4, #3f51b5);
      border-radius: 8px;
      transition: all 0.3s ease;
    }
    a:hover {
      transform: scale(1.05);
      background: linear-gradient(45deg, #3f51b5, #00bcd4);
    }
    footer {
      position: fixed;
      bottom: 15px;
      font-size: 13px;
      color: #777;
    }
  </style>
</head>
<body>
  <h1>🚄 Online Train Reservation System</h1>
  <p>Book your tickets easily and securely</p>
  <div>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
    <a href="reserve.php">Book Ticket</a>
    <a href="cancel.php">Cancel Ticket</a>
  </div>
  <footer>© 2025 TrainEase. All Rights Reserved.</footer>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "root", "reservation_system");
if(isset($_POST['cancel'])){
  $pnr = $_POST['pnr'];
  $update = "UPDATE reservations SET status='Cancelled' WHERE pnr='$pnr'";
  mysqli_query($conn, $update);
  echo "<script>alert('Ticket Cancelled Successfully!');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cancel Ticket | TrainEase</title>
  <style>
    body {
      background-color: #181818;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: #232323;
      padding: 30px;
      border-radius: 10px;
      width: 300px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
    h2 { text-align: center; color: #ff5252; }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
    }
    input[type="submit"] {
      background: #ff5252;
      color: white;
      cursor: pointer;
      transition: 0.3s;
    }
    input[type="submit"]:hover {
      background: #ff1744;
    }
  </style>
</head>
<body>
  <form method="POST">
    <h2>Cancel Ticket</h2>
    <input type="text" name="pnr" placeholder="Enter PNR" required>
    <input type="submit" name="cancel" value="Cancel Ticket">
  </form>
</body>
</html>

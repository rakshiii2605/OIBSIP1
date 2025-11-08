<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "reservation_system");

if(isset($_POST['book'])){
  $email = $_SESSION['email'];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE email='$email'"));
  $user_id = $user['id'];

  $train_name = $_POST['train_name'];
  $train_number = $_POST['train_number'];
  $class_type = $_POST['class_type'];
  $journey_date = $_POST['journey_date'];
  $from_place = $_POST['from_place'];
  $to_place = $_POST['to_place'];
  $pnr = "PNR".rand(100000,999999);

  $query = "INSERT INTO reservations (user_id, train_name, train_number, class_type, journey_date, from_place, to_place, pnr)
            VALUES ('$user_id','$train_name','$train_number','$class_type','$journey_date','$from_place','$to_place','$pnr')";
  mysqli_query($conn, $query);

  echo "<script>alert('Reservation Successful! Your PNR: $pnr');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Ticket | TrainEase</title>
  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background-color: #1e1e1e;
      padding: 30px;
      border-radius: 10px;
      width: 350px;
      box-shadow: 0 0 15px rgba(0,0,0,0.5);
    }
    h2 {
      text-align: center;
      color: #00bcd4;
    }
    input, select {
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
  </style>
</head>
<body>
  <form method="POST">
    <h2>Book Your Train</h2>
    <input type="text" name="train_name" placeholder="Train Name" required>
    <input type="text" name="train_number" placeholder="Train Number" required>
    <select name="class_type" required>
      <option value="">Select Class</option>
      <option>AC First Class</option>
      <option>AC Second Class</option>
      <option>Sleeper</option>
      <option>General</option>
    </select>
    <input type="date" name="journey_date" required>
    <input type="text" name="from_place" placeholder="From" required>
    <input type="text" name="to_place" placeholder="To" required>
    <input type="submit" name="book" value="Book Ticket">
  </form>
</body>
</html>

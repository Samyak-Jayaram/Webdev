<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  h2 {
    color: #1ec5e5;
    font-size: 36px;
    text-align: center;
    margin-bottom: 40px;
  }

  .user-details {
    width: 400px;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  label {
    color: #333;
    font-size: 18px;
    display: block;
    margin-bottom: 5px;
  }

  p {
    margin-bottom: 15px;
    font-size: 16px;
    color: #555;
  }
</style>
</head>
<body>
<div class="user-details">
<h2>Submitted User Details</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$gender = $_POST["gender"];
echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Email:</strong> " . $email . "</p>";
echo "<p><strong>Age:</strong> " . $age . "</p>";
echo "<p><strong>Gender:</strong> " . $gender . "</p>";
}
?>
</div>
</body>
</html>

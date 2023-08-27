<!DOCTYPE html>
<html>
<head>
<title>User Details Form</title>
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
    margin-bottom: 550px;
    position: absolute;
    left: 600px;
  }

  form {
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

  input[type="text"],
  input[type="email"],
  input[type="number"] {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  input[type="radio"] {
    margin-right: 5px;
    margin-bottom: 10px;
    display: inline-block; /* Add this line to make radio buttons sit in a single line */
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
<h2>User Details Form</h2>
<form method="post" action="display.php">
<label for="name">Name:</label>
<input type="text" name="name" required><br><br>
<label for="email">Email:</label>
<input type="email" name="email" required><br><br>
<label for="age">Age:</label>
<input type="number" name="age" required><br><br>
<label for="gender">Gender:</label>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female" required> Female
<input type="radio" name="gender" value="Other" required> Other<br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>

<?php
session_start();
// Check if the 'views' session variable exists
if (!isset($_SESSION['views'])) {
$_SESSION['views'] = 1; // Initialize the 'views' session variable to 1 if it doesn't exist
} else {
$_SESSION['views']++; // Increment the 'views' session variable if it exists
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Page Views Counter</title>
<style>
body {
  font-family: Arial, sans-serif;
  text-align: center;
  background-color: #f0f0f0;
  margin: 0;
  padding: 0;
}

.container {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.counter {
  font-size: 24px;
  font-weight: bold;
  margin-top: 10px;
}

.refresh {
  margin-top: 20px;
  padding: 8px 16px;
  font-size: 16px;
  background-color: #3498db;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.refresh:hover {
  background-color: #2980b9;
}

</style>
</head>
<body>
<div class="container">
  <h2>Page Views Counter</h2>
  <p>This page has been viewed <span class="counter"><?php echo $_SESSION['views']; ?></span> times.</p>
  <p>Refresh the page to see the count increase.</p>
  <button class="refresh" onclick="location.reload();">Refresh</button>
</div>
</body>
</html>

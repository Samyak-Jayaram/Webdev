<?php
// Set the cookie with the current date-time
$expiration = time() + (60 * 60 * 24 * 30); // Cookie will expire in 30 days
if (!isset($_COOKIE['last_visited'])) {
setcookie('last_visited', date('Y-m-d H:i:s'), $expiration);
}
// Get the last visited date-time from the cookie
$lastVisitedDateTime = $_COOKIE['last_visited'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html>
<head>
<title>Last Visited Date-Time</title>
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

.message {
  font-size: 24px;
  margin-bottom: 20px;
}

.date-time {
  font-size: 18px;
  color: #333;
}

</style>
</head>
<body>
<div class="container">
  <h2>Last Visited Date-Time</h2>
  <p class="message">
    <?php
    if ($lastVisitedDateTime !== 'Unknown') {
      echo 'You last visited on:';
    } else {
      echo 'Welcome! This is your first visit.';
    }
    ?>
  </p>
  <p class="date-time"><?php echo $lastVisitedDateTime; ?></p>
</div>
</body>
</html>

<?php
// Connect to the database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the comments from the database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Display the comments
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='comment'>";
  echo "<h3>" . $row['name'] . "</h3>";
  echo "<p>" . $row['comment'] . "</p>";
  echo "<small>" . $row['created_at'] . "</small>";
  echo "</div>";
}

// Close the database connection
mysqli_close($conn);
?>

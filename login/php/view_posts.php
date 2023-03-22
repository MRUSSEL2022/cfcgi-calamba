<?php
// Include the database configuration file
include('db_conn.php');

// Get all the posts from the database
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Check if any posts are found
if (mysqli_num_rows($result) > 0) {
	// Loop through each row and display the post title and content
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<h2>" . $row['title'] . "</h2>";
		echo "<p>" . $row['content'] . "</p>";
	}
} else {
	echo "No posts found.";
}

// Close the database connection
mysqli_close($conn);
?>

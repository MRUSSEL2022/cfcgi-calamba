<?php
// Include the database configuration file
include('db_conn.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the post data from the form submission
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);

	// Insert the post data into the database
	$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
	if (mysqli_query($conn, $sql)) {
		// Redirect the user back to the index.php page
		header("Location: index.php");
		exit();
	} else {
		echo "Error: " . mysqli_error($conn);
	}
}

// Close the database connection
mysqli_close($conn);
?>

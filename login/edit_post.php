<!DOCTYPE html>
<html>
  <head>
    <title>Edit Post</title>
    <!-- Include the Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="my-4">Edit Post</h1> <?php
		// Include the database connection file
		include_once("db_conn.php");

		// Check if the form was submitted
		if (isset($_POST['title']) && isset($_POST['content'])) {
			// Sanitize user input to prevent SQL Injection attacks
			$title = mysqli_real_escape_string($mysqli, $_POST['title']);
			$content = mysqli_real_escape_string($mysqli, $_POST['content']);
			$post_id = mysqli_real_escape_string($mysqli, $_POST['post_id']);

			// Update the post in the database
			mysqli_query($mysqli, "UPDATE posts SET title='$title', content='$content' WHERE id='$post_id'");

			// Redirect the user back to the homepage
			header("Location: index.php");
			exit();
		}

		// Check if the post ID was provided in the URL
		if (isset($_GET['id'])) {
			// Sanitize the post ID to prevent SQL Injection attacks
			$post_id = mysqli_real_escape_string($mysqli, $_GET['id']);

			// Fetch the post from the database
		}

<?php

// assuming you have retrieved the name and surname from the database
$name = $_SESSION['name'];

// retrieve the surname from the database using the user ID in the session
$id = $_SESSION['id'];
$sql = "SELECT surname FROM user WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$surname = $row['surname'];

// concatenate the name and surname
$full_name = $name . " " . $surname;
?>

<div class="container">
    <h1 class="my-4">Posts</h1> 
    <?php
    // Include the database configuration file
		
    // Get all the posts from the database
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);

    // Check if any posts are found
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row and display the post title, content, and created date
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='card'>";
                
            echo "
            <div class='card-body'>";
            echo "  <h2 class='user'>" . $full_name . "</h2>";
            echo "
            <h3 class='card-tweet'>" . $row['content'] . "</h3>";
            echo "
            <p class='card-text'>
                <small class='text-muted'> " . date('F j, Y, g:i a', strtotime($row['created_at'])) . "</small>
            </p>";
            echo "
            <span class='line'></span>";
            echo "
            </div>";
            echo "
            </div>";
        }
    } else {
        echo "No posts found.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</div>


<?php
    session_start();
    include "db_conn.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title">CFCGI<span>CALAMBA</span>
                </div>
                <div class="sidebar-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li>
                        <a href="#" data-toggle="tooltip" title="Search">
                            <i class="fa-solid fa-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tooltip" title="Notifications">
                            <i class="fa-solid fa-bell"></i>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" data-toggle="tooltip" title="Log-out">
                            <i class="fa-solid fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=""> <?php if ($_SESSION['role'] == 'admin'){ ?>
            <!-- for admin -->
            
                <!--Admin icon / image in large Screen  -->
                <div class="row">
                    <div class="col-md-5 d-none d-sm-block">
                            <div class="card border-dark" style="width: 18rem; height:22rem; margin-top:5rem; margin-left:2rem; border-radius:15px;">
                                <img src="img/admin.jpg" class="card-img-top img-thumbnail border-0" alt="admin image" style="margin-left: 2.5rem; padding-top: 2rem; width: 200px; height: 250px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title"> <?=$_SESSION['name']?> </h5>
                                    <a href="logout.php" class="btn btn-dark" style="border-radius: 25px;">Logout</a>
                                </div>
                            </div>
                    </div>
                            <!--Admin icon / image in Small Screen -->
                    <div class="col-sm-12 d-block d-sm-none">
                        <div class="card border-dark container-fluid" style="width: 16rem; height:18rem; margin-top:5rem; margin-bottom:0; border-radius:15px;">
                            <img src="img/admin.jpg" class="card-img-top img-thumbnail border-0" alt="admin image" style="margin-left: 2.5rem; padding-top:0; padding-bottom:0; width: 150px; height: 180px;">
                            <div class="card-body text-center">
                                <h5 class="card-title"> <?=$_SESSION['name']?> </h5>
                                <a href="logout.php" class="btn btn-dark" style="border-radius: 25px;">Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- Large Screen -->
                    <div class="col-5 col-sm-5 col-md-3 d-none d-sm-block" style=" margin-top:6rem; margin-left:0;">
                        <div class="card text-white bg-primary mb-3 text-dark" style="max-width: 15rem;border-radius:15px; height:10rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><b>Active Members</b></h5>
                                <br>
                                <p class="card-text text-center"><b>###</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-sm-5 col-md-3 d-none d-sm-block" style=" margin-top:6rem; margin-left:0 ; padding-left: 0; margin-left:0;">
                        <div class="card text-white bg-danger mb-3 text-dark" style="max-width: 15rem;border-radius:15px; height:10rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><b>Messages</b></h5>
                                <br>
                                <p class="card-text text-center"><b>###</b></p>
                            </div>
                        </div>
                    </div>
                    <!-- Small Screen -->
                    <div class="col-6 col-sm-6 col-md-3 d-block d-sm-none" style=" margin-top:7rem;">
                        <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                                <h5 class="card-title">Primary card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                        
                    
                    
                    <hr/>

                    <div class="p-3"> <?php include 'php/member.php';
                        if (mysqli_num_rows($res) > 0)  {?> <h2 class="display-5 fs-1" style="margin-left:2rem;">Members</h2>
                        <table class="table" style="width: 32rem;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody> <?php
                                $i =1;
                                while ($rows = mysqli_fetch_assoc($res)) {?>
                                <tr>
                                    <th scope="row"> <?=$i?> </th>
                                    <td> <?=$rows['name']?> </td>
                                    <td> <?=$rows['username']?> </td>
                                    <td> <?=$rows['role']?> </td>
                                </tr> <?php $i++; }?>
                            </tbody>
                        </table> 
                        <?php }?>
                    </div> 
            <?php 
            }

            else {?>
            <!-- for member users -->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="img/cfcgi2.png" alt="">
                        <p>CFCGI</p>
                    </center>
                    <div class="divider grey"></div>
                        <li class="item">
                            <a href="#" class="menu-btn">
                                <i class="fas fa-desktop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    <div class="divider grey"></div>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i>
                            <span> Profile <i class="fas fa-chevron-down drop-down"></i>
                            </span>
                        </a>
                        <div class="sub-menu">
                        <a href="#">
                            <i class="fas fa-image"></i>
                            <span>Picture</span>
                        </a>
                        <a href="#">
                            <i class="fas fa-address-card"></i>
                            <span>Info</span>
                        </a>
                        </div>
                    </li>
                    <li class="item" id="message">
                        <a href="#message" class="menu-btn">
                            <i class="fas fa-envelope"></i>
                            <span> Message <i class="fas fa-chevron-down drop-down"></i>
                            </span>
                        </a>
                        <div class="sub-menu">
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                            <span>New</span>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope-square"></i>
                            <span>Sent</span>
                        </a>
                        <a href="#">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Spam</span>
                        </a>
                </div>
                </li>
                <li class="item" id="settings">
                <a href="#settings" class="menu-btn">
                    <i class="fas fa-cog"></i>
                    <span> Setting <i class="fas fa-chevron-down drop-down"></i>
                    </span>
                </a>
                <div class="sub-menu">
                    <a href="#">
                    <i class="fas fa-lock"></i>
                    <span>Password</span>
                    </a>
                    <a href="#">
                    <i class="fas fa-language"></i>
                    <span>Language</span>
                    </a>
                </div>
                </li>
                <li class="item">
                <a href="logout.php" class="menu-btn">
                    <i class="fas fa-info-circle"></i>
                    <span> Logout</span>
                </a>
                </li>
            </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">
            <div class="container">
                <h1 class="my-4">Post Content</h1>
                <form action="submit_post.php" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="border-radius:15px;">Submit</button>
                </form>
            </div>
            <div class="container">
            <h1 class="my-4">Posts</h1> <?php
		// Include the database configuration file
		include('db_conn.php');

		// Get all the posts from the database
		$sql = "SELECT * FROM posts ORDER BY created_at DESC";
		$result = mysqli_query($conn, $sql);

		// Check if any posts are found
		if (mysqli_num_rows($result) > 0) {
			// Loop through each row and display the post title, content, and created date
			while ($row = mysqli_fetch_assoc($result)) {
				echo "
															<div class='card my-4'>";
				echo "
																<div class='card-body'>";
				echo "
																	<h2 class='card-title'>" . $row['title'] . "</h2>";
				echo "
																	<p class='card-text'>" . $row['content'] . "</p>";
				echo "
																	<p class='card-text'>
																		<small class='text-muted'>Created on " . date('F j, Y, g:i a', strtotime($row['created_at'])) . "</small>
																	</p>";
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
            <!-- Include the Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->
        <script type="text/javascript">
            $(document).ready(function() {
            $(".sidebar-btn").click(function() {
                $(".wrapper").toggleClass("collapse")
            });
            });
        </script> <?php }?>
        </div>
    </body>
</html> <?php }
else {
    header("Location: mem_login.php");
} ?>
<?php
    session_start();
    include "../login/php/db_conn.php";
    if (isset($_SESSION['idnumber']) && isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/forum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/styleadmin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body>
    <!--wrapper start-->
    <?php require 'includes/header.php' ?>
      <div class=""> <?php if ($_SESSION['role'] == 'chaplain'){ ?>
        <!-- for admin -->
         <?php }else {?>
        <!-- for users -->
        <!--sidebar start-->
        <?php require 'includes/leftbar.php' ?>
        <!--sidebar end-->
        <!--main container start-->
        <div class="main-container">
          <div class="container">
            <h1 class="my-4">Post Content</h1>
            <form action="submit_post.php" method="post">
              <div class="form-group">
                <label for="content">Tweet:</label>
                <textarea class="form-control" id="content" name="content"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <?php require 'includes/forum.php' ?>
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
</html> <?php }else {
    header("Location: index.php");
} ?>
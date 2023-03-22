<?php
    session_start();
    include "../login/php/db_conn.php";
    if (isset($_SESSION['idnumber']) && isset($_SESSION['user_id'])) { ?>
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
              <!-- POST BOX -->
              <div class="widget-post" aria-labelledby="post-header-title">
                  <div class="widget-post__header">
                    <h2 class="widget-post__title" id="post-header-title">
                      <i class="fa fa-pencil" aria-hidden="true"></i>
                      Write Me
                    </h2>
                  </div>
                  <form action="submit_post.php" method="post" id="widget-form" class="widget-post__form" name="form" aria-label="post widget">
                    <div class="widget-post__content">
                      <label for="post-content" class="sr-only">Share</label>
                      <textarea id="content" name="content" class="widget-post__textarea scroller" placeholder="What's wrong on you?"></textarea>
                    </div>
                    <div class="widget-post__options is--hidden" id="stock-options">
                    </div>
                    <div class="widget-post__actions post--actions">
                      <div class="post-actions__attachments">
 
                        <button type="button" class="btn post-actions__upload attachments--btn">
                          <label for="upload-image" class="post-actions__label">
                            <i class="fa fa-upload" aria-hidden="true"></i> 
                            upload image
                          </label>
                        </button>
                        <input type="file" id="upload-image" accept="image/*" multiple>
                      </div>
                      <div class="post-actions__widget">
                        <button type="submit" class="btn post-actions__publish">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <br/>
                <br/>
              <!-- END POST BOX -->
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
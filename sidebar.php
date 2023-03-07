<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <!--wrapper start-->
    <div class="wrapper">
    <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title">CFC<span>GI</span></div>
                <div class="sidebar-btn">
                <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-search"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-bell"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
    <!--header menu end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <img src="img/cfcgi1.png" alt="">
                <p>CFCGI</p>
            </center>
            <li class="item">
                    <a href="#" class="menu-btn">
                        <i class="fas fa-desktop"></i><span>dashboard</span>
                    </a>
            </li>
            <li class="item" id="profile">
                    <a href="#profile" class="menu-btn"><i class="fas fa-user-circle"></i><span> Profile<i class="fas fa-chevron-down drop-down"></i></span></a>
                
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
                    <a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
                </div>
            </li>
            <li class="item" id="message">
                    <a href="#message" class="menu-btn"><i class="fas fa-envelope"></i><span> Message<i class="fas fa-chevron-down drop-down"></i></span></a>
                
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                    <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                    <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                </div>
            </li>
            <li class="item" id="settings">
                    <a href="#settings" class="menu-btn"><i class="fas fa-cog"></i><span> Setting<i class="fas fa-chevron-down drop-down"></i></span></a>
                
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                    <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                </div>
            </li>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-info-circle"></i><span> About</span>
                </a>
            </li>
        </div>
    </div>
    <!--sidebar end-->
    <!--main container start-->
    <div class="main-container">
        <form method="post" action="submit_post.php">
            <label for="title">Post Title:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="content">Post Content:</label>
            <textarea name="content" id="content"></textarea>
            <br>
            <input type="submit" value="Submit Post">
        </form>
    </div>
    <!--main container end-->
    </div>
    <!--wrapper end-->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse")
            });
        });
    </script>
</body>
</html>
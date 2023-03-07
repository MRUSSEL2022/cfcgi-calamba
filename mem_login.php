<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:grey;">
    <div class="">
        <img src="images/eaglelogo.png" alt="logo" style="position: absolute; width:250px; height:100px; margin-top:0; margin-bottom:0; ">
    </div>
    <div class="">
        <h3 class="d-block d-sm-none text-end" style="position: inherit; padding-right:90px; padding-top:50px; padding-bottom:0; margin-bottom: 0; color:#d3d5db;">CFCGI Calamba</h3>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <!-- For large screen -->
        <form class="border shadow p-5 d-none d-sm-block" action="php/check-login.php" method="post" style="width: 450px; border-radius:25px; background-color:#d3d5db; position:absolute;">
            <h2 class="text-center p-2" style="margin-top:0px; padding-top:0%;">LOG-IN</h2>
            <?php if (isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
                <?php }?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-1">
                <label class="form-label">Select User:</label>
            </div> 
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="user">Member</option>
                <option value="admin">Admin</option>
            </select>
            <div class="text-center">
            <button type="submit" class="btn btn-primary" style="border-radius:25px; width: 8em; margin-bottom: 10px; margin-top:10px;">Log-in</button>
            </div>
        </form>
        <!-- For small screen -->
        <form class="border shadow p-5 d-block d-sm-none" action="php/check-login.php" method="post" style="width: 350px; height:400px; border-radius:25px; background-color:#d3d5db; position:absolute;">
            <h5 class="text-center p-1" style="margin-top:0px; padding-top:0; ">LOG-IN</h5>
            <?php if (isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
                <?php }?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-1">
                <label class="form-label">Select User:</label>
            </div> 
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option selected value="user">Member</option>
                <option value="admin">Admin</option>
            </select>
            <div class="text-center">
            <button type="submit" class="btn btn-primary" style="border-radius:25px; width: 8em; margin-bottom:0; margin-top:0;">Log-in</button>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php }else {
    header("Location: home.php");
} ?>
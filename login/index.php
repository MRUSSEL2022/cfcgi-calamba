<?php
    session_start();
    if (!isset($_SESSION['id_number']) && !isset($_SESSION['user_id'])) { ?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body>
    <div class="bg-dark text-white">
      <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form class="border shadow p-3 rounded" action="php/check-login.php" method="post" style="width: 450px;">
        <img src="img/eaglelogo.png" class="img-thumbnail bg-dark" alt="...">
          <h2 class="text-center p-3">CFCGI <span style="color:#4ccee8;">LOGIN</span></h2> <?php if (isset($_GET['error'])){ ?> <div class="alert alert-danger" role="alert"> <?=$_GET['error']?> </div> <?php }?> 
          <div class="input-group mb-3">
              <span class="input-group-text">ID Number</span>
              <input type="text" name="idnumber" class="form-control" id="idnumber">
          </div>
          <br>
          <div class="input-group mb-3">
              <span class="input-group-text">Password</span>
              <input type="password" name="password" class="form-control" id="password">
          </div>
          <!-- An element to toggle between password visibility -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="checkbox" onclick="myFunction()">Show Password  
           <div class="input-group mb-3">
              <span class="input-group-text">Select:</span>
    
          <select class="form-select " name="role" aria-label="Default select example">
            <option selected value="rider">Rider</option>
            <option value="action_officer">Action Officer</option>
            <option value="chaplain">Chaplain</option>
          </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <br>
              <a href="forgot_password.php">Forgot Password</a>
          <br>You don't have account? <a href="register.php" class="mt-3">Click Here</a>
        </form>
      </div>
    </div>
    <script>
          function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </body>
</html> <?php }else {
    header("Location: home.php");
} ?>
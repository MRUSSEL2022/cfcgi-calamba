<?php

 include ("../login/php/db_conn.php");
 session_start();

?>
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
      <form class="border shadow p-3 rounded" action="php/signup.php" method="POST" style="width: 450px;">
        <img src="img/eaglelogo.png" class="img-thumbnail bg-dark" alt="...">
        <h2 class="text-center p-3"><span style="color:#4ccee8;">CFCGI </span>REGISTER</h2>
        
        <div class="input-group">
          <span class="input-group-text">First and last name</span>
          <input type="text" name="name" class="form-control" id="name"  required>
          <input type="text" name="surname" class="form-control" id="surname" required>
        </div>
        <br>
        <div class="input-group mb-3">
          <span class="input-group-text">Email</span>
          <input type="text" name="email" class="form-control" id="email" required>
        </div>
        <br>
        <div class="input-group mb-3">
          <span class="input-group-text">ID Number</span>
          <input type="text" name="idnumber" class="form-control" id="idnumber" required>
        </div>
        <br>
        <div class="input-group mb-3">
          <span class="input-group-text">Contact Number</span>
              <input type="text" name="cnumber" class="form-control" id="cnumber" required>
          </div>
          <br>
          <div class="input-group mb-3">
              <span class="input-group-text">Password</span>
              <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <br>
          <div class="input-group mb-3">
              <span class="input-group-text">Confirm Password</span>
              <input type="password" name="cpassword" class="form-control" id="cpassword" required>
          </div>
          <!-- An element to toggle between password visibility -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="checkbox" onclick="confirmPassword()">Confirm Password  
           <div id="passwords"></div>
          <br>
          <div class="input-group mb-3">
              <span class="input-group-text">Select:</span>
          <select class="form-select " name="role" aria-label="Default select example" required>
            <option selected value="action_officer" >Action Officer</option>
            <option value="rider">Rider</option>
            <option value="chaplain">Chaplain</option>
          </select>
    </div>
          <button type="back" class="btn btn-primary"><a href="index.php" class="mt-3">Back</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
      </div>
    </div>

    
    <script>
        function confirmPassword() {
  var passwordInput = document.getElementById("password");
  var confirmPasswordInput = document.getElementById("cpassword");
  var passwordValue = passwordInput.value;
  var confirmPasswordValue = confirmPasswordInput.value;
  if (passwordValue !== confirmPasswordValue) {
    alert("Passwords do not match. Please try again.");
    return;
  }
  
  // Check if password meets criteria
  var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  if(!regex.test(passwordValue)) {
    alert("Password must contain at least one uppercase letter, one lowercase letter, one number, one special character, and be at least 8 characters long.");
    return;
  }
  
  // proceed with further actions
}

    </script>
   
  </body>
</html> 
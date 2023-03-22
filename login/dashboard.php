<?php
    session_start();
    include "../login/php/db_conn.php";
    if (isset($_SESSION['idnumber']) && isset($_SESSION['user_id'])) { ?>
<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>BBDMS | Admin Dashboard</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body> <?php include('includes/header.php');?> <?php include('includes/header.php');?> <div class=""> <?php if ($_SESSION['role'] == 'chaplain'){ ?>
      <!-- for admin -->
      <div class="card" style="width: 18rem;">
        <img src="img/admin.jpg" class="card-img-top" alt="admin image">
        <div class="card-body text-center">
          <h5 class="card-title"> <?=$_SESSION['name']?> </h5>
          <a href="logout.php" class="btn btn-dark">Logout</a>
        </div>
      </div>
      <div class="p-3"> <?php include 'php/member.php';
                        if (mysqli_num_rows($res) > 0)  {?> <h1 class="display-4 fs-1">Members</h1>
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
                                while ($rows = mysqli_fetch_assoc($res)) {?> <tr>
              <th scope="row"> <?=$i?> </th>
              <td> <?=$rows['name']?> </td>
              <td> <?=$rows['surname']?> </td>
              <td> <?=$rows['role']?> </td>
            </tr> <?php $i++; }?> </tbody>
        </table> <?php }?>
      </div> <?php }else {?>
      <!-- for users -->
      <!--sidebar start-->
      <div class="sidebar">
        <div class="sidebar-menu">
          <center class="profile">
            <img src="img/cfcgi1.png" alt="">
            <p>CFCGI</p>
          </center>
          <li class="item">
            <a href="#" class="menu-btn">
              <i class="fas fa-desktop"></i>
              <span>dashboard</span>
            </a>
          </li>
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
      <!-- Loading Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.bootstrap.min.js"></script>
      <script src="js/Chart.min.js"></script>
      <script src="js/fileinput.js"></script>
      <script src="js/chartData.js"></script>
      <script src="js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', ];
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(0, 99, 132)',
            borderColor: 'rgb(0, 99, 132)',
            data: [0, 10, 5, 2, 20, 1, 41],
          }]
        };
        const config = {
          type: 'line',
          data: data,
          options: {}
        };
      </script>
      <script>
        const myChart = new Chart(document.getElementById('myChart'), config);
      </script>
      <script>
        const myChart = new Chart(document.getElementById('myChart'), config);
      </script>
      <script>
        window.onload = function() {
          // Line chart from swirlData for dashReport
          var ctx = document.getElementById("dashReport").getContext("2d");
          window.myLine = new Chart(ctx).Line(swirlData, {
            responsive: true,
            scaleShowVerticalLines: false,
            scaleBeginAtZero: true,
            multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
          });
          // Pie Chart from doughutData
          var doctx = document.getElementById("chart-area3").getContext("2d");
          window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
            responsive: true
          });
          // Dougnut Chart from doughnutData
          var doctx = document.getElementById("chart-area4").getContext("2d");
          window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
            responsive: true
          });
        }
      </script>
  </body>
</html> <?php } ?>
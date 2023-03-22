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
                <td> <?=$rows['username']?> </td>
                <td> <?=$rows['role']?> </td>
              </tr> <?php $i++; }?> </tbody>
          </table> <?php }?>
        </div>
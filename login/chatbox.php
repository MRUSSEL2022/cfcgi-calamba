<?php
session_start();
include("db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Please Select Your Account</h4>
            </div>
            <div class="modal-body">
                <ol>
                    <?php
                        $user = mysqli_query($conn, "SELECT * FROM user")
                        or die("Failed to query database".mysqli_error());
                        while($user = mysqli_fetch_assoc($user))
                        {
                            echo '<li>
                            <a href="chatbox.php?userId='.$user["user_id"].'">'.$user["user"].'</a>
                                </li>
                                '
                        }
                    ?>
                </ol>
            </div>
        </div>
    </div>
</body>
</html>
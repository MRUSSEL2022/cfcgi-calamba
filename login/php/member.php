<?php

if (isset($_SESSION['idnumber']) && isset($_SESSION['user_id'])) { 

    $sql = "SELECT * FROM user ORDER BY user_id ASC";
        $res = mysqli_query($conn, $sql);
}else {
    header("Location: index.php");
} ?>

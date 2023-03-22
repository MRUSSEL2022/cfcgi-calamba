<?php
session_start();
include("../php/db_conn.php");

if (isset($_POST['idnumber']) && isset($_POST['password']) && isset($_POST['role'])) {
    $idnumber = $_POST['idnumber'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM user WHERE id_number='$idnumber' AND role='$role'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // handle query error
        $error = mysqli_error($conn);
        header("Location: ../index.php?error=Query Error: $error");
        exit;
    }

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];

        if (password_verify($password, $hash)) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['idnumber'] = $row['id_number'];

            header("Location: ../home.php");
        } else {
            header("Location: ../index.php?error=Incorrect ID Number or Password");
        }
    } else {
        header("Location: ../index.php?error=Incorrect ID Number or Password");
    }
} else {
    header("Location: ../index.php");
}
?>
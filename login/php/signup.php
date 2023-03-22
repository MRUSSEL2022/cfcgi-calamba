<?php

include("../php/db_conn.php");
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$idnumber = $_POST['idnumber'];
$cnumber = $_POST['cnumber'];
$password = $_POST['password'];
$role = $_POST['role'];

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO `user`(`name`, `surname`, `email`, `id_number`, `contact_number`, `password`, `role`)
VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssss", $name, $surname, $email, $idnumber, $cnumber, $passwordHash, $role);

if($stmt->execute()) {
    header('Location: ../index.php?success=Registration Successful');
} else {
    header('Location: ../register_form.php?error=Registration Failed');
}


?>

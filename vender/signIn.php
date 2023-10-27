<?php
session_start();
require_once 'connect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['email'] = $email;

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Некоректний формат email.";

    die(header('Location: ../login.php'));
}
if (empty($password)) {
    $_SESSION['error'] = "Пароль не можуть бути пустими.";
    die(header('Location: ../login.php'));
}


$query = mysqli_query(
    $connect,
    "SELECT * FROM `user` WHERE `email` = '$email'"
);
$row = mysqli_fetch_assoc($query);
if (!$row) {
    $_SESSION['error'] = "Такого email немає";
    die(header('Location: ../login.php'));
}

if (password_verify($password, $row['password'])) {
    $_SESSION['user']['name'] = $row['name'];
    $_SESSION['user']['email'] = $row['email'];
    $_SESSION['user']['phone'] = $row['phone'];
    die(header('Location: ../index.php'));
} else {
    $_SESSION['error'] = "Невірний пароль";
    die(header('Location: ../login.php'));
}

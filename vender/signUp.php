<?php
session_start();
require_once 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['number'] = $number;
// Валідація імені
if (strlen($name) < 3 || strlen($name) > 20) {
    $_SESSION['error'] = "Ім'я повинно містити від 3 до 20 символів.";
    die(header('Location: ../registration.php'));
}

// Валідація номера
if (!preg_match('/^\+[0-9]{12}$/', $number)) {
    $_SESSION['error'] = "Номер повинен бути українським та починатися з '+', наприклад, +380xxxxxxxxx.";
    die(header('Location: ../registration.php'));
}
if (strlen($number) < 8) {
    $_SESSION['error'] = "Номер повинен містити не менше 8 цифр.";
    die(header('Location: ../registration.php'));
}

// Валідація email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Некоректний формат email.";

    die(header('Location: ../registration.php'));
}

// Валідація пароля
if (strlen($password) < 6) {
    $_SESSION['error'] = "Пароль повинен містити принаймні 6 символів.";
    die(header('Location: ../registration.php'));
}

$queryEmail = mysqli_query(
    $connect,
    "SELECT * FROM `user` WHERE `email` = '$email'"
);
$rowEmail = mysqli_fetch_assoc($queryEmail);
if ($rowEmail) {
    $_SESSION['error'] = "Даний email вже зайнятий.";
    die(header('Location: ../registration.php'));
}
$queryPhone = mysqli_query(
    $connect,
    "SELECT * FROM `user` WHERE `email` = '$email'"
);
$rowPhone = mysqli_fetch_assoc($queryPhone);
if ($rowPhone) {
    $_SESSION['error'] = "Даний номер вже зайнятий.";
    die(header('Location: ../registration.php'));
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
mysqli_query(
    $connect,
    "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`) VALUES (NULL, '$name', '$email', '$number', '$hashedPassword')"
);

$_SESSION['user']['name'] = $name;
$_SESSION['user']['email'] = $email;
$_SESSION['user']['phone'] = $number;
$_SESSION['error'] = "Реєстрація пройшла успішно";
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['number']);
unset($_SESSION['password']);
die(header('Location: ../registration.php'));

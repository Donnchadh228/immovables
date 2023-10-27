<?php
session_start();
if ($_SESSION['user']) {
    header("Location: account.php");
}
$pageTitle = "Авторизація";

?>
<? include "head.php" ?>
<link rel="stylesheet" href="../css/auth.css">
<? include "header.php" ?>
<div id="content" class="content">

    <form class="auth" action="vender/signUp.php" method="POST">
        <div class="auth-title">Реєстрація</div>
        <div class="auth__inputs">
            <div class="auth__inputs-block">
                <label for="name">Введіть ваше ім'я:</label> <input value="<?= $_SESSION['name']; ?>" name="name" id="name" placeholder="Введіть ваше ім'я" type="text">
            </div>
            <div class="auth__inputs-block">
                <label for="number">Введіть ваш номер +...:</label> <input title="+380xxxxxxxxx" value="<?= $_SESSION['number']; ?>" name="number" id="number" placeholder="Введіть ваше номер " type="text">
            </div>
            <div class="auth__inputs-block">
                <label for="email">Введіть ваш email:</label> <input value="<?= $_SESSION['email']; ?>" name="email" id="email" placeholder="Введіть ваш email" type="text">
            </div>
            <div class="auth__inputs-block">
                <label for="email">Введіть ваш пароль:</label> <input name="password" id="password" placeholder="Введіть ваш пароль" type="password">
            </div>
            <div class="error"><?php
                                if ($_SESSION['error']) {
                                    echo $_SESSION['error'];
                                }
                                unset($_SESSION['error'])
                                ?></div>
            <button class="red-button">Зареєструватись</button>

        </div>
    </form>

</div>
<?php include "footer.php";
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['number']);
unset($_SESSION['password']);
?>
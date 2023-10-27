<?php
session_start();
if ($_SESSION['user']) {
    header("Location: account.php");
}
$pageTitle = "Авторизація";

?>
<? include "head.php" ?>
<link rel="stylesheet" href="css/auth.css">
<? include "header.php" ?>
<div id="content" class="content">

    <form class="auth" action="vender/signIn.php" method="POST">
        <div class="auth-title">Авторизація</div>
        <div class="auth__inputs">

            <div class="auth__inputs-block">
                <label for="email">Введіть ваш email:</label> <input name="email" id="email" placeholder="Введіть ваше email" type="text">
            </div>
            <div class="auth__inputs-block">
                <label for="password">Введіть ваш пароль:</label> <input name="password" id="password" placeholder="Введіть ваш пароль" type="password">
            </div>
            <div class="error"><?php
                                if ($_SESSION['error']) {
                                    echo $_SESSION['error'];
                                }
                                unset($_SESSION['error'])
                                ?></div>
            <button class="red-button">Увійти</button>

        </div>
    </form>

</div>
<? include "footer.php" ?>
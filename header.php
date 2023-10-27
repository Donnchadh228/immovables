<?php
session_start();

?>

<body>
    <header class="header" id="header">
        <div class="container dflex just-between">
            <div class="header-left">
                <a href="index.php"> <span style="color:rgb(216, 178, 53)">MY</span>DIM<span style="color:rgb(216, 178, 53)">.UA</span></a>
            </div>

            <div class="header-right">
                <!-- <a href="account.php" class=" btn-auth"> Подивитись нерухомість</a> -->
                <?php
                if ($_SESSION['user']) {
                ?>
                    <div class="name-account">
                        <img src="/img/avatar.png" alt="">
                        <span>MyNameIs</span>
                    </div>
                    <a href="sell.php" class=" btn-auth"> Продати нерухомість</a>
                    <a href="account.php" class=" btn-auth"> Мій акаунт</a>
                    <a href="vender/logout.php" class=" btn-auth"> Вихід</a>

                <?php
                } else {
                ?>
                    <a href="login.php" class="authorization btn-auth"> Авторизація</a>
                    <a href="registration.php" class="registration btn-auth"> Реєстрація</a>
                <?php
                }
                ?>
            </div>
        </div>
    </header>
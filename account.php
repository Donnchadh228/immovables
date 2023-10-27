<?php
include "components/formatPhone.php";
session_start();
if (!$_SESSION['user']) {
    header("Location: index.php");
}
$pageTitle = "Обліковий запис";
?>
<? include "head.php" ?>
<link rel="stylesheet" href="css/account.css">
<? include "header.php" ?>
<div id="content" class="content content-flex account">
    <div class="form form__account">
        <div class="form__title">Ваші особисті дані</div>
        <div class="form__user">
            <div class="form__user-img">
                <img src="img/avatar.png" alt="">
            </div>
            <div class="form__user-info">
                <div class="form__info-name">Ім'я: <?= $_SESSION['user']['name']; ?></div>
                <div class="form__info-number">Номер: <?= formatPhoneNumber($_SESSION['user']['phone']); ?></div>
                <div class="form__info-email">Електрона пошта: <?= $_SESSION['user']['email']; ?></div>
            </div>
        </div>
    </div>
    <div class="form form__immovables">
        <div class="form__title">Продаж вашої нерухомості</div>
        <div class="immovables">
            <div class="immovables__block">
                <div class="immovables__block-img"><img src="https://i.pinimg.com/564x/a4/8c/eb/a48ceba7baf9de7b45d0cbfebecfbb86.jpg" alt=""></div>
                <div class="immovables__block-info">
                    <div class="immovables__block-title">Продам дуже гарний будинок 400 метрів дуже гарний прям дуже </div>
                    <div class="immovables__block-address">Київська область, Київ, вул Якась-то-там, дім 25 </div>
                    <div class="immovables__block-price">5 231 123 421 грн</div>
                    <div class="immovables__block-rooms">
                        <div>4 кімнати</div>
                        &nbsp; | &nbsp;
                        <div>360 м<sup>2</sup></div>
                    </div>
                    <div class="immovables__block-buttons">
                        <a href=""><button class="red-button">Подивитись</button></a>
                        <a href=""><button class="red-button">Редагувати</button></a>
                        <a href=""><button class="red-button">Видалити</button></a>
                    </div>
                </div>

            </div>
            <div class="immovables__block">
                <div class="immovables__block-img"><img src="https://i.pinimg.com/564x/a4/8c/eb/a48ceba7baf9de7b45d0cbfebecfbb86.jpg" alt=""></div>
                <div class="immovables__block-info">
                    <div class="immovables__block-title">Продам дуже гарний будинок 400 метрів дуже гарний прям дуже </div>
                    <div class="immovables__block-address">Київська область, Київ, вул Якась-то-там, дім 25 </div>
                    <div class="immovables__block-price">5 231 123 421 грн</div>
                    <div class="immovables__block-rooms">
                        <div>4 кімнати</div>
                        &nbsp; | &nbsp;
                        <div>360 м<sup>2</sup></div>
                    </div>
                    <div class="immovables__block-buttons">
                        <a href=""><button class="red-button">Подивитись</button></a>
                        <a href=""><button class="red-button">Редагувати</button></a>
                        <a href=""><button class="red-button">Видалити</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
<? include "footer.php" ?>
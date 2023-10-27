<?php
include "components/formatPhone.php";
session_start();
if (!$_SESSION['user']) {
    header("Location: index.php");
}
include 'vender/getRegion.php';

$pageTitle = "Продаж нерухомості";
?>
<? include "head.php" ?>
<link rel="stylesheet" href="css/sell.css">
<? include "header.php" ?>
<div id="content" class="content content-flex ">
    <div class="form">
        <div class="form__title">Продажа нерухомості</div>
        <form action="" method="post">
            <div class="form__create-block">
                <label for="region">Виберіть регіон:</label>
                <select class="form__create-select" name="region" id="region">
                    <option class="form__create-option" disabled selected>Виберіть регіон</option>
                    <?php foreach ($getRegion as $region) { ?>
                        <option class="form__create-option" value="<?= $region['id']; ?>"><?= $region['region']; ?></option>
                    <?php  } ?>

            </div>



        </form>
    </div>

</div>
<? include "footer.php" ?>
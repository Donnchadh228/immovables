<?php
$connect = mysqli_connect("localhost", 'root', "", "immovables");

if (!$connect) {
    die('Помилки при підключенні до БД');
}

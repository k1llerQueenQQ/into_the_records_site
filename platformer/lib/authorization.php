<?php
$Email = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$Login = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));



//DB
require 'db.php';

//Auth user
$sql = 'SELECT Id FROM users WHERE Login = ? AND Password = ?';
$query = $pdo->prepare($sql);
$query->execute([$Email, $Login]);


if ($query->rowCount() == 0) {
    echo 'Данные введены не верно';
} else {
    setcookie('login', $Email, time() + 5 * 24 * 60 * 60, '/');
    setcookie('Id2', $qwq, time() + 5 * 24 * 60 * 60, '/');
    header('Location: /user.php');
}
